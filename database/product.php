<?php
    /**
     * This page is responsible for all
     * queries related to 
     */

  function addProduct($productName, $productCategoryId, $productDescription, $productPrice, $productStock) {
    global $conn; 
    $query = 'INSERT INTO product (id, name, description, price, cat_id, stock)
              VALUES (DEFAULT, :name, :description, :price, :cat_id, :stock)';    								
    $stmt = $conn->prepare($query);						
    $stmt->execute( array(':name'=>$productName, ':description'=>$productDescription, ':price'=>$productPrice, ':cat_id'=>$productCategoryId, ':stock'=>$productStock) );    
  }
  
  function deleteProduct($productId) {
    global $conn;
    $stmt = $conn->prepare('DELETE FROM product
                            WHERE id = ?');
    $stmt->execute(array($productId));
  }

  function getAllProducts() {
    global $conn;
    $stmt = $conn->prepare('SELECT *
                            FROM product
                            ORDER BY id ASC');
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

  function getProductsByCategory($categoryId, $page) {
    global $conn;
    $stmt = $conn->prepare('SELECT *
                            FROM product
                            WHERE cat_id = ?
                            ORDER BY id DESC
                            LIMIT 8 OFFSET ?');
    $stmt->execute(array($categoryId, ($page-1)*8)); 
    return $stmt->fetchALL();                          
  }

  function getProductsBySearch($categoryId, $name, $min, $max) {
    global $conn;

    $query = 'SELECT * FROM product WHERE cat_id = ?';
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