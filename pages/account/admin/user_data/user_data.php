<?php 
  include_once('../../../../config/init.php');
  include_once($BASE_DIR . '/database/user.php');

  if (isset($_SESSION['admin'])) {
    $users = getAllUsers();
    $smarty->assign('users', $users);
    $smarty->display('account/admin/user_data/user_data.tpl');
  }
  else header('Location: '. $BASE_URL);
?>