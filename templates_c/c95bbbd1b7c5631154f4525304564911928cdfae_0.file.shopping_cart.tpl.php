<?php
/* Smarty version 3.1.33, created on 2018-12-20 10:39:32
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final\templates\shopping_cart\shopping_cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1be1e456e796_38325097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c95bbbd1b7c5631154f4525304564911928cdfae' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final\\templates\\shopping_cart\\shopping_cart.tpl',
      1 => 1545299092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:shopping_cart/shopping_table/shopping_cart_table.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c1be1e456e796_38325097 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Header -->
<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Main -->
<div id="shopping-cart">
  <h1 class="page-title">Detalhes da Encomenda</h1>
  <div class='shopping-table'>
    <?php $_smarty_tpl->_subTemplateRender("file:shopping_cart/shopping_table/shopping_cart_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>
</div>

<!-- Footer -->
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
