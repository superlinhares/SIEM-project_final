<?php 

include_once('../../../../config/init.php');
include_once($BASE_DIR . '/database/product.php');
include_once($BASE_DIR . '/database/category.php');

if (isset($_SESSION['admin'])) {
  $products = getAllProducts();
  $categories = getAllCategories();
  $smarty->assign('products', $products);
  $smarty->assign('categories', $categories);
  $smarty->display('account/admin/warehouse/warehouse.tpl');
}
else {
  header('Location: '. $BASE_URL);
}

?>