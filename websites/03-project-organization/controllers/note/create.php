<?php

$config = require base_path("config.php");
$db = new Database($config['database']);
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $body = $_POST['body'];

  if (!Validator::string($body, 1, 1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required';
  }

  if (empty($errors)) {
    $db->query("insert into notes(body, user_id) values(:body, :user_id);", [
      'body' => $body,
      'user_id' => 1,
    ]);
    $body = "";
    $errors = [];
  }
}

view('note/create.view.php', [
  'heading' => 'Create Note',
  'body' => $body,
  'errors' => $errors,
]);
