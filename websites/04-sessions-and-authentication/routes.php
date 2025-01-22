<?php

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

$router->get('/notes', 'controllers/note/index.php');
$router->get('/note', 'controllers/note/show.php');
$router->delete('/note', 'controllers/note/destroy.php');

$router->get('/note/edit', 'controllers/note/edit.php');
$router->patch('/notes', 'controllers/note/update.php');

$router->get('/note-create', 'controllers/note/create.php');
$router->post('/notes', 'controllers/note/store.php');

$router->get('/register', 'controllers/registration/create.php');
$router->post('/register', 'controllers/registration/store.php');
