<?php 

  function createOrder($userName, $userAddress) {
    global $conn;
    // Order initial state
    $orderState = 'Em processamento';
    $stmt = $conn->prepare('INSERT INTO orders
                            VALUES (DEFAULT, time(), ?, ?, ?)');
    $stmt->execute(array($userName, $userAddress, $orderState));
  }

  function insertProductIntoOrder($orderID, $productId, $productQuantity) {
    global $conn;
    $stmt = $conn->prepare('INSERT INTO order_products
                            VALUES (? ? ?)');
    $stmt->execute(array($orderID, $productId, $productQuantity));
  }
?>