<?php 
  function insertOrder($username, $userAddress) {
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

  function insertOrderLine($orderId, $productId, $productQuantity) {
    global $conn;
    $stmt = $conn->prepare('INSERT INTO order_line
                            VALUES (?, ?, ?)');
    $stmt->execute(array($orderId, $productId, $productQuantity));
  }

  function getAllOrders() {
    global $conn;
    $stmt = $conn->prepare('SELECT * 
                            FROM orders
                            ORDER BY order_date DESC');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getUserOrders($username) {
    global $conn;
    $stmt = $conn->prepare('SELECT *
                            FROM orders
                            WHERE username = ?');
    $stmt->execute(array($username));
    return $stmt->fetchAll();
  }

  function getOrderProducts($orderId) {
    global $conn;
    $stmt = $conn->prepare('SELECT *
                            FROM order_line
                            WHERE order_id = ?
                            ORDER BY product_id ASC');
    $stmt->execute(array($orderId));
    return $stmt->fetchAll();
  }

  function deleteOrderById($orderId) {
    global $conn;
    $stmt = $conn->prepare('DELETE FROM order_line
                            WHERE order_id = ?');
    $stmt->execute(array($orderId));
    $stmt = $conn->prepare('DELETE FROM orders
                            WHERE id = ?');
    $stmt->execute(array($orderId));    
  }

  function confirmOrderById($orderId) {
    global $conn;
    $stmt = $conn->prepare("UPDATE orders
                            SET order_state = 'Confirmada'
                            WHERE id = ?");
    $stmt->execute(array($orderId));
  }
?>