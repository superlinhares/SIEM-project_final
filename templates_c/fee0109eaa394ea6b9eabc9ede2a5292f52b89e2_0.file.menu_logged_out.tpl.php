<?php
/* Smarty version 3.1.33, created on 2019-01-16 08:15:51
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final_2\templates\common\logged_out\menu_logged_out.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3f58b793d7d8_14168504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fee0109eaa394ea6b9eabc9ede2a5292f52b89e2' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final_2\\templates\\common\\logged_out\\menu_logged_out.tpl',
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
function content_5c3f58b793d7d8_14168504 (Smarty_Internal_Template $_smarty_tpl) {
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
