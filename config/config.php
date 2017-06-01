<?php

//This is the place we will put all sensitive information - usernames, passwords etc.

return [
  'database' => [
      'connection' => 'mysql:host=127.0.0.1',
      'name' => 'laracasts',
      'username' => 'root',
      'password' => '123456qwerty',
      'options' => [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      ]
  ]
];

/*
 * Ok so the 'options' above are quite cool.
 *
 * If in my index.php file, I tried to do a select all on a table that doesn't exist in my db:
 *
 * ...$tasks = $queryBuilder->selectAll('this-does-not-exist');
 *
 * ...if I don't set the PDO errmode, if I tried to hit that page in the browser, no exception would be thrown and it would
 * be quite tricky to debug. By default, the errmode is set to 'PDO::ERRMODE_SILENT'
 *
 * However, with the 'PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION', the exceptions would be thrown in the browser and I would
 * be able to debug more easily
 *
 * http://php.net/manual/en/pdo.error-handling.php
 */
