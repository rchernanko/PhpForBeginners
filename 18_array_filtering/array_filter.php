<?php

//Array filtering is very important!!!

// 1) Let's just create a Post class

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

// 2) Now let's create a collection of Posts

$posts = [
    new Post('My first post', true),
    new Post('My second post', true),
    new Post('My third post', true),
    new Post('My fourth post', false)
];

//var_dump($posts);


// 3) Ok, so now I want to filter the array of Posts so that I only filter posts that have not been published (i.e. published = false)

//Array filter - pass in the array be filtered + then it's going to accept a closure that determines how we filter the current item

$unpublishedPosts = array_filter($posts, function ($post) {
    return !$post->published;
});

//var_dump($unpublishedPosts);

//So you pass in the posts + then it's going to filter through each Post.

//And for each Post, it's then going to trigger the (closure) function + whatever is inside it (so in this case, it
//will only return if the $post->published is equal to false)

//So on the first iteration, the 1st "$post" will be "new Post('My first post', true)", then new Post('My second post', true)" etc etc

//For further explanation on closures / callback functions = http://www.elated.com/articles/php-anonymous-functions/


// 4) Now let's get the published posts

$publishedPosts = array_filter($posts, function ($post) {
    return $post->published;
});

//var_dump($publishedPosts);