<?php

  function addProduct($productName, $productDescription, $productPrice, $productStock) {
    global $conn; 
    $sql = 'INSERT INTO products (id, name, description, price, stock)
            VALUES (DEFAULT, :name, :description, :price, :stock)';    								
    $stmt = $conn->prepare($sql);						
    $stmt->execute( array(':name'=>$productName, ':description'=>$productDescription, ':price'=>$productPrice, ':stock'=>$productStock) );    
  } 

?>          