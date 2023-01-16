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

/* Function to show and scroll to div */
function showAndScrollToStep3() {
    // Get the button and the div
    var button = document.getElementById("signup-continue-btn-1");
    var div = document.getElementById("step3");

    // When the button is clicked, show the div
    button.addEventListener("click", function() {
        div.style.display = "block";
        // Calculate the position of the div relative to the viewport
        var rect = div.getBoundingClientRect();
        var top = rect.top;
        var height = rect.height;

        // Calculate the number of pixels to scroll by
        var scrollBy = top - (window.innerHeight - height) / 2;

        // Scroll to the div
        window.scrollBy({ top: scrollBy, behavior: "smooth" });
    });
}
  
/*   Function to show and scroll to div */
function showAndScrollToStep4() {
    var button2 = document.getElementById("signup-continue-btn-2");
    var div2 = document.getElementById("step4");
    // When the button is clicked, show the div
    button2.addEventListener("click", function() {
        div2.style.display = "block";
        div2.scrollIntoView({behavior: "smooth", block: "center", inline: "center"});
    });
}
  
/* Function to submit form and redirect to starting page */
function submitFormAndRedirect() {
    // Get the form and the button
    var form = document.getElementById("signup_student_form_4");
    var button = document.getElementById("confirmForm");
  
    // When the button is clicked, submit the form and redirect to the target page
    button.addEventListener("click", function(event) {
        event.preventDefault();
        form.submit();
        window.location = "../index.php";
    });
}

 /* Function to submit form and redirect to starting page */
function submitFormAndRedirect2() {
    // Get the form and the button
    var form = document.getElementById("signup_office_form_4");
    var button = document.getElementById("confirmForm2");
  
    // When the button is clicked, submit the form and redirect to the target page
    button.addEventListener("click", function(event) {
        event.preventDefault();
        form.submit();
        window.location = "../index.php";
    });
}



function hideShow() {
    var x = document.getElementById("application-form");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function showCheck(){
    var x = document.getElementById("check");
    if(document.getElementById("myfile").value != "") {
        x.style.display = "block";
    }
}

function submitApplicationFormPopUp(){
    // if user is not connected direct them to login page


    if(getElementById("myfile").value == ""){
        //if no file is chosen display error message
        
    }
    //else popup message for confirmation
    {

    }
}