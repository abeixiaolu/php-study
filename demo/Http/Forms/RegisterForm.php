<?php

namespace Http\Forms;

use Core\Validator;

class RegisterForm extends BasicForm
{
  public $errors = [];

  public function __construct(public array $attributes)
  {
    if (!Validator::email($attributes['email'])) {
      $this->errors['email'] = 'Please provide a valid email address.';
    }

    if (!Validator::string($attributes['password'], 7, 255)) {
      $this->errors['password'] = 'Please provide a password of at least 7 characters.';
    }
  }
}
