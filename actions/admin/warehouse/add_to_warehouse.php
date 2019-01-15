<?php 
  include_once('../../../config/init.php');
  include_once('../../../database/product.php');
  include_once('../../../database/category.php');

  /* Verify if form submit button was used */
	if (isset($_POST['add'])) {
		
    $productName = $_POST['product-name'];
		$productDescription = $_POST['product-description'];
		$productImg = $_FILES['product-img'];
		$productPrice = $_POST['product-price'];
    $productCategory = $_POST['product-category'];
    $productStock = $_POST['product-stock'];
    
    $productCategoryId = getCategoryIdOrCreate($productCategory);

		// Error Handlers
		// Check for empty fields
		if (empty($productName) || empty($productCategory) || empty($productDescription) || empty($productPrice) || empty($productStock)) {
      $_SESSION['error_messages'][] = 'Todos os campos têm que ser preenchidos'; 
      header('Location: ' . $_SERVER['HTTP_REFERER']);
			exit;
    } else {
        // Check if input characters are valid
        if (!preg_match("/[a-zA-Z]/", $productName) || !preg_match("/[a-zA-Z]/", $productDescription) ||
        !preg_match("/[0-9999]/", $productPrice) || !preg_match("/[0-9999]/", $productStock)) 
        { 
          $_SESSION['error_messages'][] = 'Caracteres inválidos'; 
          header('Location: ' . $_SERVER['HTTP_REFERER']);
          exit;
        } else {
            $tmp = explode('.', $productImg['name']);
            $extension = end($tmp);
            try {
              addProduct($productName, $productCategoryId, $productDescription, $productPrice, $productStock);
              $productId = $conn->lastInsertId();
              move_uploaded_file($productImg["tmp_name"], $BASE_DIR . "/img/products/" . $productId . '.' . $extension);
              chmod($BASE_DIR . '/img/products/' . $productId . '.' . $extension, 0644);
            } catch (PDOException $e) {
                $_SESSION['error_messages'][] = 'Ocorreu um erro a adicionar o produto' . $e->getMessage();
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit;
              }
          $_SESSION['success_messages'] = 'Produto adicionado com sucesso';
          header('Location: ' . $_SERVER['HTTP_REFERER']);
          exit;					
				}
		}
	} else header('Location: ' . $_SERVER['HTTP_REFERER']);   
?>