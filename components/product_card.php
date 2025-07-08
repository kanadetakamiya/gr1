<div class="product-card">
  <a href="product_detail.php?id=<?= $id ?>">
    <img src="assets/images/<?= $product['image'] ?>" alt="<?= $product['name'] ?>" style="width: 200px; border-radius: 10px;">
    <h3 style="height: 50px; margin-top: 10px"><?= $product['name'] ?></h3>
    <p>Giá: <?= number_format($product['price']) ?> VND</p>
    <a class="btn" href="?add=<?= $id ?>" style="margin-top: 10px">Thêm vào giỏ</a>
  </a>
</div>