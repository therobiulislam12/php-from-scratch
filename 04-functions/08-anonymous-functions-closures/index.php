<?php

// Here Learn anonymous function

// declare a variable and set a function
$square = function ($number) {
    return $number * $number;
};

// echo $square(5);



// Learn more one things which is Closures
// If you have one variable on local scope you want to use it another function
// so you need to use closure function

function createCounter()
{
    $count = 0;

    $counter = function () use (&$count) {
        return ++$count;
    };

    return $counter;
}

$counter =  createCounter();

// echo $counter . PHP_EOL;

