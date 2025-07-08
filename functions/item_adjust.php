<?php

$filename = basename($_SERVER['HTTP_REFERER']);
if (isset($_GET['add'])) {
  $id = (int)$_GET['add'];
  if (isset($products[$id])) {
    $_SESSION['cart'][$id] = ($_SESSION['cart'][$id] ?? 0) + 1;
  }
  header("Location: $filename");
  exit;
}

if (isset($_GET['remove'])) {
  $id = (int)$_GET['remove'];
  if (isset($_SESSION['cart'][$id])) {
    if ($_SESSION['cart'][$id] > 1) {
      $_SESSION['cart'][$id] -= 1;
    } else {
      unset($_SESSION['cart'][$id]);
    }
  }
  header("Location: $filename");
  exit;
}
