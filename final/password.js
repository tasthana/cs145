



const form3 = document.querySelector("contact3");
const password = document.getElementById("txtPassword");
const error3 = password.nextElementSibling;

// As per the HTML Specification
const passwordRegExp =
"(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}";

// Now we can rebuild our validation constraint
// Because we do not rely on CSS pseudo-class, we have to
// explicitly set the valid/invalid class on our password field
window.addEventListener("load", () => {
  // Here, we test if the field is empty (remember, the field is not required)
  // If it is not, we check if its content is a well-form3ed password address.
  const isValid = password.value.length === 0 || passwordRegExp.test(password.value);
  password.className = isValid ? "valid" : "invalid";
});

// This defines what happens when the user types in the field
password.addEventListener("input", () => {
  const isValid = password.value.length === 0 || passwordRegExp.test(password.value);
  if (isValid) {
    password.className = "valid";
    error3.textContent = "";
    error3.className = "error3";
  } else {
    password.className = "invalid";
  }
});

// This defines what happens when the user tries to submit the data
form3.addEventListener("submit", (event) => {
  event.preventDefault();

  const isValid = password.value.length === 0 || passwordRegExp.test(password.value);
  if (!isValid) {
    password.className = "invalid";
    error3.textContent = "I expect an password, darling!";
    error3.className = "error3 active";
  } else {
    password.className = "valid";
    error3.textContent = "";
    error3.className = "error3";
  }
});