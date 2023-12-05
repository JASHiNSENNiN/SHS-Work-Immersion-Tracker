function fetchWorks() {
	const xhr = new XMLHttpRequest();
	xhr.open("GET", "/shs/php/get_works.php", true);

	xhr.onreadystatechange = function () {
		if (xhr.readyState === 4 && xhr.status === 200) {
			const works = JSON.parse(xhr.responseText);
			displayWorks(works);
		}
	};

	xhr.send();
}

function displayWorks(works) {
	const worksContainer = document.getElementById("worksContainer");

	works.forEach(function (work) {
		const workItem = document.createElement("div");
		workItem.className = "work-item";

		const id = document.createElement("p");
		id.textContent = "ID: " + work.id;

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
			} else {
				applyButton.textContent = "Apply";
			}
		});

		workItem.appendChild(id);
		workItem.appendChild(organization);
		workItem.appendChild(stars);
		workItem.appendChild(applyButton);

		worksContainer.appendChild(workItem);
	});
}

fetchWorks();

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
