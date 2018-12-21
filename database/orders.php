<?php 

  function createOrder($username, $userAddress) {
    global $conn;
    // Order initial state
    $orderState = 'Em processamento';
    date_default_timezone_set('UTC');
    $now = date("d-m-Y H:i:s");
    $stmt = $conn->prepare('INSERT INTO orders
                            VALUES (DEFAULT, ?, ?, ?, ?)');
    $stmt->execute(array($now, $username, $userAddress, $orderState));
    return $conn->lastInsertId();
  }

  function insertProductIntoOrder($orderId, $productId, $productQuantity) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO order_products
                            VALUES (?, ?, ?)");
    $stmt->execute(array($orderId, $productId, $productQuantity));
  }
?>