<?php 
  include_once('../../../config/init.php');
  include_once('../../../database/user.php');
  
  if (isset($_SESSION['admin'])) {
    if (isset($_GET['delete'])) {    
      $userId = $_GET['id'];
      try {
        deleteUserById($userId);
      } catch (PDOException $e) {
          $_SESSION['error_messages'][] = 'Ocorreu um erro a eleminar o urilizador: ' . $e->getMessage();
          die(header('Location: ' . $_SERVER['HTTP_REFERER']));
        }
      $_SESSION['success_messages'] = 'Utilizador eliminado com sucesso';    
      die(header('Location: ' . $_SERVER['HTTP_REFERER']));    
    } else header('Location: ' . $_SERVER['HTTP_REFERER']); 
  } else header('Location: ' . $BASE_URL); 
?>