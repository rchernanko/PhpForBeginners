<?php

require 'App.php';

App::bind('config', require '../config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($name, $data)
{
    extract($data);
    /*
     * Cool again!
     * This is pretty much the opposite of compact().
     *
     * So if $data is [ 'name' => 'joe', 'age' => 25 ]...
     *
     * extract will turn it into a variable...
     *
     * $name = 'joe';
     * $age = 25;
     */

    return require __DIR__ . "/../views/$name.view.php";
}