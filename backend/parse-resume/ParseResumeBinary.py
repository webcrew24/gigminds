import base64
import requests
import json
import os
from os import path
import shutil
import glob
import pymysql.cursors
import pymysql
import uuid

db = pymysql.connect (host="cldy-hub-db-dev-do-user-1524670-0.db.ondigitalocean.com",
                     user="doadmin",
                     passwd="jmbly6e4obtma5z0",
                     db="defaultdb",
                     port=25060,
                     charset='utf8mb4',
                     cursorclass=pymysql.cursors.DictCursor)

print ("Starting to Parse Resumes...")

userkey = '3SYCRFQHOOT'
subuserid = 'Cloudely, Inc'
version = '7.0.0'

# service url- provided by RChilli
url="http://rest.rchilli.com/RChilliParser/Rchilli/parseResumeBinary"

srcDirectory = "/var/www/html/talenthub/backend/resume-inbox/attachments/"

for i in glob.glob(os.path.join(srcDirectory, "*.png")):     
    try:        
        os.chmod(i,0o777)        
        os.remove(i)     
    except OSError:        
        pass

allFilesArray = glob.glob("/var/www/html/talenthub/backend/resume-inbox/attachments/*.*")
destDirectory = "/var/www/html/talenthub/backend/resume-inbox/archived/"


for fp in allFilesArray:
	filename = os.path.basename(fp)
	print (filename)

	with open(fp, "rb") as filepath:
		encoded_string = base64.b64encode(filepath.read())

	with open(fp, "rb") as filepath:
		file_content = filepath.read()

	data64 = encoded_string.decode('UTF-8')

	headers = {'content-type': 'application/json'}

	body =  """{"filedata":\""""+data64+"""\","filename":\""""+ filename+"""\","userkey":\""""+ userkey+"""\",\"version\":\""""+version+"""\",\"subuserid\":\""""+subuserid+"""\"}"""

	response = requests.post(url,data=body,headers=headers)
	resp =json.loads(response.text)
	#read values from response
	if resp.get('ResumeParserData'):
		Resume =resp["ResumeParserData"]
		print("Parsing Resume...")

		with db.cursor() as cursor:
			sql = "INSERT INTO `resumes` (`id`, `first_name`, `last_name`, `email`, `resume_filename`, `source`, `resume_json`, `resume_binary_file`) VALUES (%s, %s, %s, %s, %s, %s, %s, %s) ON DUPLICATE KEY UPDATE resume_json = %s"
			cursor.execute(sql, (str(uuid.uuid1()), str(Resume["FirstName"]).capitalize(), str(Resume["LastName"]).capitalize(), str(Resume["Email"]).lower(), filename, "Email Inbox", response.text, file_content, response.text))
		db.commit()

		#shutil.move(path.join(srcDirectory, filename), destDirectory) 
		os.remove(path.join(srcDirectory, filename))

	else:
	#error
		error =resp["error"]
		print(error)
		#print (error["errorcode"])
		#print (error["errormessage"])



