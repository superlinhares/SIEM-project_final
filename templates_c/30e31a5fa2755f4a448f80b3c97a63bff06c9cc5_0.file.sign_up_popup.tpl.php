<?php
/* Smarty version 3.1.33, created on 2019-01-02 11:15:54
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final\templates\common\logged_out\sign_up_popup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2d0dea4a8680_30735839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30e31a5fa2755f4a448f80b3c97a63bff06c9cc5' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final\\templates\\common\\logged_out\\sign_up_popup.tpl',
      1 => 1546456039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2d0dea4a8680_30735839 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- SIGNUP POP-UP -->
<div id="sign-up-modal-wrapper" class="modal-wrapper modal">  
  <form class="modal-content animate" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/user/register.php" method="POST">          
    <div class="imgcontainer">
      <span class="close-pop close-sign-up" title="Close PopUp">&times;</span>
      <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/avatar.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center">Bem-vindo!</h1>
    </div>

    <div class="container">
      <label for="realname"><b>Real Name</b></label>
      <input type="text" placeholder="Enter Real Name" name="realname" required>
      <label for="email"><b>E-mail</b></label>
      <input type="text" placeholder="E-mail" name="email" required>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required> 
      <label for="dob"><b>Data de nascimento</b></label>
      <input type="date" placeholder="dd/mm/yy" name="dob" required>
      <button type="submit" name="submit">Registar</button>
      <input type="checkbox" style="margin:26px 30px;"> Remember me      
      <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a> 
    </div>		    
  </form>		  
</div>
<!-- END --><?php }
}
