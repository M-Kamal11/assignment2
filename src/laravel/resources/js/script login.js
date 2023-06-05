/*jquery function to make IDs constant*/
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

/* login page sliders passed through callback functions */
signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});


signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});









