<?php

/*
 * Think of namespacing as a folder structure
 *
 * It's like organising your music collection back in the day...
 *
 * Artist > Album > Song
 *
 * That way if there are 2 songs with the same name, because they are in different album + artist folders, there
 * wouldn't be a clash
 *
 * It's more or less like packages in Java
 *
 * So in e.g. the PagesController class...
 *
 * namespace App\Controllers;
 *
 * In general, it's common practice to have you namespace mimick the actual folder structure
 *
 *
 * Following PSR standards, in your class, you would have the namespace first, then any imports (uses), then the class name
 *
 * He also started to talk about MVC a little...
 *
 * Reorganised the directory structure to be:
 *
 *      - app
 *          - controllers/
 *          - models/
 *          - views/
 *          - routes.php
 *      - core
 *          - database/
 *          - App.php
 *          - bootstrap.php
 *          - Request.php
 *          - Router.php
 *      - vendor (composer)
 *
 */
