import requests
from requests.auth import HTTPBasicAuth
data = requests.post(
    url = "https://api.decathlon.net/sport_vision_api/v1/sportclassifier/predict/",
    headers = {
        "Authorization": "Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6Ik1BSU4iLCJwaS5hdG0iOiIyIn0.eyJzY29wZSI6W10sImNsaWVudF9pZCI6IkMwZWY5ZDYwMWY5MDFmZjA3ZDVlM2M4N2I1ZDJjNWJiMjljMzM5NTBlIiwiaXNzIjoiaWRwZGVjYXRobG9uIiwianRpIjoidVI3aXBxanBzaSIsInN1YiI6IkMwZWY5ZDYwMWY5MDFmZjA3ZDVlM2M4N2I1ZDJjNWJiMjljMzM5NTBlIiwib3JpZ2luIjoiY29ycG9yYXRlIiwiZXhwIjoxNjY5OTUyMDQ3fQ.QhtmYdGyEJONJX8aLattPkMC1Vj0KZHfMxUQ699RjShPprUWjspKGZRcHOMNeVP8PVFjqvPTxVQWGBKOkQrfY6ivHrYz7XBgSDdpd3XEjspyp1qNtsglH8Ef48yKV7QO8vJLMyr2vd5APhw3bFTHOCBhHhmdT2OcXk4z7EyKJPsF1Pu-E5314l03XUYQteMZ-EN8xFNlEYWon8N7H687PdvVwAhxrhuTov46VXshGyNa9L-TIOpQ2jLMd0zCg03_--tORD_cLUfs1mtfNFlOn1NXTaj9myYwXuBeoMn76oTIFMraTLPd-XBGnb6XpH3I09kDTazSi3XZ_vwgAcIygQ",
        "X-API-KEY": "b161265e-774e-4c16-ae29-024078274571",
    },
    data = {"file" : "https://contents.mediadecathlon.com/p1524091/k$538c9e75652557b45da85774a7231e83/dbi_ad805706+37b0+45bf+bd6c+1d8b8728a591.jpg"}
)
try:
    if data.status_code == 200:
        print(data.text)
    else:
        print(data.text)
except:
    pass