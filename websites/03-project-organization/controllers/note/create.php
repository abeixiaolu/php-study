<?php

require "Validator.php";

// dd(Validator::email("abe@gmail.com"));

$heading = "Create Note";
$config = require "config.php";
$db = new Database($config['database']);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $body = $_POST['body'];
  $errors = [];

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

require "views/note/create.view.php";
