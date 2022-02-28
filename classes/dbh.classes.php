<?php

class Dbh {
  protected function connect() {
    try {
      $username = "root";
      $password = "";
      $dsn = "mysql:host=localhost; dbname=ooplogin";
      $dbh = new PDO($dsn, $username, $password);
      return $dbh;
    } catch (PDOException $e) {
      die("Connection database failed: {$e->message}<br>");
    }
  }
}