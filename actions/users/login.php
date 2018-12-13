<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR . '/database/users.php');

    // Test if all required fields are present. Redirect the user to previous page otherwise
    if (!$_POST['username'] || !$_POST['password']) {
        $_SESSION['error_messages'][] = 'Invalid login';
        $_SESSION['form_values'] = $_POST;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    // TODO: change later to successful messages
    if (isLoginCorrect($username, $password)) {
        $_SESSION['username'] = $username;
        // Verify if user is an admin
        if (isUserAdmin($username)){
            $_SESSION['admin'] = true;    
        }
        else {
            $_SESSION['admin'] = false;
        }        
        $_SESSION['success_messages'][] = 'Login successful';
    } else {
        $_SESSION['error_messages'][] = 'Login failed';
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);    
    
?>