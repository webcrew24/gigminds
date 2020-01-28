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



with db.cursor() as cursor:
    sql = "SELECT `resume_filename`, `resume_binary_file` FROM resumes"
    cursor.execute(sql)
    files = cursor.fetchall()
    for doc in files:
        with open(doc['resume_filename'], 'wb') as file:
            file.write(doc['resume_binary_file'])
