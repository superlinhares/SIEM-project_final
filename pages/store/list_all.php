<?php

include_once ('../../config/init.php');
include_once ($BASE_DIR . '/database/product.php');

$products = getAllProducts();
$smarty->assign('products', $products);
$smarty->display('product/list.tpl');

?>


