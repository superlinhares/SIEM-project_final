<?php
    /**
     * This page is responsible for all
     * queries related to products
     */
    
    function getAllProducts(){
        global $conn;
        $stmt = $conn->prepare('SELECT *
                                FROM products');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getProduct($productID){
        global $conn;
        $stmt = $conn->prepare('SELECT *
                                FROM products 
                                WHERE id = ?');
        $stmt->execute(array($productID));
        return $stmt->fetchAll();
    }

    function gerProductId($productName) {
      global $conn;
      $stmt = $conn->prepare('SELECT id
                              FROM products
                              WHERE name = ?');
      $stmt->execute(array($productName));
      return $stmt->fetch();                              
    }

    function createComment($productID, $username, $comment){
        global $conn;
        $stmt = $conn->prepare("INSERT INTO comments
                                VALUES (DEFAULT, CURRENT_TIMESTAMP, ?, ?, ?)");
        $stmt->execute(array($productID, $username, $comment));
    }
?>