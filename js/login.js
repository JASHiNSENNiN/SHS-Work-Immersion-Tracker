const loginForm = document.getElementById("login-form");
const registerForm = document.getElementById("register-form");

const switchToRegisterButton = document.getElementById("switch-to-register");
const switchToLoginButton = document.getElementById("switch-to-login");

function showLoginForm() {
  registerForm.style.opacity = "0";
  registerForm.style.display = "none";

  loginForm.style.display = "block";
  setTimeout(() => {
    loginForm.style.opacity = "1";
  }, 10);
}

function showRegisterForm() {
  loginForm.style.opacity = "0";
  loginForm.style.display = "none";

  registerForm.style.display = "block";
  setTimeout(() => {
    registerForm.style.opacity = "1";
  }, 10);
}

switchToRegisterButton.addEventListener("click", showRegisterForm);
switchToLoginButton.addEventListener("click", showLoginForm);

showLoginForm();
