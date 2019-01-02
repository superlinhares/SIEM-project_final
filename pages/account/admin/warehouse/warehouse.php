<?php 

include_once('../../../../config/init.php');
include_once ($BASE_DIR . '/database/.php');

if (isset($_SESSION['admin'])) {
  $ = getAllProducts();
  $smarty->assign('', $);
  $smarty->display('account/admin/warehouse/warehouse.tpl');
}
else {
  header('Location: '. $BASE_URL);
}

?>