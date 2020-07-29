<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>演習課題</title>

  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <h1 class="title">お問い合わせ内容確認</h1>
  <div class="contact layout">
    <div>
      <p class="text">名前：<?php echo $_POST['name']; ?></p>
      <p class="text">メールアドレス：<?php echo $_POST['mail']; ?></p>
      <p class="text">年齢：<?php echo $_POST['age']; ?></p>
      <p class="text">コメント：<?php echo $_POST['comments']; ?></p>
    </div>

    <div class="comfirmed">
      <form action="index.html">
        <input id="clk" class="btn gray mod" type="submit" value="戻って修正する">
      </form>
      
      <form action="insert.php" method="POST">
        <input id="clk" class="btn orange" type="submit" value="登録する">
        <!-- value部分に設定された値が送信 -->
        <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
        <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
        <input type="hidden" value="<?php echo $_POST['age']; ?>" name="age">
        <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
      </form>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>