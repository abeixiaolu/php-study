<?php

namespace App;

class LocalStorage
{
  public function put($path, $content)
  {
    $filePath = __DIR__ . '/../storage/' . $path;
    $dir = dirname($filePath);
    if (!is_dir($dir)) {
      mkdir($dir, 0777, true);
    }
    file_put_contents($filePath, $content);
  }
}
