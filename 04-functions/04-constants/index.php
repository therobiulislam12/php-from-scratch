<?php

// Now we'll learn PHP constant, how it use
// PHP is a global constant I didn't need to call global keyword on function
// If we want to change constant it'll give me a error

// Have 2 way to declare constant
// 1. define() 2. use const keyword



// define('VARIABLE_NAME', 'value');

define('APP_NAME', 'My App');
define('APP_VERSION', '1.0.0');

// echo APP_NAME;
// echo PHP_EOL;
// echo APP_VERSION;


// with const keyword
const DB_NAME = "my_db";
const DB_HOST = "localhost";

// echo PHP_EOL;
// echo DB_NAME;
// echo PHP_EOL;
// echo DB_HOST;


// use constant on a variable
function tell_version()
{
    echo APP_NAME;
    echo PHP_EOL;
    echo DB_NAME;
    echo PHP_EOL;
    echo DB_HOST;
}

// call your function
tell_version(); // it don't give an error
