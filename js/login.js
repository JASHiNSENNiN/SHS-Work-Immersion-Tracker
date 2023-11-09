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

	try {
		const exists = checkEmailExists(email);
		if (exists) {
			alert("Email already exists");
			return;
		} else {
			//console.log("Email does not exist");
		}
	} catch (error) {
		console.error("Error:", error);
	}

	const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	if (!emailRegex.test(email)) {
		alert("Please enter a valid email address");
		return;
	}

	const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
	if (!passwordRegex.test(password)) {
		alert(
			"Password must contain at least 6 characters, including one uppercase letter, one lowercase letter, and one digit"
		);
		return;
	}

	if (password !== confirmPassword) {
		alert("Passwords do not match");
		return;
	}

	if (accountType === "") {
		alert("Please select an account type");
		return;
	}

	if (accountType === "student") {
		const nameRegex = /^[A-Za-z\s]{3,}$/;
		if (
			!nameRegex.test(firstName) ||
			!nameRegex.test(middleName) ||
			!nameRegex.test(lastName)
		) {
			alert("Please enter a valid full name");
			return;
		}

		if (gradeLevel === "" || strand === "") {
			alert("Please select a grade level and strand");
			return;
		}
	}
	if (accountType === "school") {
		const schoolRegex = /^[A-Za-z\s]{3,}$/;
		if (!schoolRegex.test(schoolName)) {
			alert("Please enter a valid school name");
			return;
		}
	}
	if (accountType === "organization") {
		const nameRegex = /^[A-Za-z\s]{3,}$/;
		if (!nameRegex.test(organizationName)) {
			alert("Please enter a valid organization name");
			return;
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


function login() {
	const email = document.getElementById("login-email").value;
	const password = document.getElementById("login-password").value;

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
				const response = JSON.parse(xhr.responseText);
				if (response.success) {
					//   ---- setSession();
					window.location.href = response.redirectUrl;
				} else {
					alert(response.message);
				}
			} else {
				console.error("Error:", xhr.status);
			}
		}
	};
	xhr.send(JSON.stringify(formData));
}
