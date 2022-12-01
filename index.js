var token = "eyJhbGciOiJSUzI1NiIsImtpZCI6Ik1BSU4iLCJwaS5hdG0iOi…UaqylYiq6sT9FEKNYSXSzxCcFL9KE7pwTzUkBIhMgDMVsBuSQ"
var apiKey = "b161265e-774e-4c16-ae29-024078274571"

function getAccessToken() {
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