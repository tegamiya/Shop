<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Secondhand Book Shop</title>
<link rel="stylesheet" href="shop.css">
</head>
<body>
<div id="header">
  <br>
  <h1>Secondhand Book Shop</h1>
</div>

<table class="table_left">
  <?php $i = 0; ?>
  <?php foreach ($book as $g) { ?>
    <?php if($g['zaiko'] == 0){
      continue; //在庫ゼロなら表示しない
    } ?>
    <?php $i = $i%2 ?>
    <?php if($i == 0) : ?>
    <tr>
      <td>
        <?php echo img_tag($g['code']) ?>
      </td>
      <td>
        <p class="book"><?php echo $g['name'] ?></p>
        <p class="hoge"><?php echo nl2br($g['comment']) ?></p>
      </td>

      <td>
       <strong><?php echo $g['price'] ?> 円</strong>
        <form action="cart.php" method="post">
          <input type="hidden" name="code" value="<?php echo $g['code'] ?>">
          <input type="submit" name="submit" value="カートへ">
        </form>
      </td>
    </tr>
    <?php endif; ?>
    <?php $i++; ?>
  <?php } ?>
</table>

<table class="table_right">
  <?php $i = 0; ?>
  <?php foreach ($book as $g) { ?>
    <?php if($g['zaiko'] == 0){
      continue; //在庫ゼロなら表示しない
    } ?>
    <?php $i = $i%2 ?>
    <?php if($i == 1) : ?>
    <tr>
      <td>
        <?php echo img_tag($g['code']) ?>
      </td>
      <td>
        <p class="book"><?php echo $g['name'] ?></p>
        <p class="hoge"><?php echo nl2br($g['comment']) ?></p>
      </td>

      <td>
       <strong><?php echo $g['price'] ?> 円</strong>
        <form action="cart.php" method="post">
          <input type="hidden" name="code" value="<?php echo $g['code'] ?>">
          <input type="submit" name="submit" value="カートへ">
        </form>
      </td>
    </tr>
    <?php endif; ?>
    <?php $i++; ?>
  <?php } ?>
</table>

<div id="footer">
  <h4><a href="mail.html" target="_blank">お問い合わせ</a></h4>
</div>
</body>
</html>