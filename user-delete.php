<?php require './core/init.php'; ?>

<?php

$id = Input::get('id');

$user = new User();
$user->id = $id;
$user->delete();

header("location: index.php?success=true&status=update"); // query parameters
exit();