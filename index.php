<?php

/**
 * Marcus Absher
 * Date: 5-10-19
 * http://mabsher.greenriverdev.com/328/guestbook/
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload
require_once('vendor/autoload.php');

session_start();

$valid = false;
//create an instance of the Base class
$f3 = Base::instance();

//Turn on fat free error reporting
$f3->set('DEBUG', 3);

//Define route
$f3->route('GET /',
    function() {
        echo '<h1>My Guestbook App</h1>';
    }
);

//Run fat free
$f3->run();