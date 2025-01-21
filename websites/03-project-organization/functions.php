<?php

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

function view($path, $params)
{
  extract($params);
  require base_path("views/{$path}");
}
