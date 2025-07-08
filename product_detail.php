<?php

session_start();
$id = (int)$_GET['id'];
include 'database/products.php';
$product = $products[$id];
include 'functions/item_adjust.php';
?>

<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <title><?= $product['name'] ?></title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <?php include_once 'components/header.php'; ?>

  <main style="margin-top: 100px; margin-left: 100px">
    <h1 style="margin-bottom:30px">Thông tin sản phẩm</h1>
    <div class="product-detail" style="display: flex;">
      <div class="product-image">
        <img src="assets/images/<?= $product['image'] ?>" alt="<?= $product['name'] ?>" style="width: 400px">
      </div>
      <div class="product-info" style="align-self: center; margin-left: 50px; width: 40%; line-height: 1.8 ">
        <h1><?= $product['name'] ?></h1>
        <p>Giá: <?= number_format($product['price']) ?> VND</p>
        <p><?= $product['detail_desc'] ?></p>
        <a class="btn" href="?add=<?= $id ?>">Thêm vào giỏ</a>
      </div>
    </div>
  </main>
</body>

</html>