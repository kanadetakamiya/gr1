<style>
  body,
  h1,
  h2,
  h3,
  p,
  ul,
  li,
  a {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  a {
    text-decoration: none;
    color: #333;
    font-weight: 500;
  }

  a:hover {
    color: #2563eb;
  }

  body {
    font-family: Arial, sans-serif;
  }

  .main-header {
    background-color: white;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    padding: 12px 20px;
  }

  .header-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 1rem;
  }

  .header-left {
    display: flex;
    align-items: center;
  }

  .logo {
    font-size: 24px;
    font-weight: bold;
    color: #2563eb;
    margin-right: 30px;
    margin-left: 10px;
  }

  .nav-menu a {
    margin-right: 20px;
    font-size: 16px;
  }

  .header-right {
    position: relative;
  }

  .cart-icon {
    position: relative;
    width: 24px;
    height: 24px;
    cursor: pointer;
  }

  .cart-icon img {
    width: 100%;
    height: auto;
  }

  .cart-count {
    position: absolute;
    top: -8px;
    right: -10px;
    background-color: red;
    color: white;
    font-size: 12px;
    width: 18px;
    height: 18px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
  }
</style>

<div class="header-container">
  <div class="header-left">
    <a class="logo" href="index.php">ShopOnline
    </a>
    <nav class="nav-menu">
      <a href="index.php">Trang chủ</a>
      <a href="product_list.php">Danh mục hàng</a>
    </nav>
  </div>
  <div class="header-right">
    <div class="cart-icon">
      <a href="cart.php">
        <img src="https://cdn-icons-png.flaticon.com/512/1170/1170678.png" alt="Giỏ hàng">
        <span class="cart-count" id="cart-count"><?php echo array_sum($_SESSION['cart'] ?? []); ?></span>
      </a>
    </div>
  </div>
</div>