import base64
import requests
import json

userkey = 'your userkey'
subuserid = 'subuserid as per agreement'
version = '7.0.0'
#resume public url with file extension
publicurl= 'http://yourpublicurl/sample1.doc'
# service url- provided by RChilli
url="http://rest.rchilli.com/RChilliParser/Rchilli/parseResume"

headers = {'content-type': 'application/json'}
body =  """{"url":\""""+publicurl+"""\","userkey":\""""+ userkey+"""\",\"version\":\""""+version+"""\",\"subuserid\":\""""+subuserid+"""\"}"""
response = requests.post(url,data=body,headers=headers)
resp =json.loads(response.text)
#read values from response
if resp.get('ResumeParserData'):
	Resume =resp["ResumeParserData"]
	print (Resume["FirstName"])
	print (Resume["LastName"])
	print (Resume["Email"])
	print (Resume["SegregatedExperience"])
else:
#error
	error =resp["error"]
	print (error["errorcode"])
	print (error["errormessage"])