<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../css/display.css">
  <title>確認フォーム</title>
</head>
<body>
  <div>
    <h1>欠席者等の確認</h1>
    <form action="display.php" method="post">
      <div>
        <label for="date">日付選択：</label>
        <input type="date" id="date" name="date" value="<?php echo date('Y-m-d'); ?>">
      </div>
      <div>
        <button type="submit">確認</button>
      </div>
      <p>いない場合は選んでも表示されません。</p>
    </form>
    <?php
      try {
        $db = new PDO('mysql:dbname=mngdb;host=localhost;port=8889;charset=utf8', 'root', 'root');

        $YMD = $_POST['date'];
        $display = $db->query("SELECT nickname, which, reasons FROM mng_table WHERE YMD='$YMD'");
      } catch (PDOException $e) {
        echo 'DB接続エラー' . $e->getMessage();
      }
    ?>
    <p>
      <?php
        foreach ($display as $row) {
          echo $row['nickname'] . "<br>☞(" . $row['which'] . '：' . $row['reasons'] . ')';
          echo '<br>';
        }
      ?>
    </p>
    ☞<a href="form.php">Back</a>
  </div>
</body>
</html>