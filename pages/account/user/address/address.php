<?php 
  include_once('../../../../config/init.php');
  include_once($BASE_DIR . '/database/user.php');
  //TODO: falta css
  if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $address = getUserAddress($username);
    $smarty->assign('address', $address);
    $smarty->display('account/user/address/address.tpl');
  } else header('Location: '. $BASE_URL);
?>