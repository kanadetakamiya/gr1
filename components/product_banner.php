  <div class="product-banner">
    <a href="product_detail.php?id=<?= $id ?>" style="width: 100px">
      <img src="assets/images/<?= $product['image'] ?>" alt="<?= $product['name'] ?>" style="width: 100px">
    </a>
    <a href="product_detail.php?id=<?= $id ?>">
      <div style=" margin-left: 30px">
        <h3><?= $product['name'] ?></h3>
        <p style="margin-top: 5px"><?= number_format($product['price']) ?> VND</p>
        <a class="btn" href="?add=<?= $id ?>" style="margin-top: 10px">Thêm vào giỏ</a>
      </div>
    </a>
  </div>