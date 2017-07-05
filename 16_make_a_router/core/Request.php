<?php

class Request
{
    public static function getRequestUri()
    {
        return trim($_SERVER['REQUEST_URI'], '/');

        /*

            To get the request URI, we can use a super global variable ($_SERVER)

                var_dump($_SERVER);

            This gives me the following information + the one I am interested in is the request URI:

            array (size=24)
              'DOCUMENT_ROOT' => string '/Users/richardchernanko/Development/PhpForBeginners' (length=51)
              'REMOTE_ADDR' => string '::1' (length=3)
              'REMOTE_PORT' => string '51870' (length=5)
              'SERVER_SOFTWARE' => string 'PHP 7.1.5 Development Server' (length=28)
              'SERVER_PROTOCOL' => string 'HTTP/1.1' (length=8)
              'SERVER_NAME' => string 'localhost' (length=9)
              'SERVER_PORT' => string '8080' (length=4)
              'REQUEST_URI' => string '/16_make_a_router/about-culture' (length=31)
              'REQUEST_METHOD' => string 'GET' (length=3)
              'SCRIPT_NAME' => string '/16_make_a_router/index.php' (length=27)
              'SCRIPT_FILENAME' => string '/Users/richardchernanko/Development/PhpForBeginners/16_make_a_router/index.php' (length=78)
              'PATH_INFO' => string '/about-culture' (length=14)
              'PHP_SELF' => string '/16_make_a_router/index.php/about-culture' (length=41)
              'HTTP_HOST' => string 'localhost:8080' (length=14)
              'HTTP_CONNECTION' => string 'keep-alive' (length=10)
              'HTTP_CACHE_CONTROL' => string 'max-age=0' (length=9)
              'HTTP_UPGRADE_INSECURE_REQUESTS' => string '1' (length=1)
              'HTTP_USER_AGENT' => string 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36' (length=121)
              'HTTP_ACCEPT' => string 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,;q=0.8' (length=85)
              'HTTP_ACCEPT_ENCODING' => string 'gzip, deflate, br' (length=17)
              'HTTP_ACCEPT_LANGUAGE' => string 'en,en-US;q=0.8' (length=14)
              'HTTP_COOKIE' => string 'Phpstorm-a0e14d06=a2e335fb-2a27-4f3f-a4d0-f8285320f26a' (length=54)
              'REQUEST_TIME_FLOAT' => float 1499155434.2524
              'REQUEST_TIME' => int 1499155434


        */
    }
}