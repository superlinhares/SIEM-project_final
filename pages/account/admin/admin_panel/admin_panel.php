<?php 

include_once('../../../../config/init.php');

if (isset($_SESSION['admin'])) {
  $smarty->display('account/admin/admin_panel/admin_panel.tpl');
}
else {
  header('Location: '. $BASE_URL);
}

?>