<?php

mb_internal_encoding("utf8");

// データベースに接続
$pdo = new PDO("mysql:dbname=lesson1;port=3306;host=localhost;", "root", "");

// execメソッドで追加
$pdo->exec("insert into contactform (name, mail, age, comments) values ('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>演習課題</title>

  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <h1 class="title">送信完了</h1>
  <div class="layout">
    <p class="msg">お問い合わせありがとうございました。<br>3営業日以内に担当者よりご連絡差し上げます。</p>
  </div>

  <script src="script.js"></script>
</body>
</html>