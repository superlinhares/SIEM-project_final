<?php
/* Smarty version 3.1.33, created on 2018-12-13 21:15:24
  from 'C:\inetpub\wwwroot\project_final\templates\account\account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c12a1bc1cc495_91876914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66b688e8f1dd0e24c6fdc2e7906a51f6b915dfe4' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\project_final\\templates\\account\\account.tpl',
      1 => 1544723361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:account/admin/admin_menu.tpl' => 1,
    'file:account/user/user_menu.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c12a1bc1cc495_91876914 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Header -->
<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Main -->
<?php if (isset($_smarty_tpl->tpl_vars['ADMIN']->value)) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:account/admin/admin_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:account/user/user_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<!-- Footer -->
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
