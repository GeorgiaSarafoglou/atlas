/* when one checkbox is selected disable the other */
function disableOtherCheckbox(){
    var checkbox1 = document.getElementById("isStudent");
    var checkbox2 = document.getElementById("isOffice");
    checkbox1.addEventListener("click", function() {
        checkbox2.disabled = checkbox1.checked;
    });
    checkbox2.addEventListener("click", function() {
        checkbox1.disabled = checkbox2.checked;
    });
}

/* Redirects the signup page according to the checkbox the user checked */
/* if user is student he will be redirected to the student signup page  */
/* else he will be redirected to the office signup page                 */
function redirectToPageByCheckbox() {
    console.log("redirect function called ");
    var submitButton = document.getElementById("signupButton1");
    var checkboxGroup = document.getElementsByName("continueAs");
    if (checkboxGroup[0].checked) {
        window.location.href = "signup-student.php";
    }
    else if(checkboxGroup[1].checked){
        window.location.href = "signup-office.php";
    }
    else{
        var errorMessageElement = document.getElementById("error-message-signup");
        errorMessageElement.innerHTML = "Πρέπει να επιλέξετε κάποια από τις δύο ιδιότητες";
    }
}