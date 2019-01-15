<?php 
  require_once('../../config/init.php');

  $id = $_GET['id'];

  if ($_GET['action'] == 'delete'){
    // Loop through all products in the shopping cart until it matches with GET id variable
    foreach ($_SESSION['shopping_cart'] as $key => $product) {
      if($product['id'] == $id) {
        // remove product from the shopping cart when it matches with the GET id
        unset($_SESSION['shopping_cart'][$key]);
      }
    }
    // reset session array keys so they match with $cartProductIds numeric array
    $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
  }
	 die(header('Location: ' . $BASE_URL . '/pages/store/list_products.php'));
?>