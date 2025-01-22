<?php

use Core\App;

$db = App::container()->resolve(Core\Database::class);
$note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->findOrFail();
if (! $note) {
  abort();
}

$currentUserId = 1;
authorize($note['user_id'] === $currentUserId);

$db->query("delete from notes where id = :id", ['id' => $_POST['id']]);
header('location: /notes');
exit();
