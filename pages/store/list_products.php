<?php
  include_once ('../../config/init.php');
  include_once ($BASE_DIR . '/database/product.php');
  include_once ($BASE_DIR . '/database/category.php');

  $categoryId = $_GET['category_id'];

  if (isset($_GET['name']) && isset($_GET['min']) && isset($_GET['max'])) {
    $name = $_GET['name'];
    $min = $_GET['min'];
    $max = $_GET['max'];
  }

  if (isset($_GET['page']))
    $page = $_GET['page'];
  else
    $page = 1;

  if (!isset($categoryId)) 
    die(header('Location: list_categories.php'));

  $category = getCategoryById($categoryId);

  if (!isset($category))
    die(header('Location: list_categories.php'));

  if (isset($name) && isset($min) && isset($max)) 
    $products = getProductsBySearch($categoryId, $name, $min, $max);
  else
    $products = getProductsByCategory($categoryId);  //TODO: page
  
  //$smarty->assign('page', $page); TODO:
  $smarty->assign('products', $products);
  $smarty->assign('category', $category);
  $smarty->display('product/list.tpl');
?>


