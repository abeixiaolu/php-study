<?php

use Core\App;

$db = App::resolve(Core\Database::class);

$note = $db->query('select * from notes where id = :id', [
  'id' => $_GET['id'],
])->findOrFail();

$currentUserId = 1;
authorize($note['user_id'] === $currentUserId);

view('note/edit.view.php', [
  'heading' => 'Edit Note',
  'note' => $note,
  'errors' => [],
]);
