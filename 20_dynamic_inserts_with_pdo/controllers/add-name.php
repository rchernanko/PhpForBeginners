<?php

//Here is the database insert we would like to work...
//Let's first add an insert function into the QueryBuilder class

$app['database']->insert('users', [
    'name' => $_POST['name']
]);

//If the above query is working fine, in the current state (see the insert function in
//QueryBuilder), you won't see anything on the UI...despite the query being successful.

//So let's change that by using header to redirect to the about page...

header('Location: /20_dynamic_inserts_with_pdo/about');
//TODO read a little more about this