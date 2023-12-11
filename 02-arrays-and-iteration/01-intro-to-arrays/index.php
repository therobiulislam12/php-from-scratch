<?php

// Learning Array

$names = array('Jhon', 'Jill', 'Jack'); // Method 1
$numbers = [1, 2, 3, 4, 5, 6];


// Create a function for see
function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

/**
 * We're not use echo for print array value
 */

// echo $numbers; // Warning: Array to string conversion


// Adding element on array
$names[] = 'Robiul'; // it always add as a last item

// Remove anything from array
unset($numbers[2]); // If you use unset for remove anything from your array so your array also delete index, so make reindex your array

$numbers = array_values($numbers);

// call function
inspect($names);
inspect($numbers);
