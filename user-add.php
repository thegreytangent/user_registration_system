<?php require './core/init.php'; ?>

<?php

//Get all information and store it inside the variable
$username = Input::get('username');
$password = Input::get('password');
$confirm_password = Input::get('confirm_password');
$firstname = Input::get('firstname');
$lastname = Input::get('lastname');

$user = User::find_by('username', $username);

if (!$username) {
    header("location: index.php?success=false&msg=empty_username"); // 
    exit();
}


if ($isExists) {
    header("location: index.php?success=false"); // query parameters
    exit();
} else {
    $user = new User();
    $user->username = $username;
    $user->password  = $user->securePassword();
    $user->create();

    header("location: index.php?success=true"); // query parameters
    exit();


}
