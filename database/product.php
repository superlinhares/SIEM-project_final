<?php
    /**
     * This page is responsible for all
     * queries related to 
     */
    
  function getAllProducts() {
    global $conn;
    $stmt = $conn->prepare('SELECT *
                            FROM product');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getProductById($productId) {
    global $conn;
    $stmt = $conn->prepare('SELECT *
                            FROM product
                            WHERE id = ?');
    $stmt->execute(array($productId));
    return $stmt->fetch();
  }

  function getProductsByCategory($categoryId) {
    global $conn;
    $stmt = $conn->prepare('SELECT *
                            FROM product
                            WHERE cat_id = ?
                            ORDER BY id DESC');
    $stmt->execute(array($categoryId)); 
    return $stmt->fetchALL();                          
  }

  function getProductBySearch($categoryId, $name, $min, $max) {
    global $conn;

    $query = 'SELECT * FROM product where cat_id = ?';
    $params = array($categoryId);

    if ($name !== '') {
      $query .= ' AND name ILIKE ?';
      $params[] = '%' . $name . '%';
    }

    if ($min !== '') {
      $query .= ' AND price >= ?';
      $params[] = $min;
    }

    if ($max !== '') {
      $query .= ' AND price <= ?';
      $params[] = $max;
    }

    $stmt = $conn->prepare($query);
    $stmt->execute($params);
    return $stmt->fetchAll();
  }
  
  function createComment($productId, $username, $comment) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO comment
                            VALUES (DEFAULT, CURRENT_TIMESTAMP, ?, ?, ?)");
    $stmt->execute(array($productId, $username, $comment));
  }
?>