<?php
/* Smarty version 3.1.33, created on 2018-12-15 01:54:51
  from 'C:\inetpub\wwwroot\project_final\templates\common\menu_logged_in.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1434bbab91f2_46945883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a06976542a7e8c0cf552dbe4f4f7b8bc88318ebb' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\project_final\\templates\\common\\menu_logged_in.tpl',
      1 => 1544828089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1434bbab91f2_46945883 (Smarty_Internal_Template $_smarty_tpl) {
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/account/account.php">Conta</a></li>							
<li>								
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a>
    <span class="username"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</span>
</li>
<li><a href="cart.php" class="shopping-cart"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/cart.png" class="shopping-cart" alt="shopping-cart"></a></li>
<?php }
}
