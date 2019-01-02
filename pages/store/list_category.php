<?php
/* This page lists all
* the products (store)
*/

include_once ('../../config/init.php');
include_once ($BASE_DIR . '/database/category.php');

$categories = getAllCategories();
$smarty->assign('categories', $categories);
$smarty->display('categories/list_category.tpl');

?>


