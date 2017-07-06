<?php

class Post
{
    public $title;
    public $published;

    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }
}

$posts = [
    new Post('My first post', true),
    new Post('My second post', true),
    new Post('My third post', true),
    new Post('My fourth post', false)
];