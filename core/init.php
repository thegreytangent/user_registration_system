<?php session_start();  ?>
<?php require_once 'config.php'; ?>
<?php
spl_autoload_register(function($class) {
    require_once $_SERVER['DOCUMENT_ROOT'].'/'.FOLDER.'/lib/' . $class . '.php';
     
});
?>
<?php require_once 'functions.php'; ?>