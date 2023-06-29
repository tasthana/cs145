

const form2 = document.querySelector("contact2");
const user = document.getElementById("txtUsername");
const error2 = user.nextElementSibling;

// As per the HTML Specification
const userRegExp = /^[a-z\d]+$/i;

window.addEventListener("load", () => {
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

