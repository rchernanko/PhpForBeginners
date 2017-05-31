<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';

return new QueryBuilder(Connection::make()); //If I return, I can then save it to a variable in my bootstrap.php file

//This file can be considered a factory