<?php
$value     = $_GET['query'];
$formfield = $_GET['field'];
// Check Valid or Invalid user name when user enters user name in username input field.
if ($formfield == "username") {
    if (strlen($value) < 4) {
        echo "Must be 3+ letters";
    } else {
        echo "<span>Valid</span>";
    }
}
// Check Valid or Invalid password when user enters password in password input field.
if ($formfield == "password") {
    if (strlen($value) < 6) {
        echo "Password too short";
    } else {
        echo "<span>Strong</span>";
    }
}
// Check Valid or Invalid email when user enters email in email input field.
if ($formfield == "email") {
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) {
        echo "Invalid email";
    } else {
        echo "<span>Valid</span>";
    }
}
// Check Valid or Invalid website address when user enters website address in website input field.
if ($formfield == "website") {
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $value)) {
        echo "Invalid website";
    } else {
        echo "<span>Valid</span>";
    }
}

// Check Valid or Invalid name of dish entered by user or the name of the user. 
if ($formfield == "name") {
    if (strlen($value) < 4) {
        echo "Must be 3+ letters";
    } else {
        echo "<span>Valid</span>";
    }
}

// Check Valid or Invalid why this dish is special to you  
if ($formfield == "special") {
    if (strlen($value) < 4) {
        echo "Must be 3+ letters";
    } else {
        echo "<span>Valid</span>";
    }
}

// Check Valid or Invalid age entered  
if ($formfield == "age") {
    if (!preg_match("/^1[0-9][0-9]$|^[1-9][0-9]$|^[0-9]$/", $value)) {
        echo "Invalid age";
    } else {
        echo "<span>Valid</span>";
    }
}

// Check Valid or Invalid phone number
if ($formfield == "phone") {
    if (!preg_match("/^([0-9\(\)\/\+ \-]*)$/", $value)) {
        echo "Invalid phone";
    } else {
        echo "<span>Valid</span>";
    }
}

?>