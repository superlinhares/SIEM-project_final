<?php
    function createUser($realName, $email, $username, $dob, $password) {
      global $conn;
      $stmt = $conn->prepare('INSERT INTO users (real_name, email, username, password, dob, admin) 
                              VALUES (?, ?, ?, ?, ?, false)');
      $stmt->execute(array($realName, $email, $username, sha1($password), $dob)); //TODO: alterar password para prevenir ataques
    }
   
    function isLoginCorrect($username, $password) {
      global $conn;
      $stmt = $conn->prepare("SELECT *
                              FROM users
                              WHERE username = ? AND password = ?");
      $stmt->execute(array($username, sha1($password))); // TODO: change password type see Restivo security lectures
      return $stmt->fetch() == true;
    }
    
    function isUserAdmin($username) {
      global $conn;
      $stmt = $conn->prepare("SELECT *
                              FROM users
                              WHERE username = ?");
      $stmt->execute(array($username));
      $row = $stmt->fetch();
      return $row['admin'];
    }
    
    function getAllUsers() {
      global $conn;
      $stmt = $conn->prepare('SELECT *
                              FROM users
                              ORDER BY id ASC');
      $stmt->execute();
      return $stmt->fetchAll();
    }
    
    function getUserAddress($username) {
      global $conn;
      $stmt = $conn->prepare("SELECT *
                              FROM users
                              WHERE username = ?");
      $stmt->execute(array($username));
      $row = $stmt->fetch();
      if ($row['address'] == NULL) return NULL;
      return $row['address'];
    }

    function getUserPassword($username) {
      global $conn;
      $stmt = $conn->prepare("SELECT password
                              FROM users
                              WHERE username = ?");
      $stmt->execute(array($username));
      $row = $stmt->fetch();
      return $row['password'];
    }

    function getUserData($username) {
      global $conn;
      $stmt = $conn->prepare("SELECT *
                              FROM users
                              WHERE username = ?");
      $stmt->execute(array($username));
      return $stmt->fetch();
    }

    function updateUserData($username, $userRealName,$userEmail, $userDob, $userPhone) {
      global $conn;

      $query = 'UPDATE users SET username = ?';
      $params = array($username);

      if ($userRealName !== '') {
        $query .= ', real_name = ?';
        $params[] = $userRealName;
      }

      if ($userEmail !== '') {
        $query .= ', email = ?';
        $params[] = $userEmail;
      }

      if ($userDob !== '') {
        $query .= ', dob = ?';
        $params[] = $userDob;
      }

      if ($userPhone !== '') {
        $query .= ', tel = ?';
        $params[] = $userPhone;
      }

      $query .= ' WHERE username = ?';
      $params[] = $username;

      $stmt = $conn->prepare($query);
      $stmt->execute($params);
    }

    function updateUserAddress($username, $userAddress) {
      global $conn;
      $stmt = $conn->prepare('UPDATE users
                              SET address = ?
                              WHERE username = ?');
      $stmt->execute(array($userAddress, $username));
    }

    function changeUserPassword($username, $newPassword) {
      global $conn;
      $stmt = $conn->prepare('UPDATE users
                              SET password = ?
                              WHERE username = ?');
      $stmt->execute(array(sha1($newPassword), $username));
    }

    function deleteUserById($userId) {
      global $conn;
      $stmt = $conn->prepare('DELETE FROM users
                              WHERE id = ?');
      $stmt->execute(array($userId));
    }
?>