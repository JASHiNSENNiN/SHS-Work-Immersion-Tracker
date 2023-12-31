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

async function validateForm() {
	const email = document.getElementById("email").value;
	const password = document.getElementById("password").value;
	const confirmPassword = document.getElementById("confirm-password").value;
	const accountType = document.getElementById("account-type").value;
	const schoolName = document.getElementById("school-name").value;
	const organizationName = document.getElementById("organization-name").value;
	const firstName = document.getElementById("first-name").value;
	const middleName = document.getElementById("middle-name").value;
	const lastName = document.getElementById("last-name").value;
	const gradeLevel = document.getElementById("grade-level").value;
	const strand = document.getElementById("strand").value;
	const strandFocus = document.getElementById("strand-focus").value;

	const emailInput = document.getElementById("email");
	const passwordInput = document.getElementById("password");
	const confirmPasswordInput = document.getElementById("confirm-password");
	const accountTypeInput = document.getElementById("account-type");
	const schoolNameInput = document.getElementById("school-name");
	const organizationNameInput = document.getElementById("organization-name");
	const firstNameInput = document.getElementById("first-name");
	const middleNameInput = document.getElementById("middle-name");
	const lastNameInput = document.getElementById("last-name");
	const gradeLevelInput = document.getElementById("grade-level");
	const strandInput = document.getElementById("strand");
	const strandFocusInput = document.getElementById("strand-focus");

	const allInputs = [
		emailInput,
		passwordInput,
		confirmPasswordInput,
		accountTypeInput,
		schoolNameInput,
		organizationNameInput,
		firstNameInput,
		middleNameInput,
		lastNameInput,
		gradeLevelInput,
		strandInput,
		strandFocusInput,
	];

	allInputs.forEach((input) => {
		input.addEventListener("input", function () {
			if (this.validity.customError) {
				this.setCustomValidity("");
			}
		});
	});

	try {
		const exists = checkEmailExists(email);
		if (exists) {
			emailInput.setCustomValidity("Email was already taken");
			emailInput.reportValidity();
			return;
		} else {
			//console.log("Email does not exist");
		}
	} catch (error) {
		console.error("Error:", error);
	}

	const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	if (!emailRegex.test(email)) {
		emailInput.setCustomValidity("Please enter a valid email address");
		emailInput.reportValidity();
		return;
	}

	const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
	if (!passwordRegex.test(password)) {
		passwordInput.setCustomValidity(
			"Password must contain at least 6 characters, including one uppercase letter, one lowercase letter, and one digit"
		);
		passwordInput.reportValidity();
		return;
	}

	if (password !== confirmPassword) {
		confirmPasswordInput.setCustomValidity("Passwords do not match");
		confirmPasswordInput.reportValidity();
		return;
	}

	if (accountType === "") {
		accountTypeInput.setCustomValidity("Please select an account type");
		accountTypeInput.reportValidity();
		return;
	}

	if (accountType === "student") {
		const nameRegex = /^[A-Za-z\s]{3,}$/;
		if (
			!nameRegex.test(firstName) ||
			!nameRegex.test(middleName) ||
			!nameRegex.test(lastName)
		) {
			firstNameInput.setCustomValidity("Please enter a valid full name");
			middleNameInput.setCustomValidity("Please enter a valid full name");
			lastNameInput.setCustomValidity("Please enter a valid full name");
			firstNameInput.reportValidity();
			middleNameInput.reportValidity();
			lastNameInput.reportValidity();
			return;
		}

		if (gradeLevel === "") {
			gradeLevelInput.setCustomValidity("Please select a grade level");
			gradeLevelInput.reportValidity();
			return;
		}
		if (strand === "") {
			strandInput.setCustomValidity("Please select a strand");
			strandInput.reportValidity();
			return;
		}
		try {
			const exists = checkNameExists(schoolName, accountType);
			if (exists) {
				schoolNameInput.setCustomValidity("Name was already taken");
				schoolNameInput.reportValidity();
				return;
			} else {
				//console.log("name does not exist");
			}
		} catch (error) {
			console.error("Error:", error);
		}
	}
	if (accountType === "school") {
		const schoolRegex = /^[A-Za-z\s]{3,}$/;
		if (!schoolRegex.test(schoolName)) {
			schoolNameInput.setCustomValidity(
				"Please enter a valid school name"
			);
			schoolNameInput.reportValidity();
			return;
		}
	}
	if (accountType === "organization") {
		const nameRegex = /^[A-Za-z\s]{3,}$/;
		if (!nameRegex.test(organizationName)) {
			organizationNameInput.setCustomValidity(
				"Please enter a valid organization name"
			);
			organizationNameInput.reportValidity();
			return;
		}
		if (strandFocus === "") {
			strandFocusInput.setCustomValidity("Please select a strand");
			strandFocusInput.reportValidity();
			return;
		}
		try {
			const exists = checkNameExists(organizationName, accountType);
			if (exists) {
				organizationNameInput.setCustomValidity(
					"Name was already taken"
				);
				organizationNameInput.reportValidity();
				return;
			} else {
				//console.log("name does not exist");
			}
		} catch (error) {
			console.error("Error:", error);
		}
	}

	var formData = {
		email: email,
		password: password,
		accountType: accountType,
		firstName: firstName,
		middleName: middleName,
		lastName: lastName,
		gradeLevel: gradeLevel,
		strand: strand,
		schoolName: schoolName,
		organizationName: organizationName,
		strandFocus: strandFocus,
	};
	var xhr = new XMLHttpRequest();
	xhr.open("POST", "/shs/php/register.php", true);
	xhr.setRequestHeader("Content-Type", "application/json");

	xhr.onreadystatechange = function () {
		if (xhr.readyState === 4 && xhr.status === 200) {
			alert(xhr.responseText);
		}
	};

	xhr.send(JSON.stringify(formData));
	location.reload();
}

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
	xhr.open("POST", "/shs/php/check_email.php", false);
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
	xhr.open("POST", "/shs/php/check_name.php", false);
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
	xhr.open("POST", "/shs/php/log_in.php", true);
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
