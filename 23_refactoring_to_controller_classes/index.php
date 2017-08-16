<?php

$database = require 'core/bootstrap.php';

Router::load('routes.php')->direct(Request::getRequestUri(), Request::method());