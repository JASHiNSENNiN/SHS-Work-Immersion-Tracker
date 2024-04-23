function validateRegisterForm(captcha) {
	const email = document.getElementById("register_email").value;
	const password = document.getElementById("register_password").value;
	const confirmPassword = document.getElementById(
		"register_confirm-password"
	).value;

	const emailInput = document.getElementById("register_email");
	const passwordInput = document.getElementById("register_password");
	const confirmPasswordInput = document.getElementById(
		"register_confirm_password"
	);
	const registerRecaptcha = document.getElementById("register-recaptcha");

	const allInputs = [emailInput, passwordInput, confirmPasswordInput];

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
			return false;
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
