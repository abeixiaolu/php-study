<?php

use Core\App;
use Core\Session;

$db = App::resolve(Core\Database::class);
$note = $db->query('select * from notes where id = :id', [
  'id' => $_GET['id'],
])->findOrFail();

authorize($note['user_id'] === Session::get('user')['id']);

view('note/edit.view.php', [
  'heading' => 'Edit Note',
  'note' => $note,
  'errors' => Session::get('errors'),
]);
