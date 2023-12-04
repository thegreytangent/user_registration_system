<?php


//READ
$user = User::all();


//CREATE
$user = new User();
$user->username ="sample";
$user->password = "sample";
$user->save();

// UPDATE
$user = User::find_by_id(1);
$user->username = "change";
$user->update();


// DELETE
$user = User::find_by_id(1);
$user->delete();


