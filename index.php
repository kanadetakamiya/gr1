<?php
session_start();
include 'database/products.php';
include 'functions/item_adjust.php';
?>

<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <title>Laptopshop</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <?php include_once 'components/header.php'; ?>
  <h1 style="margin-left: 200px; margin-top:30px; margin-bottom: 30px">Dành cho bạn</h1>
  <div class="product-list">
    <?php for ($id = 1; $id <= 4; $id++): ?>
      <?php $product = $products[$id]; ?>
      <?php include 'components/product_card.php'; ?>
    <?php endfor; ?>
  </div>
  <h1 style="margin-left: 200px; margin-top:100px; margin-bottom: 30px">Top bán chạy</h1>
  <div class="product-list">
    <?php for ($id = 6; $id <= 9; $id++): ?>
      <?php $product = $products[$id]; ?>
      <?php include 'components/product_card.php'; ?>
    <?php endfor; ?>
  </div>
</body>

</html>