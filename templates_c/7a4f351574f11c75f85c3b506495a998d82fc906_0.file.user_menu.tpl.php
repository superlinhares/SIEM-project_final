<?php
/* Smarty version 3.1.33, created on 2019-01-15 09:40:03
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final\templates\account\user\user_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3e1af3261d47_84449853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a4f351574f11c75f85c3b506495a998d82fc906' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final\\templates\\account\\user\\user_menu.tpl',
      1 => 1547573960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3e1af3261d47_84449853 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="account-menu-page">
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
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/account/user/order/order.php"> <!--FIXME: HREF -->
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
</div><?php }
}
