<?php

// Parameters = 
function sum($num1, $num2)
{
    return $num1 + $num2;
}



// Arguments
// echo sum(15, 20);


function say_goodbye($name = "World")
{
    return "Goodbye, {$name}" . PHP_EOL;
}

echo say_goodbye('Robiul');
echo say_goodbye();



function add_all(...$args)
{
    // $total = 0;

    // foreach($args as $arg){
    //     $total += $arg;
    // }

    // return $total;
    return array_sum($args);
    // var_dump($args);
}

echo add_all(1,2,3);
