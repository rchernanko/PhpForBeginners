<?php

/*
 * To connect with our database, we will use PDO.
 *
 * PDO stands for PHP data objects
 *
 * 1st argument = the DSN
 * 2nd = username
 * 3rd = password
 */

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=laracasts', 'root', '123456qwerty');
} catch (PDOException $e) {
    die('Could not connect to the database :' . $e->getMessage());
}

//It's good practice to surround the PDO connection with a try/catch just in case an exception is thrown
//It's also NOT good practice to have the username and password in this file - but we will learn about how to deal with that later in the course

$statement = $pdo->prepare('select * from todos');

//If I were to just run the above (i.e. just the prepared statement, nothing would happen yet - no execution of the SQL statement has happened)

$statement->execute();

//'fetchAll into memory'
$tasks = $statement->fetchAll(PDO::FETCH_OBJ); //be careful with fetchAll...if the above query returns 353454654 rows...
//...that's a lot of stuff to load up into memory. anyway it's fine for now - we will get onto that soon.

var_dump($tasks);

var_dump($tasks[0]->description);

//NICE - if i take the 'PDO::FETCH_OBJ' out, if i run the page on the web server, there is an associative array + indexed array
//Lots of information (too much). So in the fetchAll function, I can specify the 'fetch style' = obj is nice! Mess around with a few others

//Of course, fetching the database rows in this way is great, BUT it doesn't make any use of the Task class we created in section 12
//Let's go to index2.php in this directory to find out how to do that with PDO (I've actually created a new Task class in this directory