<?php

// $name = "<p></p>";
// echo strlen($name);
// echo $name;


// validateInput($name);

// echo strlen(validateInput($name));


function validateInput($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    echo $data;

    return $data;
}

$errors = [];
$successMessage = "";

$firstname = validateInput($_POST['first_name']);
$lastname = validateInput($_POST['last_name']);
$email = validateInput($_POST['email']);
$password = validateInput($_POST['password']);
$cpassword = validateInput($_POST['confirm_password']);

if(!$firstname) {
    $errors[] = "First name is required";
}
if(!$lastname) {
    $errors[] = "Last name is required";
}
if(!$email) {
    $errors[] = "Email is required";
}
if(!$password) {
    $errors[] = "Password is required";
}
if($password !== $cpassword) {
    $errors[] = "Password does not match";
}

?>