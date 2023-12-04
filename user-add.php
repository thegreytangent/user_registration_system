<?php require './core/init.php'; ?>

<?php 


$username = Input::get('username');
$password = Input::get('password');
$confirm_password = Input::get('confirm_password');
$firstname = Input::get('firstname');
$lastname = Input::get('lastname');


$user = new User();
$user->username = $username;
$user->password  = $user->securePassword();
$user->create();