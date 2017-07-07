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

// What if you want JUST the titles of the posts? For this, we can use array_column:

$titlesOnly = array_column($posts, 'title');
//Title MUST be a public property though...won't work if this is private or protected

//var_dump($titlesOnly);

//TODO play around with the other array functions...