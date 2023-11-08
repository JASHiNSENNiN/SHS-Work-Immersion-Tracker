var userId;
var accountType;
var email;

function fetchCurrentUser() {
	const xhr = new XMLHttpRequest();

	xhr.open("GET", "/shs/php/fetch_user.php", true);
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
	if (userId && accountType && email) {
		const currentPath = window.location.pathname;
		const excludedPaths = [
			"/shs/student.php",
			"/shs/school.php",
			"/shs/organization.php",
		];
		if (userId !== "" && !excludedPaths.includes(currentPath)) {
			switch (accountType) {
				case "student":
					window.location.href = "/shs/student.php";
					break;
				case "school":
					window.location.href = "/shs/school.php";
					break;
				case "partner":
					window.location.href = "/shs/organization.php";
					break;
				default:
					window.location.href = "/shs/index.php";
					break;
			}
		}
	}
}

function logout() {
	userId = null;
	vaccountType = null;
	email = null;

	const xhr = new XMLHttpRequest();

	xhr.open("GET", "/shs/php/logout.php", true);

	xhr.onload = function () {
		if (xhr.status === 200) {
			window.location.href = "/shs/index.php";
		} else {
			console.log("Error: " + xhr.status);
		}
	};

	xhr.send();
}
