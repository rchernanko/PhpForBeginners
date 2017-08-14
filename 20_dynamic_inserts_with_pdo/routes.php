<?php

$router->get('20_dynamic_inserts_with_pdo', __DIR__ . '/controllers/homepage.php');
$router->get('20_dynamic_inserts_with_pdo/about', __DIR__ . '/controllers/about.php');
$router->get('20_dynamic_inserts_with_pdo/about/culture', __DIR__ . '/controllers/about-culture.php');
$router->get('20_dynamic_inserts_with_pdo/contact', __DIR__ . '/controllers/contact.php');
$router->post('20_dynamic_inserts_with_pdo/names', __DIR__ . '/controllers/add-name.php');