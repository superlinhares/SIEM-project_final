<?php 
  include_once('../../config/init.php');
  include_once($BASE_DIR . '/database/user.php');
  
  if (isset($_POST['submit'])) {
  	$username = $_SESSION['username'];
  	$userRealName = $_POST['user-name'];
    $userEmail = $_POST['user-email'];
    $userDob = $_POST['user-dob'];
    $userPhone = $_POST['user-phone'];

  	if(!empty($userRealName) || !empty($userEmail) || !empty($userDob) || !empty($userPhone)) {

      try {
        updateUserData($username, $userRealName,$userEmail, $userDob, $userPhone);
      } catch (PDOException $e) {            
          $_SESSION['error_messages'] = 'Ocorreu um erro: ' . $e->getMessage();
          die(header('Location: ' . $_SERVER['HTTP_REFERER']));   
      }
      
      $_SESSION['success_messages'][] = 'Campos alterados com sucesso!'; 
      header('Location: ' . $_SERVER['HTTP_REFERER']);
  	} else {
        $_SESSION['error_messages'][] = 'Deve preencher algum campo'; 
        header('Location: ' . $_SERVER['HTTP_REFERER']);        
  	}
  }
?>