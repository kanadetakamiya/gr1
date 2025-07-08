<?php
session_start();
include 'database/products.php';
$cart = $_SESSION['cart'] ?? [];
$total = 0;
include 'functions/item_adjust.php';
?>

<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <title>Giỏ hàng</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <?php include_once 'components/header.php'; ?>

  <main>
    <h1 style="margin-left: 200px; margin-top:30px; margin-bottom: 30px">Giỏ hàng</h1>
    <?php if (empty($cart)): ?>
      <div style="margin-top: 100px; text-align: center">
        <h2>Giỏ hàng của bạn đang trống.</h2>
      </div>
    <?php else: ?>
      <?php foreach ($cart as $id => $qty):
        $product = $products[$id];
        $subtotal = $product['price'] * $qty;
        $total += $subtotal;
      ?>
        <?php include 'components/cart_banner.php'; ?>
      <?php endforeach; ?>
      <div style="width: 80%; margin-top: 30px; display: flex; justify-content: flex-end">
        <h2>Tổng cộng:
          <?= number_format($total) ?> VND</h2>
      </div>
    <?php endif; ?>
  </main>
</body>

</html>