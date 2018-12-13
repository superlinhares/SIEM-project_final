<?php
/* Smarty version 3.1.33, created on 2018-12-13 18:18:14
  from 'C:\inetpub\wwwroot\project_final\templates\common\menu_logged_in.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c12783613cd51_41801453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a06976542a7e8c0cf552dbe4f4f7b8bc88318ebb' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\project_final\\templates\\common\\menu_logged_in.tpl',
      1 => 1544714262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c12783613cd51_41801453 (Smarty_Internal_Template $_smarty_tpl) {
?><!--<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a>
<span class="username"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</span>-->

<li><a href="account.php">Conta</a></li>							
<li>								
    <form action="includes/logout.inc.php" method="POST">
    <button type="submit" name="submit" class="logout">Logout</button>
    </form>
</li>
<li><a href="cart.php" class="shopping-cart"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/cart.png" alt="shopping-cart"></a></li>
<?php }
}
