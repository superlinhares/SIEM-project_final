<?php 
  include_once('../../../../config/init.php');
  include_once($BASE_DIR . '/database/user.php');

  if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $userData = getUserData($username);
    $smarty->assign('userData', $userData);
    $smarty->display('account/user/user_data/user_data.tpl');
  }
  else header('Location: '. $BASE_URL);
?>