<?php
/* Smarty version 3.1.33, created on 2018-12-19 01:59:26
  from 'C:\inetpub\wwwroot\project_final\templates\account\admin\admin_panel\admin_panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c197bce32f7b7_95640251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00e58536d0b9b6249724a359c4bc3d2497f1df1e' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\project_final\\templates\\account\\admin\\admin_panel\\admin_panel.tpl',
      1 => 1545155030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c197bce32f7b7_95640251 (Smarty_Internal_Template $_smarty_tpl) {
?> <!-- Header -->
<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Main -->
 <div id="admin-panel">
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/account/admin/user_data.php"><div class="single-container admin-user-container"> <!--FIXME: path-->
    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/user.png" class="container-img">
    <h2 class="container-title">Gerir contas de utilizador</h2>
    <span class="container-description">Ver, alterar ou apagar contas de utilizador</span>
  </div></a>				
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/account/admin/orders.php"><div class="single-container admin-order-container"> <!--FIXME: path-->
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
