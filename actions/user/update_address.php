<?php 
  include_once('../../config/init.php');
  include_once($BASE_DIR . '/database/user.php');

  if (isset($_POST['submit'])) {
  	$username = $_SESSION['username'];
  	$userAddress = $_POST['user-address'];

  	if(empty($userAddress)) {
  	  $_SESSION['error_messages'][] = 'O campo é obrigatório'; 
      die(header('Location: ' . $_SERVER['HTTP_REFERER']));
  	} else {
      try {
        updateUserAddress($username, $userAddress);
      } catch (PDOException $e) {
        $_SESSION['error_messages'] = 'Ocorreu um erro' . $e->getMessage();
        die(header('Location: ' . $_SERVER['HTTP_REFERER']));
      }       
      $_SESSION['success_messages'] = 'Morada alterada com sucesso';
      header('Location: ' . $_SERVER['HTTP_REFERER']);        
  	}
  } else header('Location: ' . $_SERVER['HTTP_REFERER']); 
 ?>