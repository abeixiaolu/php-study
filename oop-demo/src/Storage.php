<?php

namespace App;

class Storage
{
  public static function resolve()
  {
    if ($_ENV['FILE_STORAGE'] === 'local') {
      return new LocalStorage();
    } else if ($_ENV['FILE_STORAGE'] === 's3') {
      return new S3Storage();
    }
    throw new \Exception('Invalid file storage');
  }
}
