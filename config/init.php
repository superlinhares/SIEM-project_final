<?php

/*
* If you’re developing your site anywhere else besides the root of your webserver, 
* you should change the path your session cookie is valid for. 
*/
//session_set_cookie_params(3600, '/~up201308136/project_final'); //TODO: change this later

session_start();

$BASE_DIR = dirname(__DIR__);
$BASE_URL = 'http://localhost/project_final';

include_once($BASE_DIR . '/lib/smarty/libs/Smarty.class.php');

$smarty = new Smarty;
// Every variable used in Smarty has to be explicitly passed from PHP code
$smarty->assign('BASE_URL', $BASE_URL);

/*
* Smarty assumes that our templates folder is at the same level as the PHP page we are executing. 
* As our list_all.php page is two levels down the folder structure, we have to add two more lines 
* to our config/init.php file, right after instantiating Smarty:
*/
$smarty->template_dir = $BASE_DIR . '/templates';
$smarty->compile_dir = $BASE_DIR . '/templates_c';

// Connection to db
$conn = new PDO('pgsql:host=dbm.fe.up.pt;dbname=siem1827', 'siem1827', '12345');
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// Enable PDO exception handling mechanism
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_SESSION['form_values'])) {
    $smarty->assign('FORM_VALUES', $_SESSION['form_values']);
    unset($_SESSION['form_values']);
}

/**
 * To choose which menus to include, the templates have to know if a user is logged in and which one 
 */
if (isset($_SESSION['username'])) {
    $smarty->assign('USERNAME', $_SESSION['username']);
}

/**
 * Admin credential
 */
if(isset($_SESSION['admin'])){
    $smarty->assign('ADMIN', $_SESSION['admin']);
}

/**
 * Shopping cart 
 */
if (isset($_SESSION['shopping_cart'])) {
  $smarty->assign('SHOPPING_CART', $_SESSION['shopping_cart']);
} else $smarty->assign('SHOPPING_CART', array());
$smarty->assign('cartSize', cartSize());

$total = 0;
$productTotal[] = array();
if (!empty($_SESSION['shopping_cart'])){
  foreach ($_SESSION['shopping_cart'] as $product){  
    $productTotal[$product['id']] = number_format($product['quantity'] * $product['price'], 2);
    $total = number_format($total + ($product['quantity'] * $product['price']), 2);
  }
}
$smarty->assign('productTotal', $productTotal);
$smarty->assign('total', $total);  

/*
* Error handling code
* Make every page capable of receiving error messages
* This code will be responsible for sending those messages to the smarty processor and deleting them from the session
* so they are only displayed once
*/
if (isset($_SESSION['error_messages'])) {
    $smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);
    unset($_SESSION['error_messages']);
}

/**
 * Success Messages
 */
if (isset($_SESSION['success_messages'])) {
    $smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
    unset($_SESSION['success_messages']);
}

function cartSize(){
  if(!isset($_SESSION['shopping_cart'])) return 0;
  $count = 0;
  foreach ($_SESSION['shopping_cart'] as $product) {
    $count += $product['quantity'];
  }
  return $count;
}
?>