function fadeOut() {
	TweenMax.to(".myBtn", 1, {
		y: -100,
		opacity: 0,
	});

	TweenMax.to(".screen", 2, {
		y: -400,
		opacity: 0,
		ease: Power2.easeInOut,
		delay: 0.5,
	});

	TweenMax.from(".overlay", 2, {
		ease: Power2.easeInOut,
	});

	TweenMax.to(".overlay", 2, {
		delay: 1,
		top: "-110%",
		ease: Expo.easeInOut,
	});

	TweenMax.to(".overlay-2", 2, {
		delay: 1.5,
		top: "-110%",
		ease: Expo.easeInOut,
	});

	TweenMax.from(".content", 2, {
		delay: 2,
		opacity: 0,
		ease: Power2.easeInOut,
	});

	TweenMax.to(".content", 2, {
		opacity: 1,
		y: -300,
		delay: 2.2,
		ease: Power2.easeInOut,
	});
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
