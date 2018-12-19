<?php
/* Smarty version 3.1.33, created on 2018-12-18 19:53:56
  from 'C:\inetpub\wwwroot\project_final\templates\account\admin\admin_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c192624e74151_75634717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8735c04d891b5b9376a3fb8a0065332c23b3cd5f' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\project_final\\templates\\account\\admin\\admin_menu.tpl',
      1 => 1545152025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c192624e74151_75634717 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="account-admin-menu-page">
  <a href="user.data.php"> <!--FIXME: HREF -->
    <div class="single-container user-container">
      <img src="../../img/user.png" class="container-img">
      <h2 class="container-title">Dados da conta</h2>
      <span class="container-description">Ver ou alterar dados da conta</span>
    </div>
  </a>
  <a href="user.address.php"> <!--FIXME: HREF -->
    <div class="single-container address-container">
      <img src="../../img/address.png" class="container-img">
      <h2 class="container-title">Endereço</h2>
      <span class="container-description">Confirma ou altera a tua morada de entrega e faturação</span>		  
    </div>
  </a>
  <a href="user.orders.php"> <!--FIXME: HREF -->
    <div class="single-container order-container">
      <img src="../../img/order.png" class="container-img">
      <h2 class="container-title">Encomendas</h2>
      <span class="container-description">Ver as minhas encomendas</span>
    </div>
  </a>
  <a href="user.password.php"> <!--FIXME: HREF -->
    <div class="single-container password-container">
      <img src="../../img/password.png" class="container-img">
      <h2 class="container-title">Mudar password</h2>
      <span class="container-description">Alterar a minha password</span>
    </div>
  </a>
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/account/admin/admin_panel/admin_panel.php">
    <div class="single-container admin-container">
      <img src="../../img/admin.png" class="container-img">
      <h2 class="container-title">Painel de administrador</h2>
      <span class="container-description">Aceda ao painel de aministrador</span>
    </div>
  </a>
</div><?php }
}
