var userId;
var accountType;
var email;
var error;
excludedPaths = [
	"/shs/pages/student.php",
	"/shs/pages/organization.php",
	"/shs/pages/school.php",
];

const currentPath = window.location.pathname;

function fetchCurrentUser() {
	const xhr = new XMLHttpRequest();

	xhr.open("GET", "../backend/php/fetch_user.php", true);
	xhr.setRequestHeader("Content-Type", "application/json");

	xhr.onload = function () {
		if (xhr.status === 200) {
			const response = JSON.parse(xhr.responseText);
			if (response.success) {
				const currentUser = response.user;

				userId = currentUser.id;
				accountType = currentUser.account_type;
				email = currentUser.email;

				console.log("User ID:", userId);
				console.log("Account Type:", accountType);
				console.log("Email:", email);

				checkSessionAndRedirect();
			} else {
				console.log("Error: " + response.message);
				if (excludedPaths.includes(currentPath)) {
					window.location.href = "../../index.php";
				}
			}
		} else {
			console.log("Error: " + xhr.status);
		}
	};

	xhr.onerror = function () {
		console.log("Error: Request failed");
	};

	xhr.send();
}

fetchCurrentUser();
checkSessionAndRedirect();

function checkSessionAndRedirect() {
	if (userId && accountType) {
		if (currentPath !== "/shs/pages/" + accountType + ".php") {
			window.location.href = "/shs/pages/" + accountType + ".php";
		}
	}
}

function session_logout() {
	userId = null;
	accountType = null;
	email = null;

	const xhr = new XMLHttpRequest();

	xhr.open("GET", "/shs/php/logout.php", true);

	xhr.onload = function () {
		if (xhr.status === 200) {
			window.location.href = "../../index.php";
		} else {
			console.log("Error: " + xhr.status);
		}
	};

	xhr.send();
}
