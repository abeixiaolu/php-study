<?php

use Core\App;
use Core\Authenticator;
use Core\Database;
use Http\Forms\RegisterForm;

$db = App::resolve(Database::class);
$errors = [];

$form = RegisterForm::validate($_POST);

$authenticator = new Authenticator();
$user = $authenticator->get_user($_POST['email']);

if (!$user) {
  $newUserId = $db->query('insert into users (email, password) values (:email, :password)', [
    'email' => $_POST['email'],
    'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
  ])->id();
  $authenticator->login([
    'email' => $_POST['email'],
    'id' => $newUserId,
  ]);
  redirect('/');
}

$form->error('email', 'This email is already taken.')->throw();

redirect('/register');
