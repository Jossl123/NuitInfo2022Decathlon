import requests
from time import gmtime, strftime

api =  "http://ip-api.com/json/?fields=query"
log = requests.get(api).json()
date = strftime('%Y-%m-%d %H:%M:%S', gmtime())

print(date)
print(log)