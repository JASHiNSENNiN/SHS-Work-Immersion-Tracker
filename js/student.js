////////////////////////////////////////////////////////

function displayWorks() {
	const xhr = new XMLHttpRequest();
	xhr.open("GET", "/shs/php/get_works.php", true);
	xhr.setRequestHeader("Content-Type", "application/json");

	xhr.onreadystatechange = function () {
		if (xhr.readyState === 4 && xhr.status === 200) {
			const works = JSON.parse(xhr.responseText);
			console.log(typeof works);
			renderWorks(works);
		}
	};

	xhr.send();
}

function renderWorks(works) {
	const worksContainer = document.getElementById("worksContainer");

	works.forEach(function (work) {
		const workItem = document.createElement("div");
		workItem.className = "work-item";

		const id = document.createElement("p");
		id.textContent = "ID: " + work.user_id;

		const organization = document.createElement("h2");
		organization.textContent = work.organization_name;

		const stars = document.createElement("p");
		stars.textContent = "Stars: " + work.stars;

		const applyButton = document.createElement("button");
		applyButton.textContent = "Apply";
		applyButton.className = "apply-button";
		applyButton.addEventListener("click", function () {
			if (applyButton.textContent === "Apply") {
				applyButton.textContent = "Pending";
				applyToWork(work.user_id);
			} else {
				applyButton.textContent = "Apply";
				removeApplication(work.user_id);
			}
		});

		checkApplicationStatus(work.user_id, applyButton);

		workItem.appendChild(id);
		workItem.appendChild(organization);
		workItem.appendChild(stars);
		workItem.appendChild(applyButton);

		worksContainer.appendChild(workItem);
	});
}

function applyToWork(workId) {
	const xhr = new XMLHttpRequest();
	xhr.open("POST", "/shs/php/add_application.php", true);
	xhr.setRequestHeader("Content-Type", "application/json");

	const data = { workId: workId };
	xhr.send(JSON.stringify(data));
	xhr.onreadystatechange = function () {
		if (xhr.readyState === XMLHttpRequest.DONE) {
			if (xhr.status === 200) {
				console.log(xhr.responseText);
			} else {
				console.log("Application request failed. Status:", xhr.status);
			}
		}
	};
}

function removeApplication(workId) {
	const xhr = new XMLHttpRequest();
	xhr.open("POST", "/shs/php/remove_application.php", true);
	xhr.setRequestHeader("Content-Type", "application/json");

	const data = { workId: workId };
	xhr.send(JSON.stringify(data));
}

function checkApplicationStatus(workId, applyButton) {
	const xhr = new XMLHttpRequest();
	xhr.open(
		"GET",
		"/shs/php/check_application_status.php?workId=" + workId,
		true
	);
	xhr.setRequestHeader("Content-Type", "application/json");

	xhr.onreadystatechange = function () {
		if (xhr.readyState === 4 && xhr.status === 200) {
			const response = JSON.parse(xhr.responseText);
			if (response.status === "applied") {
				applyButton.textContent = "Pending";
			}
		}
	};

	xhr.send();
}

displayWorks();

////////////////////////////////////////////////////////////////

let surveys = [];

function addSurvey() {
	const questionInput = document.getElementById("question");
	const question = questionInput.value.trim();

	if (question) {
		const survey = { question, id: Date.now() };
		surveys.push(survey);
		renderSurveys();
		questionInput.value = "";
	}
}

function renderSurveys() {
	const surveyList = document.getElementById("survey-list");
	surveyList.innerHTML = "";

	surveys.forEach((survey) => {
		const surveyItem = document.createElement("li");
		surveyItem.classList.add("survey-item");

		const questionInput = document.createElement("input");
		questionInput.type = "text";
		questionInput.value = survey.question;
		questionInput.disabled = true;

		const buttonContainer = document.createElement("div");

		const editButton = createEditButton(survey, questionInput);
		const deleteButton = createDeleteButton(survey.id);

		buttonContainer.appendChild(editButton);
		buttonContainer.appendChild(deleteButton);

		surveyItem.appendChild(questionInput);
		surveyItem.appendChild(buttonContainer);
		surveyList.appendChild(surveyItem);
	});
}

function createEditButton(survey, questionInput) {
	const editButton = document.createElement("button");
	editButton.innerText = "Edit";
	editButton.addEventListener("click", () => {
		questionInput.disabled = false;
		editButton.innerText = "Save";
		editButton.addEventListener("click", () =>
			saveSurvey(survey.id, questionInput, editButton)
		);
	});
	return editButton;
}

function createDeleteButton(id) {
	const deleteButton = document.createElement("button");
	deleteButton.innerText = "Delete";
	deleteButton.addEventListener("click", () => deleteSurvey(id));
	return deleteButton;
}

function saveSurvey(id, questionInput, editButton) {
	const survey = surveys.find((survey) => survey.id === id);

	if (survey) {
		const updatedQuestion = questionInput.value.trim();
		if (updatedQuestion) {
			survey.question = updatedQuestion;
			questionInput.disabled = true;
			editButton.innerText = "Edit";
		}
	}
}

function deleteSurvey(id) {
	surveys = surveys.filter((survey) => survey.id !== id);
	renderSurveys();
}

renderSurveys();

////////////////////////////////////////////////////////////////

function populateData() {
	const xhr = new XMLHttpRequest();

	xhr.open("GET", "/shs/php/session_getter.php", true);
	xhr.setRequestHeader("Content-Type", "application/json");

	xhr.onload = function () {
		if (xhr.status === 200) {
			const response = JSON.parse(xhr.responseText);
			if (response.success) {
				console.log(response);
				document.getElementById("student-name").textContent =
					response.student_profile.first_name +
					" " +
					response.student_profile.middle_name +
					" " +
					response.student_profile.last_name;
				document.getElementById("school").textContent =
					response.student_profile.school;
				document.getElementById("grade-level").textContent =
					response.student_profile.grade_level;
				document.getElementById("strand").textContent =
					response.student_profile.strand.toUpperCase();
			}
		}
	};

	xhr.onerror = function () {
		console.log("Error: Request failed");
	};

	xhr.send();
}

function _populateData(data) {
	document.getElementById("student-name").textContent =
		studentProfile.first_name + " " + studentProfile.last_name;
	document.getElementById("grade-level").textContent =
		studentProfile.grade_level;
	document.getElementById("strand").textContent = studentProfile.strand;
}

populateData();
