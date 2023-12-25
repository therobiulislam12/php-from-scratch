<?php 

// PHP is dynamic type language but If I want to declare type

declare(strict_types = 1); // need to enable type

function sum(int $num1, int $num2) : int{
    return $num1 + $num2;
}
// echo sum(1,1);
// echo sum(1,'1'); // it'll give me an error



function sum2(int $num1, int $num2) : int{
    // return "Hello"; // it'll give me an error because return value isn't INT
    return $num1 + $num2;
}
// echo sum2(1,1);


// If I don't need return value type use VOID these call no return

function greetings(string $name) : void {
    echo "Hello, {$name}";
}

greetings("Robiul");