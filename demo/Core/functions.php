<?php

use Core\Response;
use Core\Session;

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  die();
}

function urlIs($value)
{
  return $_SERVER['REQUEST_URI'] === $value;
}

function base_path($path)
{
  return BASE_PATH . $path;
}

function view($path, $params = [])
{
  extract($params);
  require base_path("views/{$path}");
}

function authorize($condition, $status = Response::FORBIDDEN)
{
  if (! $condition) {
    abort($status);
  }
  return true;
}

function abort($code = Response::NOT_FOUND)
{
  http_response_code($code);
  require base_path("views/{$code}.php");
  die();
}

function redirect($uri)
{
  header("Location: {$uri}");
  exit();
}

function old($key, $default = '')
{
  return Session::get('old')[$key] ?? $default;
}
