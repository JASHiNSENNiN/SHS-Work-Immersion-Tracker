function renderApplicants(applicants) {
	const applicantsContainer = document.getElementById("applicantsContainer");

	applicants.forEach(function (applicant) {
		const applicantItem = document.createElement("div");
		applicantItem.className = "applicant-item";

		const id = document.createElement("p");
		id.textContent = "ID: " + applicant.id;

		const name = document.createElement("p");
		name.textContent =
			"Name: " + applicant.first_name + " " + applicant.last_name;

		const acceptButton = document.createElement("button");
		acceptButton.textContent = "Accept";
		acceptButton.addEventListener("click", function () {
			acceptApplicant(applicant.id);
		});

		const declineButton = document.createElement("button");
		declineButton.textContent = "Decline";
		declineButton.addEventListener("click", function () {
			declineApplicant(applicant.id);
		});

		applicantItem.appendChild(id);
		applicantItem.appendChild(name);
		applicantItem.appendChild(acceptButton);
		applicantItem.appendChild(declineButton);

		applicantsContainer.appendChild(applicantItem);
	});
}

function acceptApplicant(applicantId) {
	var xhr = new XMLHttpRequest();
	xhr.open("POST", "/shs/php/accept_applicants.php", true);
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhr.onreadystatechange = function () {
		if (xhr.readyState === XMLHttpRequest.DONE) {
			if (xhr.status === 200) {
				console.log("Applicant accepted");
			} else {
				console.error("Failed to accept applicant");
			}
		}
	};
	xhr.send("applicant_id=" + encodeURIComponent(applicantId));
}

function declineApplicant(applicantId) {
	var xhr = new XMLHttpRequest();
	xhr.open("POST", "/shs/php/decline_applicants.php", true);
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhr.onreadystatechange = function () {
		if (xhr.readyState === XMLHttpRequest.DONE) {
			if (xhr.status === 200) {
				console.log("Applicant declined");
			} else {
				console.error("Failed to decline applicant");
			}
		}
	};
	xhr.send("applicant_id=" + encodeURIComponent(applicantId));
}

const xhr = new XMLHttpRequest();
xhr.open("GET", "/shs/php/get_applicants.php", true);
xhr.onreadystatechange = function () {
	if (xhr.readyState === XMLHttpRequest.DONE) {
		if (xhr.status === 200) {
			const applicants = JSON.parse(xhr.responseText);
			renderApplicants(applicants);
		} else {
			console.error("Error: " + xhr.status);
		}
	}
};
xhr.send();
