<?php

use Core\App;
use Core\Database;
use Http\Forms\LoginForm;

$db = App::resolve(Database::class);
$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();
if (!$form->validate($email, $password)) {
  view('login.view.php', [
    'errors' => $form->errors
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
