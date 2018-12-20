<?php
    function createUser($realName, $email, $userName, $dob, $password) {
      global $conn;
      $stmt = $conn->prepare('INSERT INTO users(real_name, email, username, password, dob, admin) VALUES (?, ?, ?, ?, ?, false)');
      $stmt->execute(array($realName, $email, $userName, sha1($password), $dob)); //TODO: alterar password para prevenir ataques
    }
   
    function isLoginCorrect($userName, $password) {
      global $conn;
      $stmt = $conn->prepare("SELECT *
                              FROM users
                              WHERE username = ? AND password = ?");
      $stmt->execute(array($userName, sha1($password))); // TODO: change password type see Restivo security lectures
      return $stmt->fetch() == true;
    }
    
    function isUserAdmin($userName) {
      global $conn;
      $stmt = $conn->prepare("SELECT *
                              FROM users
                              WHERE username = ?");
      $stmt->execute(array($userName));
      $row = $stmt->fetch();
      return $row['admin'];
    }   
    
    function getUserAddress($userName) {
      global $conn;
      $stmt = $conn->prepare("SELECT *
                              FROM users
                              WHERE username = ?");
      $stmt->execute(array($userName));
      $row = $stmt->fetch();
      if ($row['address'] == NULL) return 0;
      return $row['address'];
    }
?>