<?php

use App\Storage;

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$storage = Storage::resolve();
$storage->put('local-storage.txt', 'Hello, World! from ' . $_ENV['FILE_STORAGE']);
