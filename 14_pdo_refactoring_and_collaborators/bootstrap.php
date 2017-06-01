<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';
$config = require '../config/config.php'; //This is where I will store all my sensitive information e.g. db usernames and passwords

return new QueryBuilder(Connection::make($config['database'])); //If I return, I can then save it to a variable in my bootstrap.php file

//This file can be considered a factory