import requests
import sys
from requests.auth import HTTPBasicAuth
img = sys.argv[1]

data = requests.post(
    url = "https://idpdecathlon.oxylane.com/as/token.oauth2?grant_type=client_credentials",
    headers = {
        "Authorization": "Basic QzBlZjlkNjAxZjkwMWZmMDdkNWUzYzg3YjVkMmM1YmIyOWMzMzk1MGU6U2lhaGZnRkE0NDFSMzliaEJkSEFJZUpOV3Y4MFNBMVpia21pRXV6ZkYya2RIb1ZHYnRuZWR0Qkl3NU9yaTVySQ==",
    }
)
token=""
try:
    if data.status_code == 200:
        token = data.json()['access_token']
    else:
        print(data.text)
except:
    pass

data = requests.post(
    url = "https://api.decathlon.net/sport_vision_api/v1/sportclassifier/predict/",
    headers = {
        "Authorization": "Bearer "+token+"",
        "X-API-KEY": "b161265e-774e-4c16-ae29-024078274571",
    },
    data = {"file" : img}
)
try:
    if data.status_code == 200:
        print(data.text)
    else:
        print(data.text)
except:
    pass