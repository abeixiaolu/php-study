<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);
$errors = [];
$email = $_POST['email'];
$password = $_POST['password'];
if (!Validator::email($email)) {
  $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password)) {
  $errors['password'] = 'Please provide a correct password.';
}

if (!empty($errors)) {
  view('login.view.php', [
    'errors' => $errors
  ]);
}

$user = $db->query('select * from users where email = :email', ['email' => $email])->find();

if (!$user) {
  return view('login.view.php', [
    'errors' => [
      'email' => 'No user found with this email address.'
    ]
  ]);
}

if (!password_verify($password, $user['password'])) {
  return view('login.view.php', [
    'errors' => [
      'password' => 'Password is incorrect.'
    ]
  ]);
}

login([
  "email" => $email,
]);
header('location: /');
