<?php

use Core\App;
use Core\Validator;

$db = App::container()->resolve(Core\Database::class);

$errors = [];
$body = $_POST['body'];

if (!Validator::string($body, 1, 1000)) {
  $errors['body'] = 'A body of no more than 1,000 characters is required';
}

if (! empty($errors)) {
  return view('note/create.view.php', [
    'heading' => 'Create Note',
    'body' => $body,
    'errors' => $errors,
  ]);
}

$db->query("insert into notes(body, user_id) values(:body, :user_id);", [
  'body' => $body,
  'user_id' => 1,
]);
header('location: /notes');
die();
