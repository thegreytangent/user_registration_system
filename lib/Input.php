<?php
/**
* Created by Jason V. Castellano.
*/
class Input {
    public static function get($value) {
        if (isset($_POST[$value])) {
            return $_POST[$value];
        } else {
            return $_GET[$value];
        }
    }
}