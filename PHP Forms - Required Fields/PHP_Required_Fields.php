In the following code we have added some new variables: $nameErr, $emailErr, $genderErr, and $websiteErr.
These error variables will hold error messages for the required fields. We have also added an if else statement for each $_POST variable.
This checks if the $_POST variable is empty (with the PHP empty() function).
If it is empty, an error message is stored in the different error variables, and if it is not empty, it sends the user input data through the test_input() function:
<?php
//define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["ERQUEST_METHOD"] == "POST") {
    if ((empty($_POST["name"]))) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if ((empty($_POST["email"]))) {
        $nameErr = "Email is required";
    } else {
        $name = test_input($_POST["email"]);
    }

    if ((empty($_POST["website"]))) {
        $nameErr = "Website is required";
    } else {
        $name = test_input($_POST["website"]);
    }

    if ((empty($_POST["comment"]))) {
        $nameErr = "Comment is required";
    } else {
        $name = test_input($_POST["comment"]);
    }

    if ((empty($_POST["gender"]))) {
        $nameErr = "Gender is required";
    } else {
        $name = test_input($_POST["gender"]);
    }
}
?>