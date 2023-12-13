<?php require './core/init.php'; ?>

<?php

//Get all information and store it inside the variable
$username = Input::get('username');
$password = Input::get('password');
$id = Input::get('id');

$user = new User();

$user->id = $id;
$user->username = $username;
$user->password  = $password;
$user->update();

header("location: index.php?success=true&status=update"); // query parameters
exit();