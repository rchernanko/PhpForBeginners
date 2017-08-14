<?php

$database = require 'core/bootstrap.php';

require Router::load('routes.php')->direct(Request::getRequestUri(), Request::method());