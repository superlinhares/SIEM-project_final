<?php
/* Smarty version 3.1.33, created on 2019-01-16 10:53:21
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final_2\templates\account\user\address\address.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3f7da1b8daa8_82086466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '007032e990f4e54fc0080fc5226cd878a306218f' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final_2\\templates\\account\\user\\address\\address.tpl',
      1 => 1547664796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3f7da1b8daa8_82086466 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Header -->
<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
´
<!--FIXME: Made by Lemos-->
<!-- Main -->			
<div id="address-page">
  <h1 class="page-title">Endereço de entrega e faturação</h1>
  <section class="address-form">			
    <form class="address" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/user/update_address.php" method="POST">      
      <label for="user-address"><b>Novo Endereço</b></label>
      <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
" name="user-address" required>
      <button type="submit" class="submit" name="submit">Guardar</button> 
      <button type="reset" class="reset">Limpar</button>      
    </form>	
  </section>
</div>

<!-- Footer -->
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
