<?php

use Core\App;

$db = App::container()->resolve(Core\Database::class);
$notes = $db->query("select * from notes where user_id = 1")->fetchAll();
view('note/index.view.php', [
  'heading' => 'My Notes',
  'notes' => $notes
]);
