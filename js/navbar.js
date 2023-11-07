function setActive(clickedLink) {
	const links = document.querySelectorAll(".page-header__nav-link a");
	links.forEach((link) => link.parentNode.classList.remove("active"));

	clickedLink.parentNode.classList.add("active");
}
