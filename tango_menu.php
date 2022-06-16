<?php
session_start();
include("functions.php");
check_session_id();
?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <title>Document</title>
</head>

<body>

  <h1>単語学習ツール</h1>

  <div class="menu">
    <a href="tango_study.php">フラッシュカード</a>
    <a href="">クイズ</a>

    <a href="tango_input.php">単語新規登録</a>
    <a href="tango_read.php">登録単語一覧</a>
  </div>
  <a href="tango_logout.php">logout</a>
</body>

</html>