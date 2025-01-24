<?php

use Core\App;
use Core\Session;
use Core\Validator;
use Http\Forms\NoteForm;

$db = App::container()->resolve(Core\Database::class);

NoteForm::validate($_POST);

$db->query("insert into notes(body, user_id) values(:body, :user_id);", [
  'body' => $_POST['body'],
  'user_id' => Session::get('user')['id'],
]);

redirect('/notes');
