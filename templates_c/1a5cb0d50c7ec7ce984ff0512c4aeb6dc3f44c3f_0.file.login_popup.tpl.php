<?php
/* Smarty version 3.1.33, created on 2019-01-02 11:15:54
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final\templates\common\logged_out\login_popup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2d0dea48f031_78762967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a5cb0d50c7ec7ce984ff0512c4aeb6dc3f44c3f' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final\\templates\\common\\logged_out\\login_popup.tpl',
      1 => 1546456039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2d0dea48f031_78762967 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- LOGIN POP-UP -->
<div id="login-modal-wrapper" class="modal-wrapper modal">  
  <form class="modal-content animate" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/user/login.php" method="POST">
      <div class="imgcontainer">
          <span class="close-pop close-login" title="Close PopUp">&times;</span>
          <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/avatar.png" alt="Avatar" class="avatar">
          <h1 style="text-align:center">Bem-vindo!</h1>
      </div>

      <div class="container">
          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" required>
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>        
          <button type="submit" name="submit">Login</button>
          <input type="checkbox" style="margin:26px 30px;"> Lembrar     
          <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
      </div>
  </form>
</div>
<!-- END --><?php }
}
