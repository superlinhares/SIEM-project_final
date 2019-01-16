<?php
/* Smarty version 3.1.33, created on 2019-01-16 08:20:47
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final_2\templates\account\admin\admin_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3f59df3f8aa1_19519174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89b23aeddf77d3e72a7714aae0094d75adc09777' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final_2\\templates\\account\\admin\\admin_menu.tpl',
      1 => 1547655644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3f59df3f8aa1_19519174 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="account-menu-page">
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/account/user/user_data/user_data.php"> 
    <div class="single-container user-container">
      <img src="../../img/user.png" class="container-img">
      <h2 class="container-title">Dados da conta</h2>
      <span class="container-description">Ver ou alterar dados da conta</span>
    </div>
  </a>
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/account/user/address/address.php"> 
    <div class="single-container address-container">
      <img src="../../img/address.png" class="container-img">
      <h2 class="container-title">Endereço</h2>
      <span class="container-description">Confirma ou altera a tua morada de entrega e faturação</span>		  
    </div>
  </a>
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/account/user/order/order.php"> 
    <div class="single-container order-container">
      <img src="../../img/order.png" class="container-img">
      <h2 class="container-title">Encomendas</h2>
      <span class="container-description">Ver as minhas encomendas</span>
    </div>
  </a>
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/account/user/password/password.php"> 
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
