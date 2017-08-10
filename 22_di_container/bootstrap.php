<?php

require 'App.php';

/*
 * Let's make a very simple DI container from scratch
 *
 * The App class is the 'container' in which I register and then fetch dependencies
 */

App::bind('config', require '../config/config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));


//Interesting = if I were using composer here - in order to register the new 'App' class I've created in the composer autoloader...
//Run a composer dump-autoload