<?php

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

$router->get('/notes', 'controllers/note/index.php');
$router->get('/note', 'controllers/note/show.php');
$router->get('/note-create', 'controllers/note/create.php');
