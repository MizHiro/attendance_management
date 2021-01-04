<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="../css/form.css">
  <title>入力フォーム</title>
</head>
<body>
  <form action="end.php" method="post">
    <div>
      <label for="date">日付：</label>
      <input type="date" id="date" name="date" value="<?php echo date('Y-m-d'); ?>">
    </div>
    <div>
      <label for="name">部名：</label>
      <input type="text" id="name" name="name" placeholder="※全角で(めいは平仮名で)" required>
    </div>
    <div>
      <label for="absence">
        <input type="radio" id="absence" name="which" value="欠席" required>欠席
      </label>
      <label for="late">
        <input type="radio" id="late" name="which" value="遅刻">遅刻
      </label>
      <label for="L-early">
        <input type="radio" id="L-early" name="which" value="早退">早退
      </label>
    </div>
    <div>
      <textarea name="reasons" placeholder="欠席 / 遅刻 / 早退 理由" required></textarea>
    </div>
    <div class="send">
      <button type="submit">送信</button>
    </div>
    <div>
      <a href="display.php">確認画面はコチラ</a>
    </div>
    <div>
      <a href="change.php">予定の削除はコチラ</a>
    </div>
  </form>
</body>
</html>