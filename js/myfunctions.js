/* when one checkbox is selected disable the other */
function disableOtherCheckbox(id1, id2){
    var checkbox1 = document.getElementById(id1);
    var checkbox2 = document.getElementById(id2);
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

function hideShowApplicationForm() {

    var x = document.getElementById("application-form");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function officeSubmitForms() {
    var forms = document.querySelectorAll(".form-groupo");
    var data = {};
    for (var i = 0; i < forms.length; i++) {
        var formData = new FormData(forms[i]);
        for (var [name, value] of formData.entries()) {
            data[name] = value;
        }
    }
    
    console.log(JSON.stringify(data));

    fetch("submit-office.php", {
        method: "POST",
        body: JSON.stringify(data),
        headers: {
        "Content-Type": "application/json"
        }
    })
     .then(response => response.text())
     .then(data => {
        window.location = "../index.php";
     });
}

function ApplicationFormModal(){
    var file = document.getElementById('myfile').value;
    var x = document.getElementById("invalid-file");
    if(file){
        x.style.display = "none";
        $("#modalConfirm").modal();
    }else{
        x.style.display = "block";
    }
}

function ApplicationFormModalWithFile(){
    $("#modalConfirm").modal();
}

function EditDetails(){

    var editable = document.getElementById("editable-details");
    var disabled = document.getElementById("disabled-details");
    var editbutton = document.getElementById("editButton");
    var savebutton = document.getElementById("saveButton");

    editable.style.display = "block";
    disabled.style.display ="none";
    editbutton.style.display = "none";
    savebutton.style.display = "block";

}

function SaveDetails(){

    var editable = document.getElementById("editable-details");
    var disabled = document.getElementById("disabled-details");
    var editbutton = document.getElementById("editButton");
    var savebutton = document.getElementById("saveButton");

    editable.style.display = "none";
    disabled.style.display ="block";
    editbutton.style.display = "block";
    savebutton.style.display = "none";

}
