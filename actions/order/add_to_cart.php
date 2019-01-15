<?php
	require_once('../../config/init.php');

	$cartProductIds = array();

	$id = $_GET['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];

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
					'id' => $id,
					'name' => $name,
					'price' => $price,
					'quantity' => $quantity
				);
			}
			else{
				for ($i=0; $i < count($cartProductIds); $i++) { 
					if ($cartProductIds[$i] == $id) {
						// add item quantity to the existing product in the array
						$_SESSION['shopping_cart'][$i]['quantity'] += $quantity;
					}
				}
			}
		}
		else{ 
			// if shopping cart doesn't exist, create first product with array key 0
			// create array using submitted form data, start from key 0 and fill it with values
			$_SESSION['shopping_cart'][0] = array
			(			
				'id' => $id,
				'name' => $name,
				'price' => $price,
				'quantity' => $quantity 
			);
		}
		$_SESSION['success_messages'][] = 'Produto(s) adicionado(s) ao carrinho com sucesso';
	}
	 die(header('Location: ' . $_SERVER['HTTP_REFERER']));
?>
