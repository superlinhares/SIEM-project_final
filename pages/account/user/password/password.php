<?php 
  include_once('../../../../config/init.php');
  include_once($BASE_DIR . '/database/user.php');
  //TODO: Fazer css
  if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $password = getUserPassword($username);
    $smarty->assign('password', $password);
    $smarty->display('account/user/password/password.tpl');
  } else header('Location: '. $BASE_URL);
  
?>