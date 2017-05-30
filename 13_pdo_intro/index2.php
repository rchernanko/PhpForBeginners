<?php

//Require the task class...
require 'Task.php';
require 'functions.php';

$pdo = connectToDb();
$tasks = fetchAllTasks($pdo);

//We now have access to the functions within the Task class
var_dump($tasks[0]->foobar());