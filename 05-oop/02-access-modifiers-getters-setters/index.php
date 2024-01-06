<?php
/**
 * Access Modifiers
 * 1. public -> any one call
 * 2. Private -> only inside class call
 * 3. protected -> class and inheritance call
 * 
 */
class User
{
  // Properties
  public $name;
  public $email;

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  // Methods
  public function login()
  {
    echo $this->name . ' logged in <br>';
  }
}

// Instantiate a new object
$user1 = new User('John Doe', 'john@gmail.com');

$user1->login();

$user2 = new User('Jane Doe', 'jane@gmail.com');

$user2->login();

// var_dump($user2);
