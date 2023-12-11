<?php require './core/init.php'; ?>

<?php 

//Get all information and store it inside the variable
$username = Input::get('username');
$password = Input::get('password');
$confirm_password = Input::get('confirm_password');
$firstname = Input::get('firstname');
$lastname = Input::get('lastname');

//create user
// $user = new User();
// $user->username = $username;
// $user->password  = $user->securePassword();
// $user->create();

//Redirect back to the form
$isExists = false;

if ($isExists) {

    header("location: index.php?success=false"); // query parameters
} else {
    header("location: index.php?success=true"); // query parameters
}


