<?php 
  include_once('../../../config/init.php');
  include_once('../../../database/product.php');

  /* Verify if form submit button was used */
	if (isset($_POST['delete'])) {
    
    $productId = $_POST['product-id'];

    try {
      deleteProduct($productId);
    } catch (PDOException $e) {
        $_SESSION['error_messages'][] = 'Ocorreu um erro a eliminar o produto' . $e->getMessage();
        die(header('Location: ' . $_SERVER['HTTP_REFERER']));
      }

    $_SESSION['success_messages'] = 'Produto eliminado com sucesso';    
    die(header('Location: ' . $_SERVER['HTTP_REFERER']));
    
  } else header('Location: ' . $_SERVER['HTTP_REFERER']); 
?>