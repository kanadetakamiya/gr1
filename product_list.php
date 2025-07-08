<?php
session_start();
include 'database/products.php';
include 'functions/item_adjust.php';

if (isset($_GET['category'])) {
  $category = $_GET['category'];
  if ($category === 'all') {
    $products = $products;
  } elseif ($category === '20tr') {
    $products = array_filter($products, function ($product) {
      return $product['price'] >= 10000000 && $product['price'] < 20000000;
    });
  } elseif ($category === '30tr') {
    $products = array_filter($products, function ($product) {
      return $product['price'] >= 20000000;
    });
  }
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <title>Danh mục sản phẩm</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <?php include_once 'components/header.php'; ?>
  <div style="display: flex">
    <div class="product-card" style="margin-left: 70px; margin-top:150px; margin-right: 50px; min-width: 20%; line-height: 1.8; height: 200px; text-align: left; padding-left: 50px;">
      <h1>Bộ lọc</h1>
      <form action="product_list.php" method="get">
        <input type="radio" id="all" name="category" value="all">
        <label for="all">Tất cả</label><br>
        <input type="radio" id="20tr" name="category" value="20tr">
        <label for="phone">10.000.000 - 20.000.000VND</label><br>
        <input type="radio" id="30tr" name="category" value="30tr">
        <label for="tablet">Trên 20.000.000VND</label><br>
        <input class="btn" type="submit" value="Lọc">
      </form>
    </div>
    <div>
      <h1 style="margin-left: 20px; margin-top:30px">Danh sách sản phẩm</h1>
      <?php foreach ($products as $id => $product): ?>
        <?php include 'components/product_banner.php'; ?>
      <?php endforeach; ?>
    </div>
  </div>
</body>

</html>