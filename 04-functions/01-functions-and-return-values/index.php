<?php

//  Basic Function 

function say_hello()
{
    echo 'hello';
}

// say_hello();

// Return with function
function say_goodbye($name)
{
    return "Goodbye, {$name}" . PHP_EOL;
}

echo say_goodbye('Robiul');
echo say_goodbye('Golam Rabbani');
