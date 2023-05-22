<!-- ここに配列を定義 -->
<?php

$seasons=["春","夏","秋"];

?>
<!-- ここまで -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
</head>
</head>
<body>
  <div class="container">
  <?php foreach($seasons as $season){  ?>
    <div class="product-box">
      <img src="./clothes.jpg" alt="" class="image">
      <p>商品名</p>
      <span><?=$season ?>の新作</span>
    </div>
  <?php } ?>
  </div>
</body>
</html>