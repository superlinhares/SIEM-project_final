<?php
/* Smarty version 3.1.33, created on 2019-01-16 11:39:37
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final_2\templates\account\user\user_data\user_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3f88790ed4e2_62443927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fd5bc90ec54534d91e7f181214b72c2e90e98d9' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final_2\\templates\\account\\user\\user_data\\user_data.tpl',
      1 => 1547664136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3f88790ed4e2_62443927 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Header -->
<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--FIXME: Made by Lemos-->
<!-- Main -->			
<div id="user-data-page">
  <h1 class="page-title">Dados da Conta</h1>
  <section class="user-form">			
    <form class="user-data" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/user/update_user_data.php" method="POST">      
      <label for="user-name"><b>Nome</b></label>
      <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['userData']->value['real_name'];?>
" name="user-name" >
      <label for="user-dob"><b>Data de nascimento</b></label>
      <input type="date" placeholder="<?php echo $_smarty_tpl->tpl_vars['userData']->value['dob'];?>
" name="user-dob" >
      <label for="user-email"><b>E-mail</b></label>
      <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['userData']->value['email'];?>
" name="user-email" >							
      <label for="user-phone"><b>Telefone</b></label>
      <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['userData']->value['tel'];?>
" name="user-phone" >       
      <button type="submit" class="submit" name="submit">Guardar</button> 
      <button type="reset" class="reset">Limpar</button>      
    </form>	
  </section>

<!-- Footer -->
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
