<?php

use Core\Session;

view('note/create.view.php', [
  'heading' => 'Create Note',
  'body' => old('body'),
  'errors' => Session::get('errors'),
]);
