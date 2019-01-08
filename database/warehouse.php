<?php

  function addProduct($productName, $productCategoryId, $productDescription, $productPrice, $productStock) {
    global $conn; 
    $sql = 'INSERT INTO product (id, name, description, price, cat_id, stock)
            VALUES (DEFAULT, :name, :description, :price, :cat_id, :stock)';    								
    $stmt = $conn->prepare($sql);						
    $stmt->execute( array(':name'=>$productName, ':description'=>$productDescription, ':price'=>$productPrice, ':cat_id'=>$productCategoryId, ':stock'=>$productStock) );    
  } 

?>          