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

  function createCategory($categoryName) {
    global $conn;
    $stmt = $conn->prepare('INSERT INTO category
                            VALUES (DEFAULT, ?)');
    $stmt->execute(array($categoryName));
  }

  function getCategoryIdOrCreate($categoryName){
    global $conn;
    $categories = getAllCategories();
    foreach ($categories as $category) {
      if ($category['name'] === $categoryName) return $category['id'];
    }
    createCategory($categoryName);
    return $conn->lastInsertId();
  }
?>