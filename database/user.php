<?php
    function createUser($realName, $email, $username, $dob, $password) {
      global $conn;
      $stmt = $conn->prepare('INSERT INTO user(real_name, email, username, password, dob, admin) VALUES (?, ?, ?, ?, ?, false)');
      $stmt->execute(array($realName, $email, $username, sha1($password), $dob)); //TODO: alterar password para prevenir ataques
    }
   
    function isLoginCorrect($username, $password) {
      global $conn;
      $stmt = $conn->prepare("SELECT *
                              FROM user
                              WHERE username = ? AND password = ?");
      $stmt->execute(array($username, sha1($password))); // TODO: change password type see Restivo security lectures
      return $stmt->fetch() == true;
    }
    
    function isUserAdmin($username) {
      global $conn;
      $stmt = $conn->prepare("SELECT *
                              FROM user
                              WHERE username = ?");
      $stmt->execute(array($username));
      $row = $stmt->fetch();
      return $row['admin'];
    }   
    
    function getUserAddress($username) {
      global $conn;
      $stmt = $conn->prepare("SELECT *
                              FROM user
                              WHERE username = ?");
      $stmt->execute(array($username));
      $row = $stmt->fetch();
      if ($row['address'] == NULL) return 0;
      return $row['address'];
    }
?>