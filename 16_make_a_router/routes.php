<?php

/*
 * Now let's set up some routes that point to controllers...
 * A controller can be considered as an entry point for a route. It's like the project manager - interacts with other
 * things to get the data it needs, then passes it onto the view to render it (basic MVC)
 *
 */


$router->define([
    '16_make_a_router' => __DIR__ . '/controllers/homepage.php', //If no uri, go to this controller
    '16_make_a_router/about' => __DIR__ . '/controllers/about.php', //If the uri is e.g. www.example.com/about, go to this controller
    '16_make_a_router/about/culture' => __DIR__ . '/controllers/about-culture.php', //If the uri is e.g. www.example.com/about-culture, go to this controller
    '16_make_a_router/contact' => __DIR__ . '/controllers/contact.php'
]);

/*
 * Some frameworks do things like this:
 *
 * $router->define('', 'controllers/index.php');
 * $router->define('about', 'controllers/about.php');
 *
 * I.E. you register the routes individually as opposed to an array in the above
 */