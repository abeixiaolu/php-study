<?php

use Core\App;
use Core\Session;

$db = App::container()->resolve(Core\Database::class);
$userId = Session::get('user')['id'];
$notes = $db->query("select * from notes where user_id = :id", ['id' => $userId])->get();
view('note/index.view.php', [
  'heading' => 'My Notes',
  'notes' => $notes
]);
