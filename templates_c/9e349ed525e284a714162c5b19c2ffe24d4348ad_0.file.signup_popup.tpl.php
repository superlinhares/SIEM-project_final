<?php
/* Smarty version 3.1.33, created on 2018-12-21 16:44:18
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final\templates\common\logged_out\signup_popup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1d88e280e850_72912655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e349ed525e284a714162c5b19c2ffe24d4348ad' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final\\templates\\common\\logged_out\\signup_popup.tpl',
      1 => 1545439443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1d88e280e850_72912655 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- SIGNUP POP-UP -->
<div id="signup-modal-wrapper" class="modal-wrapper modal">  
  <form class="modal-content animate" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/register.php" method="POST">          
    <div class="imgcontainer">
      <span onclick="document.getElementById('signup-modal-wrapper').style.display='none'" class="close-pop" title="Close PopUp">&times;</span>
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
