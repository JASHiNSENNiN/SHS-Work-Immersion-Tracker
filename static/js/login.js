const loginButton = document.querySelector('#login-form .btn-login');
const registerButton = document.querySelector('#register-form .btn-login');


const loginForm = document.getElementById('login-form');
const registerForm = document.getElementById('register-form');


loginButton.addEventListener('click', showLoginForm);
registerButton.addEventListener('click', showRegisterForm);

function showLoginForm() {
    loginForm.style.display = 'block';
    registerForm.style.display = 'none';
}


function showRegisterForm() {
    loginForm.style.display = 'none';
    registerForm.style.display = 'block';
}


showLoginForm();