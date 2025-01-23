<?php

namespace Core;

class Authenticator
{
  public function attempt($email, $password)
  {

    $user = App::resolve(Database::class)->query('select * from users where email = :email', ['email' => $email])->find();

    if (!$user) {
      return false;
    }

    if (!password_verify($password, $user['password'])) {
      return false;
    }

    $this->login([
      "email" => $email,
    ]);

    return true;
  }

  public function login($user)
  {
    $_SESSION['user'] = $user;
    session_regenerate_id();
  }

  public function logout()
  {
    Session::destroy();
  }
}
