



function Validate2() {

    var check = document.getElementsByClassName("checkbox");


    var isValid = false;


    for (var i = 0; i < check.length; i++) {
        if (check[i].checked) {
            isValid = true;
            break;
        }
        else{
            alert("You have to validate my ego!!");
        }
    }
}
