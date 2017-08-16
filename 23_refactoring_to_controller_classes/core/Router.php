<?php

class Router
{
    public $routes = [

        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new self;
        require __DIR__ . "/../$file";

        return $router;

    }

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {

            /*
             * Explode turns a string into items of an array
             *
             * explode('@', $this->routes[$requestType])
             *
             * The above will return an array e.g. [ 'PagesController', 'home' ]
             *
             * But we don't want to pass an array to the callAction function below, instead we want to pass 2 arguments, $controller and $action
             *
             * To do this (and using the explode), we can use something called the 'splat operator' (this is the 3 dots ...)
             *
             * What does the splat operator do?
             *
             * Well, if you have an array and you pass that to a function using a splat operator, each of the items
             * within that array will be converted into function arguments
             *
             * So in the instance below, the $controller would become 'PagesController' and the $action would become 'home'
             *
             */

            return $this->callAction(...explode('@', $this->routes[$requestType][$uri]));
        }

        throw new Exception('No route found for this URI');
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    private function callAction($controller, $action)
    {
        $controller = new $controller;
        //FIXME The above come out to new PagesController but for some reason PagesController cannot be found here...

        //TODO pretty cool - method_exists
        if (!method_exists($controller, $action)) {
            throw new Exception("($controller) does not respond to the ($action) action");
        }

        return $controller->action();
        //Ok let's now go to back to the PagesController file where we can do some refactoring
    }
}