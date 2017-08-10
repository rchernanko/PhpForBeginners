<?php

/*
 * So up until this point, our routes have looked like this:
 *
 *  $router->define([
    '19_request_types' => __DIR__ . '/controllers/homepage.php', //If no uri, go to this controller
    '19_request_types/about' => __DIR__ . '/controllers/about.php', //If the uri is e.g. www.example.com/about, go to this controller
    '19_request_types/about/culture' => __DIR__ . '/controllers/about-culture.php', //If the uri is e.g. www.example.com/about-culture, go to this controller
    '19_request_types/contact' => __DIR__ . '/controllers/contact.php',
    '19_request_types/names' => __DIR__ . '/controllers/add-name.php',
    ]);
 *
 *
 *
 *
 * But what if we only want '19_request_types/names' to be accessible by POST request + not GET?
 *
 * Well we can do the below...
 *
 * But this means we also have to update our Router class too
 *
 */


$router->get('19_request_types', __DIR__ . '/controllers/homepage.php');
$router->get('19_request_types/about', __DIR__ . '/controllers/about.php');
$router->get('19_request_types/about/culture', __DIR__ . '/controllers/about-culture.php');
$router->get('19_request_types/contact', __DIR__ . '/controllers/contact.php');
$router->post('19_request_types/names', __DIR__ . '/controllers/add-name.php');