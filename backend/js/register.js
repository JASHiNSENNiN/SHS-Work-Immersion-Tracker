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
