<?php
  include_once('../../../../config/init.php');
  include_once($BASE_DIR . '/database/order.php');
  
  if (isset($_SESSION['admin'])) {
    $orders = getAllOrders();
    foreach ($orders as $order) {
      $ordersProducts[] = getOrderProducts($order['id']);
    } 
    $smarty->assign('orders', $orders);
    $smarty->assign('ordersProducts', $ordersProducts);
    $smarty->display('account/admin/order/order.tpl');
  }
  else {
    header('Location: '. $BASE_URL);
  }
?>