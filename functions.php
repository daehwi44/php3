<?php

function connect_to_db()
{
  $dbn = 'mysql:dbname=gsacy_d02_01;charset=utf8mb4;port=3306;host=localhost';
  $user = 'root';
  $pwd = '';
  try {
    return new PDO($dbn, $user, $pwd);                      //returnに変える
  } catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
  }
}
