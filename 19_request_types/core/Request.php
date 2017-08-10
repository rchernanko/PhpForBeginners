<?php

class Request
{

    /*

    A reminder of the issue here:

    Before touching any of the below, this is what the getRequestUri function looked like:

            public static function getRequestUri()
            {
                return trim($_SERVER['REQUEST_URI'], '/');
            }

    BUT...

    When we tried to hit    :     /19_request_types/names?name=richard

    "Uncaught Exception: No route found for this URI in /Users/richardchernanko/Development/PhpForBeginners/19_request_types/core/Router.php:35"

    Why??? Well it's trying to direct us to a route that ends with "name=richard" (i.e. it's including the query string in the route itself)

    But we've only created a '19_request_types/names' route in the routes.php file. Not '19_request_types/names?name=richard' route

    What we want to do is strip off the query string. Let's go to the Request class...

    And here we are...

    PHP has an in-built function called parse_url...

    This allows us to specify the segment of the request url that we are actually interested
    in i.e. i want everything but the query params

    */

    public static function getRequestUri()
    {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    /*
     * Will touch on this in other classes no doubt...but if I hit ' /19_request_types/names?name=richard'
     *
     * If I then want to be able to access the query params (i.e. name=richard)...I can either do:
     *
     * var_dump($_REQUEST) = returns me any items in the request whether they are GET or POST
     *
     * OR
     *
     * var_dump($_GET['name'])
     */

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}