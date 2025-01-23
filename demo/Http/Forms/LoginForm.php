<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm
{
  public $errors = [];

  public function validate($email, $password)
  {
    if (!Validator::email($email)) {
      $this->errors['email'] = 'Please provide a valid email address.';
    }

    if (!Validator::string($password)) {
      $this->errors['password'] = 'Please provide a correct password.';
    }

    return empty($this->errors);
  }
}
