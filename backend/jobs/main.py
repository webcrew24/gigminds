# import packages
import requests
import pandas as pd
import time 
from library import *
import re
import datetime

import pymysql.cursors
import pymysql


datetime_object = datetime.datetime.now()

db = pymysql.connect (host="cldy-hub-db-dev-do-user-1524670-0.db.ondigitalocean.com",
                     user="doadmin",
                     passwd="jmbly6e4obtma5z0",
                     db="defaultdb",
                     port=25060,
                     charset='utf8mb4',
                     cursorclass=pymysql.cursors.DictCursor)

vocab = ["salesforce", "cpq", "apex", "lightning", "visualforce", "workflow", "administrator", "developer", "analyst", "apttus", "steelbrick", "billing", "sfdc", "mulesoft", "tableau", "trigger"]

print ("Starting Indeed Job Scraper")




# limit per sity
max_results_per_city = 10

# db of city 
city_set = ['Fremont', 'San Francisco', 'Berkeley', 'Campbell', 'Cupertino', 'Daly City', 'Dublin', 'Palo Alto', 'Menlo Park', 'Hayward', 'Milpitas', 'Mountain View', 'Redwood City', 'Oakland', 'San Jose', 'Sunnyvale', 'Santa Clara', 'San Carlos', 'San Rafael', 'Saratoga', 'Campbell']

# job roles
job_set = ['salesforce']


# file num
file = 1

# from where to skip
SKIPPER = 0

# loop on all cities
for city in city_set:
    
    # for each job role
    for job_qry in job_set:
        
        # count
        cnt = 0
        startTime = time.time()

        # skipper
        if(file > SKIPPER):
        
            # dataframe
            df = pd.DataFrame(columns = ['unique_id', 'city', 'job_qry','job_title', 'company_name', 'location', 'summary', 'salary', 'link', 'date', 'full_text'])
        
            # for results
            for start in range(0, max_results_per_city, 10):

                # get dom 
                page = requests.get('http://www.indeed.com/jobs?q=' + job_qry +'&l=' + str(city) + '&start=' + str(start))

                #ensuring at least 1 second between page grabs                    
                time.sleep(1)  

                #fetch data
                soup = get_soup(page.text)
                divs = soup.find_all(name="div", attrs={"class":"row"})
                
                # if results exist
                if(len(divs) == 0):
                    break

                # for all jobs on a page
                for div in divs: 

                    #specifying row num for index of job posting in dataframe
                    num = (len(df) + 1) 
                    cnt = cnt + 1

                    #job data after parsing
                    job_post = [] 

                    #append unique id
                    job_post.append(div['id'])

                    #append city name
                    job_post.append(city)

                    #append job qry
                    job_post.append(job_qry)

                    #grabbing job title
                    job_post.append(extract_job_title(div))

                    #grabbing company
                    job_post.append(extract_company(div))

                    #grabbing location name
                    job_post.append(extract_location(div))

                    #grabbing summary text
                    job_post.append(extract_summary(div))

                    #grabbing salary
                    job_post.append(extract_salary(div))

                    #grabbing link
                    link = extract_link(div)
                    job_post.append(link)

                    #grabbing date
                    job_post.append(extract_date(div))

                    #grabbing full_text
                    job_post.append(extract_fulltext(link))

                    #appending list of job post info to dataframe at index num
                    df.loc[num] = job_post

                    wordcount = dict((x,0) for x in vocab)
                    for w in re.findall(r"\w+", str(job_post[3] + " " + job_post[10]).lower()):
                        if w in wordcount:
                            wordcount[w] += 1


                    wordcount = re.sub("'", "", str(wordcount))
                    with db.cursor() as cursor:
                        sql = "INSERT INTO `jobs` (`reference_id`, `city`, `query`, `title`, `company`, `location`, `summary`, `salary`, `url`, `posting_date`, `details`, `keywords_frequency`) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s) ON DUPLICATE KEY UPDATE city = %s, keywords_frequency = %s"
                        cursor.execute(sql, (job_post[0], job_post[1], job_post[2], job_post[3], job_post[4], job_post[5], job_post[6], job_post[7], job_post[8], job_post[9], job_post[10], wordcount, job_post[1], wordcount))
                    db.commit()



                    
                #debug add
                #write_logs(('Completed =>') + '\t' + city  + '\t' + job_qry + '\t' + str(cnt) + '\t' + str(start) + '\t' + str(time.time() - startTime) + '\t' + ('file_' + str(file)))

            #saving df as a local csv file 
            #df.to_csv('jobs_' + str(file) + '.csv', encoding='utf-8')
        
        #else:

            #debug add
            #write_logs(('Skipped =>') + '\t' + city  + '\t' + job_qry + '\t' + str(-1) + '\t' + str(-1) + '\t' + str(time.time() - startTime) + '\t' + ('file_' + str(file)))
        
        # increment file
        file = file + 1

