<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>カート | Noodle Shop</title>
<link rel="stylesheet" href="shop.css">
</head>
<body>
<div class="base">
  <h1>カート</h1>
</div>
<table>
  <tr><th>商品名</th><th id="tyousei">単価</th><th id="tyousei2">数量</th><th id="tyousei3">小計</th></tr>
  <?php foreach($rows as $r) { ?>
    <tr>
      <td><?php echo $r['name'] ?></td>
      <td><?php echo $r['price'] ?></td>
      <td><?php echo 1 ?></td>
      <td><?php echo $r['price'] ?> 円</td>
    </tr>
  <?php } ?>
  <tr><td colspan='2'> </td><td><strong>合計</strong></td><td><?php echo $sum ?> 円</td></tr>
</table>
<div class="base">
  <a href="index.php">お買い物に戻る</a>　
  <a href="cart_empty.php">カートを空にする</a>　
  <a href="buy.php">購入する</a>
</div>
</body>
</html>