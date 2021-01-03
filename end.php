<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/end.css">
  <title>最終ページ</title>
</head>
<body>
  <?php
    try {
      $db = new PDO('mysql:dbname=mngdb;host=localhost;port=8889;charset=utf8', 'root', 'root');
      
      function escape($str) {
        return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
      }
      $YMD = $_POST['date'];
      $nickname = escape($_POST['name']);
      $which = $_POST['which'];
      $reasons = escape($_POST['reasons']);
      
      $db->exec("INSERT INTO mng_table(YMD, nickname, which, reasons) VALUES('$YMD', '$nickname', '$which', '$reasons')");
  ?>
  <div>
    <p><?php echo 'Completed registration.<br>Thank you.'; ?></p>
    ☞<a href="form.php">Back</a>
  </div>
  <?php
    } catch (PDOException $e) {
  ?>
  <div>
    <p><?php echo 'DB接続エラー' . $e->getMessage(); ?></p>
  </div>
  <?php
    }
  ?>
</body>
</html>