

const form2 = document.querySelector("contact2");
const user = document.getElementById("txtUsername");
const error2 = user.nextElementSibling;

// As per the HTML Specification
const userRegExp = /^[a-z\d]+$/i;

// Now we can rebuild our validation constraint
// Because we do not rely on CSS pseudo-class, we have to
// explicitly set the valid/invalid class on our user field
window.addEventListener("load", () => {
  // Here, we test if the field is empty (remember, the field is not required)
  // If it is not, we check if its content is a well-form22ed user address.
  const isValid = user.value.length === 0 || userRegExp.test(user.value);
  user.className = isValid ? "valid" : "invalid";
});

// This defines what happens when the user types in the field
user.addEventListener("input", () => {
  const isValid = user.value.length === 0 || userRegExp.test(user.value);
  if (isValid) {
    user.className = "valid";
    error2.textContent = "";
    error2.className = "error2";
  } else {
    user.className = "invalid";
  }
});

// This defines what happens when the user tries to submit the data
form2.addEventListener("submit", (event) => {
  event.preventDefault();

  const isValid = user.value.length === 0 || userRegExp.test(user.value);
  if (!isValid) {
    user.className = "invalid";
    error2.textContent = "I expect an username, darling!";
    error2.className = "error2 active";
  } else {
    user.className = "valid";
    error2.textContent = "";
    error2.className = "error2";
  }
});

