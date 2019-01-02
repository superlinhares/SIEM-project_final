<?php
    /**
     * This page is responsible for all
     * queries related to 
     */
    
    function getAllProducts(){
        global $conn;
        $stmt = $conn->prepare('SELECT *
                                FROM product');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getProduct($productId){
        global $conn;
        $stmt = $conn->prepare('SELECT *
                                FROM product
                                WHERE id = ?');
        $stmt->execute(array($productId));
        return $stmt->fetchAll();
    }
    
    function createComment($productId, $username, $comment){
        global $conn;
        $stmt = $conn->prepare("INSERT INTO comment
                                VALUES (DEFAULT, CURRENT_TIMESTAMP, ?, ?, ?)");
        $stmt->execute(array($productId, $username, $comment));
    }
?>