<?php 
include_once ('../../config/init.php');
include_once ($BASE_DIR . '/database/products.php');

// Redirect to home page and display error message
if (!$_GET['productID']) {
    $_SESSION['error_messages'][] = 'Undefined product';
    header("Location: $BASE_URL");
    exit;
}    

$product = $_GET['productId'];
$products = getProduct($product);

$smarty->assign('products', $products);
$smarty->display('products/list.tpl');

?>