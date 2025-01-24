<?php

use Core\App;
use Core\Session;

$db = App::container()->resolve(Core\Database::class);
$note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->findOrFail();
if (! $note) {
  abort();
}

authorize($note['user_id'] === Session::get('user')['id']);


$db->query("delete from notes where id = :id", ['id' => $_POST['id']]);
redirect('/notes');
