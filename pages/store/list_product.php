<?php 
include_once ('../../config/init.php');
include_once ($BASE_DIR . '/database/.php');

// Redirect to home page and display error message
if (!$_GET['productID']) {
    $_SESSION['error_messages'][] = 'Undefined product';
    header("Location: $BASE_URL");
    exit;
}    

$product = $_GET['productId'];
$ = getProduct($product);

$smarty->assign('', $);
$smarty->display('/list.tpl');

?>