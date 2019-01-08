<?php 
  include_once ('../../config/init.php');
  include_once ($BASE_DIR . '/database/product.php');

  // Redirect to home page and display error message
  if (!$_GET['productId']) {
      $_SESSION['error_messages'][] = 'Undefined product';
      header("Location: $BASE_URL");
      exit;
  }    

  $product = $_GET['productId'];
  $products = getProduct($product);

  $smarty->assign('products', $products);
  $smarty->display('product/list.tpl');
?>