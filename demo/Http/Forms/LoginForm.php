<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;

class LoginForm
{
  public $errors = [];

  public function __construct(public array $attributes)
  {
    if (!Validator::email($attributes['email'])) {
      $this->errors['email'] = 'Please provide a valid email address.';
    }

    if (!Validator::string($attributes['password'])) {
      $this->errors['password'] = 'Please provide a correct password.';
    }
  }


  public static function validate($attributes)
  {
    $instance = new static($attributes);

    return $instance->failed() ? $instance->throw() : $instance;
  }

  public function errors()
  {
    return $this->errors;
  }

  public function failed()
  {
    return count($this->errors);
  }

  public function throw()
  {
    throw new ValidationException($this->errors(), $this->attributes);
  }

  public function error($field, $message)
  {
    $this->errors[$field] = $message;

    return $this;
  }
}
