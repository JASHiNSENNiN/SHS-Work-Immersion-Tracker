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

function checkEmailExists(email) {
	const xhr = new XMLHttpRequest();
	xhr.open("POST", "../php/check_email.php", false);
	xhr.setRequestHeader("Content-Type", "application/json");

	xhr.send(JSON.stringify({ email: email }));

	if (xhr.readyState === 4 && xhr.status === 200) {
		const exists = JSON.parse(xhr.responseText);
		return exists;
	} else {
		throw new Error(xhr.statusText);
	}
}

function checkNameExists(checkName, accountType) {
	const xhr = new XMLHttpRequest();
	xhr.open("POST", "../php/check_name.php", false);
	xhr.setRequestHeader("Content-Type", "application/json");
	checkData = { checkName: checkName, accountType: accountType };
	xhr.send(JSON.stringify(checkData));

	if (xhr.readyState === 4 && xhr.status === 200) {
		const exists = JSON.parse(xhr.responseText);
		return exists;
	} else {
		throw new Error(xhr.statusText);
	}
}

function login() {
	const email = document.getElementById("login-email").value;
	const password = document.getElementById("login-password").value;
	const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	const emailInput = document.getElementById("login-email");
	const passwordInput = document.getElementById("login-password");

	emailInput.addEventListener("input", function () {
		if (this.validity.customError) {
			this.setCustomValidity("");
		}
	});
	passwordInput.addEventListener("input", function () {
		if (this.validity.customError) {
			this.setCustomValidity("");
		}
	});

	const formData = {
		email,
		password,
	};

	const xhr = new XMLHttpRequest();
	xhr.open("POST", "../backend/php/log_in.php", true);
	xhr.setRequestHeader("Content-Type", "application/json");
	xhr.onreadystatechange = function () {
		if (xhr.readyState === XMLHttpRequest.DONE) {
			if (xhr.status === 200) {
				console.log("login error: " + xhr.responseText);
				const response = JSON.parse(xhr.responseText);
				if (response.success) {
					//   ---- setSession();
					window.location.href = response.redirectUrl;
				} else {
					if (email === "" || !emailRegex.test(email)) {
						emailInput.setCustomValidity(
							"Please enter a valid email"
						);
						emailInput.reportValidity();
						return;
					}
					if (response.message === "User not found") {
						emailInput.setCustomValidity("User not found");
						emailInput.reportValidity();
					}
					if (response.message === "Invalid password") {
						passwordInput.setCustomValidity("Invalid password");
						passwordInput.reportValidity();
					}
				}
			} else {
				console.error("Error:", xhr.status);
			}
		}
	};
	xhr.send(JSON.stringify(formData));
}
