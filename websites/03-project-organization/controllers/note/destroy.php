<?php

use Core\App;

$db = App::container()->resolve(Core\Database::class);
$currentUserId = 1;
$note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->fetch();
if (! $note) {
  abort();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (authorize($note['user_id'] === $currentUserId)) {
    $db->query("delete from notes where id = :id", ['id' => $_POST['id']]);
    header('location: /notes');
    exit();
  }
}
