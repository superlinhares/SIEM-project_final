<?php

    function createUser($realname, $username, $password){
        global $conn;
        $stmt = $conn->prepare("INSERT INTO users VALUES (?, ?, ?)");
        $stmt->execute(array($realname, $username, sha1($password))); //TODO: alterar password para prevenir ataques
    }

    function isLoginCorrect($username, $password){
        global $conn;
        $stmt = $conn->prepare("SELECT *
                                FROM users
                                WHERE username = ? AND password = ?");
        $stmt->execute(array($username, sha1($password))); // TODO: change password type see Restivo security lectures
        return $stmt->fetch() == true;
    }

?>