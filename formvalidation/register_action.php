<?php 

$name =   $_POST['username'];
$email =   $_POST['email'];
$password =   $_POST['password'];
$confirm_password =   $_POST['cpasswrod'];


// echo $name;

echo htmlspecialchars($name);

// if(empty($name)){

//     echo "name is empty";

// }else{

//     echo "ye khale nhi es me valu mojod he or wo valu ye he  ". $name;
// }


// if(strlen($password) < 3){
//     echo "password should be at least 3 characters long";
// }else{
//     echo "password is valid <br>" ;
// }

// if(strlen($name) > 8 ){
//     echo "name should be less than 8 characters long";
// }else{
//     echo "name is valid";
// }


?>