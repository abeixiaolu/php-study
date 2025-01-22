<?php

use Core\App;
use Core\Validator;

$db = App::container()->resolve(Core\Database::class);

$errors = [];
$body = $_POST['body'];
$id = $_POST['id'];
if (!Validator::string($body, 1, 1000)) {
  $errors['body'] = 'A body of no more than 1,000 characters is required';
}

if (! empty($errors)) {
  return view('note/edit.view.php', [
    'heading' => 'Edit Note',
    'note' => ['body' => $body, 'id' => $id],
    'errors' => $errors,
  ]);
}

$db->query("update notes set body = :body where id = :id", [
  'body' => $body,
  'id' => $id,
]);
header('location: /notes');
die();
