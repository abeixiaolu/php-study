<?php

class Database
{
  public $connection;

  public function __construct()
  {
    $dsn = "mysql:host=localhost;dbname=myapp;user=root;charset=utf8mb4";

    $this->connection = new PDO($dsn);
  }

  public function query($query)
  {
    $statement = $this->connection->prepare($query);
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }
}
