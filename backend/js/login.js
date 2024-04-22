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

function toggleFields() {
	var accountType = document.getElementById("account-type").value;
	var studentFields = document.getElementById("student-fields");
	var schoolFields = document.getElementById("school-fields");
	var partnerFields = document.getElementById("partner-fields");
	var registerForm = document.getElementById("register-form");

	if (accountType === "student") {
		registerForm.style.paddingTop = "25%";
		studentFields.style.display = "block";
		schoolFields.style.display = "none";
		partnerFields.style.display = "none";
	} else if (accountType === "school") {
		registerForm.style.paddingTop = "10%";
		studentFields.style.display = "none";
		schoolFields.style.display = "block";
		partnerFields.style.display = "none";
	} else if (accountType === "organization") {
		registerForm.style.paddingTop = "10%";
		studentFields.style.display = "none";
		schoolFields.style.display = "none";
		partnerFields.style.display = "block";
	} else {
		studentFields.style.display = "none";
		schoolFields.style.display = "none";
		partnerFields.style.display = "none";
	}
}
