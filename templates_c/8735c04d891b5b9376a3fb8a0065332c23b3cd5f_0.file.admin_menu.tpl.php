<?php
/* Smarty version 3.1.33, created on 2018-12-13 22:11:04
  from 'C:\inetpub\wwwroot\project_final\templates\account\admin\admin_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c12aec8798a30_38454087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8735c04d891b5b9376a3fb8a0065332c23b3cd5f' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\project_final\\templates\\account\\admin\\admin_menu.tpl',
      1 => 1544728259,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c12aec8798a30_38454087 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-container">
  <section> 
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/account/admin/user_data.php"><div class="single-container admin-user-container"> <!--FIXME: path-->
      <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/user.png" class="container-image">
      <p class="container-title">Gerir contas de utilizador</p>
      <p class="container-description">Ver, alterar ou apagar contas de utilizador</p>
    </div></a>				
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/account/admin/orders.php"><div class="single-container admin-order-container"> <!--FIXME: path-->
      <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/order.png" class="container-image">
      <p class="container-title">Gerir encomendas</p>
      <p class="container-description">Ver, confirmar, alterar e eliminar encomendas</p>
    </div></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/account/admin/warehouse/warehouse.php"><div class="single-container admin-warehouse-container">
      <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/warehouse.png" class="container-image">
      <p class="container-title">Armazém</p>
      <p class="container-description">Ver e gerir armazém</p>
    </div></a>
	</section>
</div>	<?php }
}
