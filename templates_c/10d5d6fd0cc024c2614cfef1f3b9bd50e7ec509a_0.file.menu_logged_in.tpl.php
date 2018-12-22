<?php
/* Smarty version 3.1.33, created on 2018-12-21 17:01:53
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final\templates\common\menu_logged_in.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1d8d015f7e81_11193389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10d5d6fd0cc024c2614cfef1f3b9bd50e7ec509a' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final\\templates\\common\\menu_logged_in.tpl',
      1 => 1545435255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1d8d015f7e81_11193389 (Smarty_Internal_Template $_smarty_tpl) {
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/account/account.php">Conta</a></li>							
<li>								
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/logout.php">Logout</a>
    <span class="username"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</span>
</li>


<?php }
}
