<?php

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