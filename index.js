var token = "eyJhbGciOiJSUzI1NiIsImtpZCI6Ik1BSU4iLCJwaS5hdG0iOiIyIn0.eyJzY29wZSI6W10sImNsaWVudF9pZCI6IkMwZWY5ZDYwMWY5MDFmZjA3ZDVlM2M4N2I1ZDJjNWJiMjljMzM5NTBlIiwiaXNzIjoiaWRwZGVjYXRobG9uIiwianRpIjoiU0pYR1Fjc2FSOSIsInN1YiI6IkMwZWY5ZDYwMWY5MDFmZjA3ZDVlM2M4N2I1ZDJjNWJiMjljMzM5NTBlIiwib3JpZ2luIjoiY29ycG9yYXRlIiwiZXhwIjoxNjY5OTMyNjExfQ.ImZrUCOR58_h0eK4aCbWj2ZZWmYaDX1odBbj8r0l_vdRvugsZELkEhnQpJHkawAZJIWQ8O2rvA1H5vlVVpsx5Wp-z3fGZih7lAr4lTf_FijksR19pi4WZBRr4vJeaI7SH1UhDux46rsnIg3e-6T5Rai-7479P0H3uq57H2Fj2Hix_i9Favl4xX1733PUcFmjebQTJYUoO_v8pGmG5Er91IrmIkqbRPwRvnP7FEdJv6HVtsLdgLwApsyyef9B4iqzfqvTPX_FbzI8Gu53ckHzkQNlhGB7EkedgofFaHGveWmjPOIZCft9WccTyrTTBooIW7kvBDhL3GpVsrXhmjTWOA"
var apiKey = "b161265e-774e-4c16-ae29-024078274571"

async function getAccessToken() {
    fetch('https://idpdecathlon.oxylane.com/as/token.oauth2?grant_type=client_credentials', {
            method: "POST",
            headers: { "Content-type": "application/json;charset=UTF-8", "Authorization": "Basic QzBlZjlkNjAxZjkwMWZmMDdkNWUzYzg3YjVkMmM1YmIyOWMzMzk1MGU6U2lhaGZnRkE0NDFSMzliaEJkSEFJZUpOV3Y4MFNBMVpia21pRXV6ZkYya2RIb1ZHYnRuZWR0Qkl3NU9yaTVySQ==" }
        })
        .then(response => response.json())
        .then(json => {
            token = json.access_token;
        })
        .catch(err => console.log(err));
}

function fetchDecathlon() {
    fetch('https://api.decathlon.net/sport_vision_api/v1/ping/', {
            method: "GET",
            mode: "cors", // no-cors, *cors, same-origin
            headers: {
                "Content-type": "application/json;charset=UTF-8",
                'Access-Control-Allow-Origin': '*',
                "Authorization": token,
                "X-API-KEY": apiKey
            }
        })
        .then(response => response.json())
        .then(json => {
            console.log(json)
        })
        .catch(err => console.log(err));
}

window.onload = async function() {
    await getAccessToken()
    fetchDecathlon()
};