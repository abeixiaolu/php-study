<?php

namespace Core;

class Authenticator
{

  public function get_user($email)
  {
    return App::resolve(Database::class)->query('select * from users where email = :email', ['email' => $email])->find();
  }

  public function attempt($email, $password)
  {

    $user = $this->get_user($email);

    if (!$user) {
      return false;
    }

    if (!password_verify($password, $user['password'])) {
      return false;
    }

    $this->login([
      "email" => $email,
      "id" => $user['id'],
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
