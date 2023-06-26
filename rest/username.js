// After DOM is loaded, register event handlers
window.addEventListener("DOMContentLoaded", function() {
    let usernameInput = document.querySelector("#txtUsername");
    usernameInput.addEventListener("keydown", preventSpaces);
    usernameInput.addEventListener("input", checkUsername);
 });
 
 function preventSpaces(event) {
    // Ignore space input 
    if (event.key == " ") {
       event.preventDefault();      
    }
 }
 
function checkUsername() {
   let username = this.value;
   let username = 0;
    
   // username should be long enough
   if (username.length >= 5) {
      usernameStrength++;
      document.getElementById("length-test").style.setProperty("color", "green");
   }

    // Convert Username Strength into a descriptive word 
    let strengthWord = "";
    if (usernameStrength == 1) {
       strengthWord = "Weak";
    }
    else if (usernameStrength == 2) {
       strengthWord = "Moderate";
    }
    else if (usernameStrength == 3) {
       strengthWord = "Strong";
    }
    
    // Display strengthWord
    document.querySelector("#strength").innerHTML = strengthWord;
 }
 