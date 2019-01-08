<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR . '/database/user.php');  

  if (!$_POST['username'] || !$_POST['realname'] || !$_POST['password']) {
    $_SESSION['error_messages'][] = 'All fields are mandatory'; //FIXME: acrescentar mais verificações
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL");
    exit;
  }

  $realName = strip_tags($_POST['realname']);
  $email = strip_tags($_POST['email']);
  $username = strip_tags($_POST['username']);
  $dob = $_POST['dob'];
  $password = $_POST['password'];
  
  // Catch any errors thrown by database and do something about it
  try {
    createUser($realName, $email, $username, $dob, $password);    
  } catch (PDOException $e) {
    if (strpos($e->getMessage(), 'user_pkey') !== false) 
      $_SESSION['error_messages'] = 'Duplicate username';    
    else die($e->getMessage()); 
    $_SESSION['error_messages'] = 'Error creating user: ' . $e->getMessage();
    
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL");
    exit;
  }
  $_SESSION['success_messages'][] = 'User registered successfully';
  header("Location: $BASE_URL");
  exit;
?>
 