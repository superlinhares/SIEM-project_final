<?php
/* Smarty version 3.1.33, created on 2018-12-19 17:51:04
  from 'C:\inetpub\wwwroot\project_final\templates\shopping_cart\shopping_cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1a5ad8326df6_06156489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71d7180a543c74266d99457c27f2156bb7729f2b' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\project_final\\templates\\shopping_cart\\shopping_cart.tpl',
      1 => 1545143426,
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
function content_5c1a5ad8326df6_06156489 (Smarty_Internal_Template $_smarty_tpl) {
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
