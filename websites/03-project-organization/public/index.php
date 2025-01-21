<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . "functions.php";

spl_autoload_register(function ($class) {
  $result = str_replace('\\', '/', $class);
  require base_path("{$result}.php");
});

require base_path("router.php");
