<!DOCTYPE html>

<html lang="en">

<h1>Submit Your Name</h1>

<!--When the GET method is called, direct to the route /names-->

<form method="POST" action="/19_request_types/names">

    <!--  Whenever you want to submit a form field to your server, you MUST use the 'name' HTML key -->

    <input name="name">

    <button type="submit">Submit</button>
    <!--

    At present, if I launch my web server + then type in http://localhost:8080/19_request_types/, I will see a form field.

    If I enter richard into that field and press enter (to submit the form), I see an error (because the route "names" is not yet defined).

    It tried to direct us to the URL below. BECAUSE it is a GET request, it added the form data in the query string (i.e. name=richard)

    http://localhost:8080/names?name=richard


    SO NOW, let's go to the routes file and add the /19_request_types/names route :-)

    When this route is called, it will redirect to controllers/add-name.php

    OK GREAT!! So let's enter some text in the form field and press submit...

    http://localhost:8080/names?name=richard

    BUT what?! This is not working...

    "/19_request_types/names?name=richard - Uncaught Exception: No route found for this URI in /Users/richardchernanko/Development/PhpForBeginners/19_request_types/core/Router.php:35"

    Why??? Well it's trying to direct us to a route that ends with "name=richard" (i.e. it's including the query string in the route itself)

    But we've only created a '19_request_types/names' route in the routes.php file. Not '19_request_types/names?name=richard' route

    What we want to do is strip off the query string. Let's go to the Request class

    -->


</form>

</html>