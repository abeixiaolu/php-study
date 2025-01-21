<?php

$config = require base_path("config.php");
$db = new Database($config['database']);

$note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->fetch();

if (! $note) {
  abort();
}

$currentUserId = 1;
if (! ($note['user_id'] === $currentUserId)) {
  abort(Response::FORBIDDEN);
}



view('note/show.view.php', [
  'heading' => 'Note Detail',
  'note' => $note
]);
