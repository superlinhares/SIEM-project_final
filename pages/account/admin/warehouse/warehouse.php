<?php 

include_once('../../../../config/init.php');
include_once ($BASE_DIR . '/database/products.php');

if (isset($_SESSION['admin'])) {
  $products = getAllProducts();
  $smarty->assign('products', $products);
  $smarty->display('account/admin/warehouse/warehouse.tpl');
}
else {
  header('Location: '. $BASE_URL);
}

?>