<!DOCTYPE html>
<html lang="en">
    <?php include "../includes.php" ?>
    <?php include "../navigation.php" ?>

    <header id="header" class="header">
        <div class="header-content">
            <br><br>
            <!-- Form first step -->
            <div id="choice" class="form-1" style="background-color: transparent; width:100%;">
                <div class="container">
                    <!-- Επιλογή φοιτητή - γραφείου -->
                    <div class="card" style="border-width: 3px;">
                        <div class="card-body">
                            <div class="form-group has-error has-danger">
                                <h4> Συνέχεια ως :</h4>
                                <div style="margin-left: 15%;">
                                    <!-- User can choose only one option because they all have the same name -->
                                    <div class="form-group checkbox">
                                        <input type="checkbox" id="isStudent" name="continueAs" value="student">
                                        <label for="isStudent">Φοιτητής-ρια</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group checkbox">
                                        <input type="checkbox" id="isOffice" name="continueAs" value="office" >
                                        <label for="isOffice">Γραφείο Υποδοχής</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <!-- Script to call disableOtherCheckbox function from myfunctions.js -->
                                    <script>disableOtherCheckbox("isStudent", "isOffice")</script>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- Error message for when no checkbox is checked -->
                            <div id="error-message-signup" style="width: 20%; margin-left: 75%; color:red"></div><br>
                            <button type="submit" class="form-control-submit-button" style="width: 20%; margin-left: 75%;" id="signupButton1">Συνέχεια</button>
                            
                            <!-- Apply on click to button. On click of submit button redirectToPageByCheckbox() is called -->
                            <script>
                                var submitButton = document.getElementById("signupButton1");
                                submitButton.addEventListener("click", function(event) {
                                    event.preventDefault();
                                    redirectToPageByCheckbox();
                                });
                            </script>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>

</html>