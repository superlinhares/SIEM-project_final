<?php
/* Smarty version 3.1.33, created on 2018-12-21 16:55:37
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final\templates\common\logged_out\menu_logged_out.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1d8b89d5d1d2_93328888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7a993a90f382c8009efc5f6e0cee240bdf30346' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final\\templates\\common\\logged_out\\menu_logged_out.tpl',
      1 => 1545440078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/logged_out/login_popup.tpl' => 1,
    'file:common/logged_out/sign_up_popup.tpl' => 1,
  ),
),false)) {
function content_5c1d8b89d5d1d2_93328888 (Smarty_Internal_Template $_smarty_tpl) {
?><li>
  <a id="login-popup">Login</a>
  <?php $_smarty_tpl->_subTemplateRender("file:common/logged_out/login_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</li>

<li>
  <a id="sign-up-popup">Registar</a>
  <?php $_smarty_tpl->_subTemplateRender("file:common/logged_out/sign_up_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</li>                        


<?php }
}
