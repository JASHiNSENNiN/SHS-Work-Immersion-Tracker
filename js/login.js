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

function validateForm() {
	const email = document.getElementById("email").value;
	const password = document.getElementById("password").value;
	const confirmPassword = document.getElementById("confirm-password").value;
	const accountType = document.getElementById("account-type").value;
	const firstName = document.getElementById("first-name").value;
	const middleName = document.getElementById("middle-name").value;
	const lastName = document.getElementById("last-name").value;
	const gradeLevel = document.getElementById("grade-level").value;
	const strand = document.getElementById("strand").value;

	const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	if (!emailRegex.test(email)) {
		alert("Please enter a valid email address");
		showRegisterForm();
		return;
	}

	const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
	if (!passwordRegex.test(password)) {
		alert(
			"Password must contain at least 6 characters, including one uppercase letter, one lowercase letter, and one digit"
		);
		showRegisterForm();
		return;
	}

	if (password !== confirmPassword) {
		alert("Passwords do not match");
		showRegisterForm();
		return;
	}

	if (accountType === "") {
		alert("Please select an account type");
		showRegisterForm();
		return;
	}

	const nameRegex = /^[A-Za-z\s]{3,}$/;
	if (
		!nameRegex.test(firstName) ||
		!nameRegex.test(middleName) ||
		!nameRegex.test(lastName)
	) {
		alert("Please enter a valid full name");
		showRegisterForm();
		return;
	}

	if (gradeLevel === "" || strand === "") {
		alert("Please select a grade level and strand");
		showRegisterForm();
		return;
	}


	document.querySelector("#register").submit();
}