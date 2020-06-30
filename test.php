<!--
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
</head>
<body>

  <h1>
    <?php
      // 'Hello, world!'をechoしてください
      echo 'Hello, world!';
    ?>
  </h1>
  
  <br>

  <h1>
    <?php
      // 7 * 2をechoしてください
      echo 7*2;
    ?>
  </h1>

  <br>

  <h1>
    <?php
      // 8 % 3をechoしてください
      echo 8%3;
    ?>
  </h1>

</body>
</html>
-->

<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>HTML内でのPHP処理</title>
</head>
<body>
<h1><?php echo 'タイトルです'; ?></h1>
<?php
$text = "HTML内でのPHPスクリプト実行処理";
echo "<p> $text </p>";
?>
</body>
</html>
