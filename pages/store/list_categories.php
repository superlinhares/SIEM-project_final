<?php
  include_once ('../../config/init.php');
  include_once ($BASE_DIR . '/database/category.php');

  $categories = getAllCategories();
  $smarty->assign('categories', $categories);
  $smarty->display('category/list_categories.tpl');
?>


