<?php 
  include_once('../../../config/init.php');
  include_once('../../../database/order.php');

  if (isset($_SESSION['username'])) {
    $orderId = $_GET['id'];
    $orderState = getOrderStateById($orderId);
    if ($orderState !== 'Enviada') {
      if ($_GET['action'] == 'cancel') cancelOrderById($orderId);    
      $_SESSION['success_messages'][] = 'Encomenda cancelada com sucesso'; 
      die(header('Location: ' . $_SERVER['HTTP_REFERER']));
    } else {
      $_SESSION['error_messages'][] = 'Já não é possível cancelar a encomenda';
      header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
  } else {
      header('Location: '. $BASE_URL);
    }
?>