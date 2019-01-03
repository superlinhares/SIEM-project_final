<?php 
  function getAllCategories() {
    global $conn;
    $stmt = $conn->prepare('SELECT *
                            FROM category');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getCategoryById($categoryId) {
    global $conn;
    $stmt = $conn->prepare('SELECT *
                            FROM category
                            WHERE id = ?');
    $stmt->execute(array($categoryId));
    return $stmt->fetch();
  }
?>