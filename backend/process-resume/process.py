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

print ("Starting to Process Resumes...")

sql = "SELECT id, resume_json FROM resumes"
cursor = db.cursor()
cursor.execute(sql)
records = cursor.fetchall()
    
print ("Total rows fetched: ", cursor.rowcount)
    
for row in records:
    print (row['id'])
    json_string = json.loads(row['resume_json'])
    print (json_string['ResumeParserData']['FirstName'])
    print (json_string['ResumeParserData']['LastName'])
    print (json_string['ResumeParserData']['Email'])
    print (json_string['ResumeParserData']['FormattedPhone'])
    print (json_string['ResumeParserData']['City'])
    print (json_string['ResumeParserData']['State'])
    print (json_string['ResumeParserData']['Country'])
    print (json_string['ResumeParserData']['FormattedAddress'])
    print (json_string['ResumeParserData']['ZipCode'])
    print (json_string['ResumeParserData']['VisaStatus'])
    print (json_string['ResumeParserData']['Category'])
    print (json_string['ResumeParserData']['SubCategory'])
    print (json_string['ResumeParserData']['CurrentEmployer'])
    print (json_string['ResumeParserData']['JobProfile'])
    print (json_string['ResumeParserData']['ExecutiveSummary'])
