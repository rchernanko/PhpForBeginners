<?php

/*
 * This file is the entry point in our application...
 * It will simply be responsible for bootstrapping and setting up our project
 *
 */

$database = require 'core/bootstrap.php';

require Router::load('routes.php')->direct(Request::getRequestUri()); //Before I added require here, this did not work...

/*

In above, I need to first load my routes, then get the URI from the request + pass it into the router->direct()
function + this will then redirect to the correct controller

*/