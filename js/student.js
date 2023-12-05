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
