<?php
/* Smarty version 3.1.33, created on 2019-01-16 11:36:07
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final_2\templates\account\user\password\password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3f87a7ead577_24147779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7b06812ec4b831386dc274790aff98ba40dad97' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final_2\\templates\\account\\user\\password\\password.tpl',
      1 => 1547667364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3f87a7ead577_24147779 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Header -->
<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--FIXME: Made by Lemos-->
<!-- Main -->			
<div id="password-page">
  <h1 class="page-title">Alterar Password</h1>
  <section class="password-form">			
    <form class="password" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/user/change_password.php" method="POST">
      <label for="user-password"><b>Password Atual</b></label>
      <input type="password" placeholder="Insira password atual" name="user-password" required>      
      <label for="user-new-password"><b>Nova Password</b></label>
      <input type="password" placeholder="Insira a nova password" name="user-new-password" required>
      <label for="user-new-password-confirm"><b>Confirmar Password</b></label>
      <input type="password" placeholder="Insira novamenre" name="user-new-password-confirm" required>
      <button type="submit" class="submit" name="submit">Guardar</button> 
      <button type="reset" class="reset">Limpar</button>      
    </form>	
  </section>
</div>

<!-- Footer -->
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
