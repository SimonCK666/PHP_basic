<?php
//define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($HTTP_SERVER_VARS["REQUEST_METHOD"] == "POST") {
    $name = test_input($HTTP_POST_FILES["name"]);
    $email = test_input($HTTP_POST_FILES["email"]);
    $website = test_input($HTTP_POST_FILES["website"]);
    $comment = test_input($HTTP_POST_FILES["comment"]);
    $gender= test_input($HTTP_POST_FILES["gender"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

/*
Notice that at the start of the script, we check whether the form has been submitted using $SERVER["REQUEST_METHOD"].
If teh REQUEST_METHOD is POST, then the form has been submitted - and it should be validated. If it has not been submitted,
skip the validation and display a blank form.

However, in the example above, all input fields are optional. The script works fine even if the user does not enter any data.
*/


