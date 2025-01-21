<?php

use Core\Database;

$config = require base_path("config.php");
$db = new Database($config['database']);
$currentUserId = 1;
$note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->fetch();

if (! $note) {
  abort();
}

if (! authorize($note['user_id'] === $currentUserId)) {
  abort(Response::FORBIDDEN);
}

view('note/show.view.php', [
  'heading' => 'Note Detail',
  'note' => $note
]);
