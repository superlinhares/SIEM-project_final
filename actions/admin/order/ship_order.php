<?php 
  include_once('../../../config/init.php');
  include_once('../../../database/order.php');

  if (isset($_SESSION['admin'])) {
    $orderId = $_GET['id'];
    if ($_GET['action'] == 'ship') shipOrderById($orderId);
    $_SESSION['success_messages'][] = 'Encomenda enviada com sucesso'; 
    die(header('Location: ' . $_SERVER['HTTP_REFERER']));
  } else {
      header('Location: '. $BASE_URL);
    }
?>