<?php

namespace App;

use Aws\S3\S3Client;

class S3Storage implements FileStorage
{
  public function put($path, $content)
  {
    $s3 = new S3Client([
      'version' => 'latest',
      'region' => 'us-west-2',
      'credentials' => [
        'key' => $_ENV['S3_KEY'],
        'secret' => $_ENV['S3_SECRET'],
      ],
    ]);
    $s3->putObject([
      'Bucket' => $_ENV['S3_BUCKET'],
      'Key' => $path,
      'Body' => $content,
    ]);
  }
}
