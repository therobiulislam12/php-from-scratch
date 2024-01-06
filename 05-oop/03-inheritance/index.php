<?php

class User
{
  public $name;
  public $email;
  protected $status = 'active';

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {
    echo $this->name . ' logged in <br>';
  }
}

class Admin extends User
{
  public $level;

  public function __construct($name, $email, $level)
  {
    $this->level = $level;

    // parent class call
    parent::__construct($name, $email);
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }
}

$admin1 = new Admin('Admin 1', 'admin1@gmail.com', 5);

echo $admin1->setStatus('Inactive');
