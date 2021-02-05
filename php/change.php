<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../css/display.css">
  <title>変更用フォーム</title>
</head>
<body>
  <div>
    <form action="changed.php" method="post">
      <div>
        <label for="name">部名：</label>
        <input type="text" id="name" name="name" placeholder="※全角で(めいは平仮名で)" required>
      </div>
      <div>
        <label for="date">変更日：</label>
        <input type="date" id="date" name="date" value="<?php echo date('Y-m-d'); ?>">
      </div>
      <div>
        <button type="submit">この日の予定を削除</button>
      </div>
    </form>
  </div>
</body>
</html>