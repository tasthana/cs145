// After DOM is loaded, register event handlers
window.addEventListener("DOMContentLoaded", function() {
    let passwordInput = document.querySelector("#txtPassword");
    passwordInput.addEventListener("keydown", preventSpaces);
    passwordInput.addEventListener("input", checkPassword);
 });
 
 function preventSpaces(event) {
    // Ignore space input 
    if (event.key == " ") {
       event.preventDefault();      
    }
 }
 
function checkPassword() {
   let password = this.value;
   let passwordStrength = 0;
    
   // Password should be long enough
   if (password.length >= 6) {
      passwordStrength++;
      document.getElementById("length-test").style.setProperty("color", "green");
   }

    // Convert passwordStrength into a descriptive word 
    let strengthWord = "";
    if (passwordStrength == 1) {
       strengthWord = "Weak";
    }
    else if (passwordStrength == 2) {
       strengthWord = "Moderate";
    }
    else if (passwordStrength == 3) {
       strengthWord = "Strong";
    }
    
    // Display strengthWord
    document.querySelector("#strength").innerHTML = strengthWord;
 }
 