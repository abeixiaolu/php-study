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

if (!Validator::string($password, 7, 255)) {
  $errors['password'] = 'Please provide a password of at least 7 characters.';
}

if (!empty($errors)) {
  view('register.view.php', [
    'errors' => $errors
  ]);
}

$user = $db->query('select * from users where email = :email', ['email' => $email])->find();

if ($user) {
  header('location: /');
  exit();
}
$db->query('insert into users (email, password) values (:email, :password)', [
  'email' => $email,
  'password' => password_hash($password, PASSWORD_BCRYPT),
]);
$_SESSION['user'] = [
  'email' => $email
];
header('location: /');
die();
