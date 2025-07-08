<div class="cart-banner">
  <a href="product_detail.php?id=<?= $id ?>" style="width: 100px">
    <img src="assets/images/<?= $product['image'] ?>" alt="<?= $product['name'] ?>" style="width: 100px">
  </a>
  <a href="product_detail.php?id=<?= $id ?>">
    <h3><?= $product['name'] ?></h3>
  </a>
  <p style="margin-top: 5px"><?= number_format($product['price']) ?> VND</p>
  <div style="display: flex; justify-content: space-between; width: 200px; align-items: center">
    <a class="btn" href="?remove=<?= $id ?>">-</a>
    <span><?= $_SESSION['cart'][$id] ?? 0 ?></span>
    <a class="btn" href="?add=<?= $id ?>">+</a>
  </div>
</div>