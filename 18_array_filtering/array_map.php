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

/*

What if we want to iterate over each item in $posts and change each published status to true...

For that, we can use array_map

See array_filter for a bit of explanation of closure / callbacks

In array_map, I am passing in my $posts + then for each iteration (i.e. each Post), what you return (in the closure
function) is what gets stored for that current iteration.

So in the below, each Post will have its published status set to true.

*/

$modified = array_map(function ($post) {

    $post->published = true;
    return $post;

}, $posts);

//var_dump($modified); //returns an array of the modified Posts (as below):

/*

  array(4) {
  [0] =>
  class Post#1 (2) {
    public $title =>
    string(13) "My first post"
    public $published =>
    bool(true)
  }
  [1] =>
  class Post#2 (2) {
    public $title =>
    string(14) "My second post"
    public $published =>
    bool(true)
  }
  [2] =>
  class Post#3 (2) {
    public $title =>
    string(13) "My third post"
    public $published =>
    bool(true)
  }
  [3] =>
  class Post#4 (2) {
    public $title =>
    string(14) "My fourth post"
    public $published =>
    bool(true)
  }
}

 */


/*
 * So the above example is ok to use (array_map), but you probably could just use a for-each loop, and the same thing
 * would be achieved.
 *
 * So when is it more useful to use array_map then?
 *
 * It's more likely to be of use when you want to "transform" an object in some way...
 *
 * For example, let's say we want to turn each of our Post objects into an array
 *
 */

$transformed = array_map(function ($post) {

    return (array) $post;

}, $posts);

//var_dump($transformed);

/* NOW, I don't simply have an array of post objects, but I now have an array of arrays

array(4) {
  [0] =>
  array(2) {
    'title' =>
    string(13) "My first post"
    'published' =>
    bool(true)
  }
  [1] =>
  array(2) {
    'title' =>
    string(14) "My second post"
    'published' =>
    bool(true)
  }
  [2] =>
  array(2) {
    'title' =>
    string(13) "My third post"
    'published' =>
    bool(true)
  }
  [3] =>
  array(2) {
    'title' =>
    string(14) "My fourth post"
    'published' =>
    bool(true)
  }
}

*/



/*
 * What if I only want to expose the title of the post (and not it's published status)
 *
 * Well, we can use array_map again for that
 *
 */

$titleOnly = array_map(function ($post) {

    return ['title' => $post->title];

}, $posts);

var_dump($titleOnly);

/*

array(4) {
  [0] =>
  array(1) {
    'title' =>
    string(13) "My first post"
  }
  [1] =>
  array(1) {
    'title' =>
    string(14) "My second post"
  }
  [2] =>
  array(1) {
    'title' =>
    string(13) "My third post"
  }
  [3] =>
  array(1) {
    'title' =>
    string(14) "My fourth post"
  }
}

 */