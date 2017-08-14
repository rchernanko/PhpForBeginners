<?php

$users = $app['database']->selectAll('users');

require __DIR__ . '/../views/homepage.view.php';