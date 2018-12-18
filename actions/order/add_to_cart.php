<?php
  require_once('../../config/init.php');

$cartProductIds = array();

// check if Add to Cart button has been submitted
if (isset($_POST['add_to_cart'])) {		
	if (isset($_SESSION['shopping_cart'])) {

		// keep track of how many products are in shopping cart
		$count = count($_SESSION['shopping_cart']);
		// create sequential array for matching array keys to product's id's
		$cartProductIds = array_column($_SESSION['shopping_cart'], 'id');

		if (!in_array(filter_input(INPUT_GET, 'id'), $cartProductIds)) {
			$_SESSION['shopping_cart'][$count] = array
			(
				'id' => filter_input(INPUT_GET, 'id'),
				'name' => filter_input(INPUT_POST, 'name'),
				'price' => filter_input(INPUT_POST, 'price'),
				'quantity' => filter_input(INPUT_POST, 'quantity')
			);
		}
		else{
			for ($i=0; $i < count($cartProductIds); $i++) { 
				if ($cartProductIds[$i] == filter_input(INPUT_GET, 'id')) {
					// add item quantity to the existing product in the array
					$_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
				}
			}
		}
	}
	else{ // if shopping cart doesn't exist, create first product with array key 0
		// create array using submitted form data, start from key 0 and fill it with values
		$_SESSION['shopping_cart'][0] = array
		(			
			'id' => filter_input(INPUT_GET, 'id'),
			'name' => filter_input(INPUT_POST, 'name'),
			'price' => filter_input(INPUT_POST, 'price'),
			'quantity' => filter_input(INPUT_POST, 'quantity') 
		);
  }
  $_SESSION['success_messages'][] = 'Produto(s) adicionado(s) ao carrinho com sucesso';
}
// FIXME: ver isto 
if (filter_input(INPUT_GET, 'action') == 'delete'){
	// Loop through all products in the shopping cart until it matches with GET id variable
	foreach ($_SESSION['shopping_cart'] as $key => $product) {
		if($product['id'] == filter_input(INPUT_GET, 'id')){
			// remove product from the shopping cart when it matches with the GET id
			unset($_SESSION['shopping_cart'][$key]);
		}
	}
	// reset session array keys so they match with $cartProductIds numeric array
  $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
}
header('Location: ' . $_SERVER['HTTP_REFERER']); 
?>