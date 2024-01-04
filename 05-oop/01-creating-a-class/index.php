<?php

// Learn more about using PHP Class

/**
 * create a user class
 */
class User
{

    // Properties
    public $name;
    public $email;


    // create a login method
    function login()
    {
        echo 'Yeah! You\'re logged in.' . PHP_EOL;
    }
}

// $user1 = new User();
// $user1->name = "Robiul Islam";
// $user1->email = "robi@gmail.com";

// $user1->login();

// var_dump($user1);


// Learn More about __construct method

class User2
{

    // Properties
    public $name;
    public $email;

    // __construct
    function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
        // var_dump($this);
    }



    // create a login method
    public function login()
    {
        echo $this->name . ', Yeah! You\'re logged in.' . PHP_EOL;
    }
}

$user2 = new User2("Robiul Islam", "robi@gmail.com");
$user2->login();
