// Mobile Hamburger Menu
var menuClose 	= 	document.getElementById("close-menu"); 				// Store mobile menu close button
var menuOpen 	= 	document.getElementById("open-mobile-menu");		// Store mobile menu open button
var mobileMenu 	= 	document.getElementByClassName("mobile-menu")[0];	// Store mobile menu

// When the user clickes the mobile menu open button, display the mobile menu and hide the menu open button
menuOpen.addEventListener("click", function() {
	mobileMenu.style.width = 100%;
	menuOpen.classList.add("hide");
});

// When the user clicks the mobile menu close button, hide the mobile menu and display the menu open button
menuClose.addEventListener("click", function () {
	mobileMenu.style.width = "0";
	menuOpen.classList.remove("hide");
});