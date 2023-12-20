
function auth() {
    const username = "andra"
    const password = "123"

let user_input = document.getElementById('username').value
let user_password = document.getElementById('password').value

if (username == user_input && password == user_password ) {
    alert('Login Berhasil')
    document.location = "home.html"
}else{
    alert('Login Gagal')
}}