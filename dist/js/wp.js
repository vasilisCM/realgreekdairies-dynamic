console.log("Hello from WP");

// Move the Grid class to the correct element after Contact Form 7 has added extra elements
const moveClasses = function (target, destination, className) {
  target.classList.remove(`${className}`);
  destination.classList.add(`${className}`);
};

// Check if we are in contact page
if (window.location.pathname.includes("contact")) {
  const formTarget = document.querySelector(".contact-form__form");
  const formDestination = document.querySelector(".contact-form__form div");

  moveClasses(formTarget, formDestination, "contact-form__form");

  const termsTarget = document.querySelector(".contact-form__field--terms");
  const termsDestination = document.querySelector(
    ".contact-form__field--terms p"
  );

  moveClasses(termsTarget, termsDestination, "contact-form__field--terms");

  // Remove all <br> elements added by Contact Form 7
  const formSubmission = document.querySelector(".contact-form__form");
  formSubmission.querySelectorAll("br").forEach((br) => br.remove());
}
