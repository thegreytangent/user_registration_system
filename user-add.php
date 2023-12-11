<?php require './core/init.php'; ?>

<?php

//Get all information and store it inside the variable
$username = Input::get('username');
$password = Input::get('password');
$confirm_password = Input::get('confirm_password');
$firstname = Input::get('firstname');
$lastname = Input::get('lastname');

$isExists = User::find_by('username', $username);

if ($isExists) {
    header("location: index.php?success=false"); // query parameters
} else {
    $user = new User();
    $user->username = $username;
    $user->password  = $user->securePassword();
    $user->create();

    header("location: index.php?success=true"); // query parameters


}
