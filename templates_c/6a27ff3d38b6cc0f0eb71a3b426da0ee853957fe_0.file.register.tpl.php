<?php
/* Smarty version 3.1.33, created on 2018-12-12 15:15:29
  from 'C:\inetpub\wwwroot\project_final\templates\users\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c10fbe178c0c5_95196517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a27ff3d38b6cc0f0eb71a3b426da0ee853957fe' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\project_final\\templates\\users\\register.tpl',
      1 => 1543165727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c10fbe178c0c5_95196517 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/register.php" method="post">
  <input type="text" name="realname"
         value="<?php if (isset($_smarty_tpl->tpl_vars['FORM_VALUES']->value)) {
echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['realname'];
}?>"
         placeholder="Name">
  <input type="text" name="username"
         value="<?php if (isset($_smarty_tpl->tpl_vars['FORM_VALUES']->value)) {
echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['username'];
}?>"
         placeholder="Username">
  <input type="password" name="password" value="" placeholder="Password">
  <label><input type="submit" value="Register"></label>
</form>
 
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
