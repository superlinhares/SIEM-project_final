<?php
/* Smarty version 3.1.33, created on 2018-12-18 14:55:42
  from 'C:\inetpub\wwwroot\project_final\templates\common\menu_logged_in.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c18e03e8b58f1_63623083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a06976542a7e8c0cf552dbe4f4f7b8bc88318ebb' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\project_final\\templates\\common\\menu_logged_in.tpl',
      1 => 1545134140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:shopping_cart/shopping_table/shopping_cart_table.tpl' => 1,
  ),
),false)) {
function content_5c18e03e8b58f1_63623083 (Smarty_Internal_Template $_smarty_tpl) {
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/account/account.php">Conta</a></li>							
<li>								
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/logout.php">Logout</a>
    <span class="username"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</span>
</li>
<li>
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/shopping_cart/shopping_cart.php" class="shopping-cart">
    <i class="fas fa-shopping-cart shopping-cart"> [<?php echo $_smarty_tpl->tpl_vars['cartSize']->value;?>
]</i> 
  </a>  
</li>
<div id="mini-cart-container" style="display:none; position:fixed; width=100%;">
    <div class="products-container">
      <?php $_smarty_tpl->_subTemplateRender("file:shopping_cart/shopping_table/shopping_cart_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>
<?php }
}
