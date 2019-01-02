<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR . '/database/user.php');

    // Test if all required fields are present. Redirect the user to previous page otherwise
    if (!$_POST['username'] || !$_POST['password']) {
        $_SESSION['error_messages'][] = 'Invalid login';
        $_SESSION['form_values'] = $_POST;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isLoginCorrect($username, $password)) {
      $_SESSION['username'] = $username;
      // Verify if user is an admin
      if (isUserAdmin($username))      
        $_SESSION['admin'] = true;    
      else 
        $_SESSION['admin'] = false;
      $_SESSION['success_messages'][] = 'Login successful';
    } else 
        $_SESSION['error_messages'][] = 'Login failed';
    
    if (isset($_SERVER['HTTP_REFERER'])) header('Location: ' . $_SERVER['HTTP_REFERER']); 
    else header('Location: ' . $BASE_URL);
?>