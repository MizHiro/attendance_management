<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/changed.css">
  <title>最終ページ2</title>
</head>
<body>
  <?php
    try {
      $db = new PDO('mysql:dbname=mngdb;host=localhost;port=8889;charset=utf8', 'root', 'root');

      $nickname = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8'); 
      $YMD = $_POST['date'];
      
      $stmt = $db->exec("DELETE FROM mng_table WHERE YMD='$YMD' AND nickname='$nickname'");

      if ($stmt) {
        echo '<p>Changed！<br>Thank you.</p>';
        echo '☞<a href="form.php">Back</a>';
      } else {
        echo '<p>Error：404 Not Found</p>';
      }
      
    } catch (PDOException $e) {
      echo 'DB接続エラー' . $e->getMessage();
    }
  ?>
</body>
</html>