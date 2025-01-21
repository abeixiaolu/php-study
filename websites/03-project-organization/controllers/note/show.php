<?php

use Core\Database;

$config = require base_path("config.php");
$db = new Database($config['database']);
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

view('note/show.view.php', [
  'heading' => 'Note Detail',
  'note' => $note
]);
