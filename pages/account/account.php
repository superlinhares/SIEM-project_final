<?php 
  include_once('../../config/init.php');

  if (isset($_SESSION['username'])) {
    $smarty->display('account/account.tpl');
  }
  else {
    header('Location: '. $BASE_URL);
  }
?>