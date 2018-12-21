<?php
  require_once('../../config/init.php');
  include_once($BASE_DIR . '/database/users.php');
  include_once($BASE_DIR . '/database/orders.php');

  /* Verify if form submit button was used */
  if (isset($_GET['submit'])) {
    $username = $_SESSION['username'];
    try {
      $userAddress = getUserAddress($username);
    } catch (PDOException $e) {
      $_SESSION['error_messages'][] = 'Ocorreu um erro:' . $e->getMessage();
      header('Location: ' . $_SERVER['HTTP_REFERER']);
      exit;      
    }
    if ($userAddress === 0) {
      $_SESSION['error_messages'][] = 'Primeiro tens que definir o teu endereço na conta.';
      header('Location: ' . $_SERVER['HTTP_REFERER']);
      exit; 
    } 

    if (!empty($_SESSION['shopping_cart'])) {
      // Create new order
      try {
        $orderId = createOrder($username, $userAddress);        
      } catch (PDOException $e) {
        $_SESSION['error_messages'][] = 'Ocorreu um erro ao criar a encomenda:' . $e->getMessage();
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
      }      

      foreach ($_SESSION['shopping_cart'] as $key => $product) {  
        try {          
          insertProductIntoOrder($orderId, $product['id'], $product['quantity']);
        } catch (PDOException $e) {
          $_SESSION['error_messages'][] = 'Ocorreu um erro ao adicionar o produto à encomenda:' . $e->getMessage();
          header('Location: ' . $_SERVER['HTTP_REFERER']);
        } 
      }
      $_SESSION['success_messages'][] = 'Encomenda realizada com sucesso!';        
      unset($_SESSION['shopping_cart']);
      header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['error_messages'][] = 'A sua lista de compras está vazia.';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
      }
  } else {
      header('Location: ' . $BASE_URL);
    }
?>