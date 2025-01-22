<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . "Core/functions.php";

spl_autoload_register(function ($class) {
  $result = str_replace('\\', '/', $class);
  require base_path("{$result}.php");
});


require base_path('bootstrap.php');

$router = new Core\Router();
require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$router->route($uri, $_POST['_method'] ?? $_SERVER['REQUEST_METHOD']);
