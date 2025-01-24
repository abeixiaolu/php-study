<?php

namespace Http\Forms;

use Core\Validator;

class NoteForm extends BasicForm
{
  public function __construct(public array $attributes)
  {
    if (!Validator::string($attributes['body'], 1, 1000)) {
      $this->errors['body'] = 'A body of no more than 1,000 characters is required';
    }
  }
}
