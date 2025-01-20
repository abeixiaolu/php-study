<?php

require "functions.php";

// require "router.php";

// Connect to the database dsn: data source name
$dsn = "mysql:host=localhost;dbname=myapp;user=root;charset=utf8mb4";
$pdo = new PDO($dsn);
$statement = $pdo->prepare("SELECT * from posts;");
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

dd($posts);
