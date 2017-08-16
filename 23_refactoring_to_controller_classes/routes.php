<?php

//Have a look at the 'direct' function within Router to see how the @ will work
$router->get('23_refactoring_to_controller_classes', 'PagesController@home');
$router->get('23_refactoring_to_controller_classes/about', 'PagesController@about');
$router->get('23_refactoring_to_controller_classes/contact', 'PagesController@contact');