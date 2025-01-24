<?php

use Core\App;
use Core\Session;
use Http\Forms\NoteForm;

$db = App::container()->resolve(Core\Database::class);

NoteForm::validate($_POST);

$db->query("update notes set body = :body where id = :id", [
  'body' => $_POST['body'],
  'id' => $_POST['id'],
]);

redirect('/notes');
