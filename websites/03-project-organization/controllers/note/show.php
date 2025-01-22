<?php

use Core\App;

$db = App::container()->resolve(Core\Database::class);
$note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->findOrFail();

if (! $note) {
  abort();
}

$currentUserId = 1;
authorize($note['user_id'] === $currentUserId);

view('note/show.view.php', [
  'heading' => 'Note Detail',
  'note' => $note
]);
