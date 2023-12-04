<?php
class User extends Db_object  {
    public $id;
    public $username;
    public $password;

    
    protected static $table = "users";
    public static $fields = array('id', 'username','password');

}