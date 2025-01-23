<?php

$router->get('/', 'index.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');

$router->get('/notes', 'note/index.php')->only('auth');
$router->get('/note', 'note/show.php');
$router->delete('/note', 'note/destroy.php');

$router->get('/note/edit', 'note/edit.php');
$router->patch('/notes', 'note/update.php');

$router->get('/note-create', 'note/create.php');
$router->post('/notes', 'note/store.php');

$router->get('/register', 'registration/create.php')->only('guest');
$router->post('/register', 'registration/store.php')->only('guest');

$router->get('/login', 'session/create.php')->only('guest');
$router->post('/login', 'session/store.php')->only('guest');
$router->delete('/logout', 'session/destroy.php')->only('auth');
