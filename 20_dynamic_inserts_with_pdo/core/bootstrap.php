<?php

$app = [];

$app['config'] = require __DIR__ . '/../config.php';

require __DIR__ . '/../core/Router.php';
require __DIR__ . '/../core/Request.php';
require __DIR__ . '/../core/database/Connection.php';
require __DIR__ . '/../core/database/QueryBuilder.php';

$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));