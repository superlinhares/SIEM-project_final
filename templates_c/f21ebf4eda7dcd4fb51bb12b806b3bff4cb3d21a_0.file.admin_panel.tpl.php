<?php
/* Smarty version 3.1.33, created on 2019-01-16 11:39:31
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final_2\templates\account\admin\admin_panel\admin_panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3f8873862f72_73609377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f21ebf4eda7dcd4fb51bb12b806b3bff4cb3d21a' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final_2\\templates\\account\\admin\\admin_panel\\admin_panel.tpl',
      1 => 1547656988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3f8873862f72_73609377 (Smarty_Internal_Template $_smarty_tpl) {
?> <!-- Header -->
<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Main -->
 <div id="admin-panel">
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/account/admin/user_data/user_data.php"><div class="single-container admin-user-container"> 
    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/user.png" class="container-img">
    <h2 class="container-title">Gerir contas de utilizador</h2>
    <span class="container-description">Ver, alterar ou apagar contas de utilizador</span>
  </div></a>				
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/account/admin/order/order.php"><div class="single-container admin-order-container"> 
    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/order.png" class="container-img">
    <h2 class="container-title">Gerir encomendas</h2>
    <span class="container-description">Ver, confirmar, alterar e eliminar encomendas</span>
  </div></a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/account/admin/warehouse/warehouse.php"><div class="single-container admin-warehouse-container">
    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/warehouse.png" class="container-img">
    <h2 class="container-title">Armazém</h2>
    <span class="container-description">Ver e gerir armazém</span>
  </div></a>
</div> 

<!-- Footer -->
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
