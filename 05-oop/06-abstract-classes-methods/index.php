<?php

abstract class Shape
{
    protected $name;

    abstract public function calculate();

    public function __construct($name)
    {
        $this->name = $name;
    }


    // concrete function
    public function getName()
    {
        return $this->name;
    }
}


// Create a Circle Class
class Circle extends Shape
{
    private $radius;

    public function __construct($name, $radius)
    {
        $this->radius = $radius;
        parent::__construct($name);
    }

    // Implement the abstract method to calculate area for a circle
    public function calculate()
    {
        return pi() * pow($this->radius, 2);
    }
}


class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($name, $height, $width)
    {
        $this->height = $height;
        $this->width = $width;
        parent::__construct($name);
    }


    public function calculate()
    {
        return $this->height * $this->width;
    }
}

$circle = new Circle('Circle', 5);

$rectangle = new Rectangle('Rectangle', 5, 5);
var_dump($rectangle->getName(),$rectangle->calculate());
