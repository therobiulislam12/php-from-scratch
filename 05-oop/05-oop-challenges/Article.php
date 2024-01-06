<?php

// Challenge 1

class Article
{
    // Properties
    public $title;
    public $content;
    private $published = false;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function publish()
    {
        $this->published = true;
    }

    public function isPublished()
    {
        return $this->published;
    }
}

$article1 = new Article('Title 1', "Content 1");
$article2 = new Article('Title 2', "Content 2");

$article1->publish();
// echo $article1->isPublished();
var_dump($article1->isPublished());
var_dump($article2->isPublished());
