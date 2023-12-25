<?php

// Global Scope 

$name = "Robiul Islam";

function say_name()
{
    global $name;
    echo $name;
}

// echo $name;

say_name();
