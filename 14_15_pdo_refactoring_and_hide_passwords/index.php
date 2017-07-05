<?php

//In this tutorial, we are going to be doing some refactoring of the previous tutorials Introduction to PDO code

/** @var QueryBuilder $queryBuilder */
$queryBuilder = require 'bootstrap.php'; //bootstrap file is like a little factory worker - builds up what I need.

$tasks = $queryBuilder->selectAll('todos');

var_dump($tasks);