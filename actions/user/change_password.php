<?php 
  include_once('../../config/init.php');
  include_once($BASE_DIR . '/database/user.php');

  if (isset($_POST['submit'])) {

  	$username = $_SESSION['username'];
  	$userPassword = $_POST['user-password'];
    $userNewPassword = $_POST['user-new-password'];
    $userNewPassword2 = $_POST['user-new-password-confirm'];

  	if(empty($userPassword) || empty($userNewPassword) || empty($userNewPassword2)) {
  	  $_SESSION['error_messages'][] = 'Os campos são obrigatórios'; 
      die(header('Location: ' . $_SERVER['HTTP_REFERER']));
  	} else {
      if(!isLoginCorrect($username, $userPassword)) {
        $_SESSION['error_messages'][] = 'Password atual errada'; 
        die(header('Location: ' . $_SERVER['HTTP_REFERER']));
      } else {
        if($userNewPassword !== $userNewPassword2) {
          $_SESSION['error_messages'][] = 'As password inseridas não correspondem'; 
          die(header('Location: ' . $_SERVER['HTTP_REFERER']));
        } else {
          try {
            changeUserPassword($username, $userNewPassword);
          } catch (PDOException $e) {
            $_SESSION['error_messages'] = 'Ocorreu um erro: ' . $e->getMessage();
            die(header('Location: ' . $_SERVER['HTTP_REFERER']));   
          }
          $_SESSION['success_messages'] = 'Password alterada com sucesso';
          header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
      }
  	}
  } else header('Location: ' . $_SERVER['HTTP_REFERER']);
?>