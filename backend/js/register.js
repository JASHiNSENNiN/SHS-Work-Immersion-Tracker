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

function validateRegisterForm() {
	const email = document.getElementById("email").value;
	const password = document.getElementById("password").value;
	const confirmPassword = document.getElementById("confirm-password").value;

	const emailInput = document.getElementById("email");
	const passwordInput = document.getElementById("password");
	const confirmPasswordInput = document.getElementById("confirm-password");

	const allInputs = [emailInput, passwordInput, confirmPasswordInput];

	allInputs.forEach((input) => {
		input.addEventListener("input", function () {
			if (this.validity.customError) {
				this.setCustomValidity("");
			}
		});
	});

	const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	if (!emailRegex.test(email)) {
		emailInput.setCustomValidity("Please enter a valid email address");
		emailInput.reportValidity();
		return false;
	}

	if (password === "") {
		passwordInput.setCustomValidity("Please enter your password");
		passwordInput.reportValidity();
		return false;
	}

	if (confirmPassword === "") {
		confirmPasswordInput.setCustomValidity(
			"Please enter your password again"
		);
		confirmPasswordInput.reportValidity();
		return false;
	}

	const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
	if (!passwordRegex.test(password)) {
		passwordInput.setCustomValidity(
			"Password must contain at least 6 characters, including one uppercase letter, one lowercase letter, and one digit"
		);
		passwordInput.reportValidity();
		return false;
	}

	if (password !== confirmPassword) {
		confirmPasswordInput.setCustomValidity("Passwords do not match");
		confirmPasswordInput.reportValidity();
		return false;
	}

	return true;
}

function validateSetupForm() {
	const accountType = document.getElementById("account-type").value;
	const schoolName = document.getElementById("school-name").value;
	const organizationName = document.getElementById("organization-name").value;
	const firstName = document.getElementById("first-name").value;
	const middleName = document.getElementById("middle-name").value;
	const lastName = document.getElementById("last-name").value;
	const gradeLevel = document.getElementById("grade-level").value;
	const strand = document.getElementById("strand").value;
	const strandFocus = document.getElementById("strand-focus").value;

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

	if (accountType === "") {
		accountTypeInput.setCustomValidity("Please select an account type");
		accountTypeInput.reportValidity();
		return false;
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
			return false;
		}

		if (gradeLevel === "") {
			gradeLevelInput.setCustomValidity("Please select a grade level");
			gradeLevelInput.reportValidity();
			return false;
		}
		if (strand === "") {
			strandInput.setCustomValidity("Please select a strand");
			strandInput.reportValidity();
			return false;
		}
		try {
			const exists = checkNameExists(schoolName, accountType);
			if (exists) {
				schoolNameInput.setCustomValidity("Name was already taken");
				schoolNameInput.reportValidity();
				return false;
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
			return false;
		}
	}
	if (accountType === "organization") {
		const nameRegex = /^[A-Za-z\s]{3,}$/;
		if (!nameRegex.test(organizationName)) {
			organizationNameInput.setCustomValidity(
				"Please enter a valid organization name"
			);
			organizationNameInput.reportValidity();
			return false;
		}
		if (strandFocus === "") {
			strandFocusInput.setCustomValidity("Please select a strand");
			strandFocusInput.reportValidity();
			return false;
		}
		try {
			const exists = checkNameExists(organizationName, accountType);
			if (exists) {
				organizationNameInput.setCustomValidity(
					"Name was already taken"
				);
				organizationNameInput.reportValidity();
				return false;
			} else {
				//console.log("name does not exist");
			}
		} catch (error) {
			console.error("Error:", error);
		}
	}

	return true;
}

window.onload = function () {
	const urlParams = new URLSearchParams(window.location.search);
	const error = urlParams.get("error");

	if (error === "invalidEmail") {
		document
			.getElementById("email")
			.setCustomValidity("The email address was already taken");
		document.getElementById("email").reportValidity();
	}
	if (error === "0AuthDuplicateEmail") {
		document
			.getElementById("google-login-btn")
			.setCustomValidity(
				"Your email was already taken, try logging in using a different method"
			);
		document.getElementById("email").reportValidity();
	}
};
