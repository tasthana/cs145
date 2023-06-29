


function Validate() {

    var radio = document.getElementsByClassName("radio");


    var isValid = false;


    for (var i = 0; i < radio.length; i++) {
        if (radio[i].checked) {
            isValid = true;
            break;
        }
        else{
            alert("Would you pick an answer for the last question!!");
        }
    }
}

