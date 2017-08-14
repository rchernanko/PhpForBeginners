<?php

/*
 * In this lesson, we want to insert some dynamic data into a db table (based on what the user types in on the homepage.view.php)
 *
 * At this point, we do not have a names table in our db - so let's create one:
 *
 * create table users (id int primary key auto_increment, name varchar(100))
 *
 * Now let's go to the homepage.view.php - We can see that when we submit a name, it gets POST'ed to the
 * controller which then redirects it to add-name.php
 *
 * It is in add-name.php that we will start to build code that inserts the name into the database
 *
 */

