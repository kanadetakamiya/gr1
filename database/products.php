<?php

include 'database/connect.php';

$query = "SELECT * FROM products";
$result = $conn->query($query);

$products = [];
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $products[$row['id']] = $row;
  }
}

$conn->close();
