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

	if (checkDuplicateEmail(email) === true) {
		window.location.href = "http://www.example.com";
		emailInput.setCustomValidity("This email address was already in use");
		emailInput.reportValidity();
		return false;
	} else {
		window.location.href = "http://www.w3schools.com";
	}

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

function checkDuplicateEmail(email) {
	return new Promise(function (resolve, reject) {
		$.ajax({
			url: "../php/validate_email.php",
			method: "POST",
			dataType: "json",
			data: {
				email: email,
			},
			success: function (response) {
				resolve(response.duplicateEmail);
			},
			error: function (jqXHR, textStatus, errorThrown) {
				reject(errorThrown);
			},
		});
	});
}
