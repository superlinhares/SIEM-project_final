<?php
  require_once('../../config/init.php');
  include_once($BASE_DIR . '/database/products.php');
  include_once($BASE_DIR . '/database/orders.php');

  /* Verify if form submit button was used */
  if (isset($_GET['submit'])) {
    $userName = $_SESSION['username'];
    try {
      $userAddress = getUserAddress($userName);
    } catch (PDOException $e) {
      die('não percebo');
      $_SESSION['error_messages'] = 'Primeiro tens que definir um endereço na tua conta.';
      //if (isset($_SERVER['HTTP_REFERER'])) header('Location: ' . $_SERVER['HTTP_REFERER']);
      //else {
        header('Location: ' . $BASE_URL);
        exit;
      //} 
    } 

    if (!empty($_SESSION['shopping_cart'])) {
      // Create new order
      try {
        createOrder($userName, $userAddress);        
      } catch (PDOException $e) {
        $_SESSION['error_messages'] = 'Ocorreu um erro ao criar a encomenda:' . $e->getMessage();
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
      }
      // Get created order id
      $orderId = lastInsertId();

      foreach ($_SESSION['shopping_cart'] as $key => $product) {  
        try {
          insertProductIntoOrder($orderId, $product['id'], $product['quantity']);
        } catch (PDOException $e) {
          $_SESSION['error_messages'] = 'Ocorreu um erro ao adicionar o produto à encomenda:' . $e->getMessage();
          header('Location: ' . $_SERVER['HTTP_REFERER']);
        } 
      }
      $_SESSION['success_messages'] = 'Encomenda realizada com sucesso!';        
      unset($_SESSION['shopping_cart']);
      header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['error_messages'] = 'A sua lista de compras está vazia.';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
      }
  } else {
      if (isset($_SERVER['HTTP_REFERER'])) header('Location: ' . $_SERVER['HTTP_REFERER']);
      else header('Location: ' . $BASE_URL . '/pages/store/list_all.php');
    }
?>