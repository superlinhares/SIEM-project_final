<?php
/* Smarty version 3.1.33, created on 2018-12-16 17:06:10
  from 'C:\inetpub\wwwroot\project_final\templates\common\menu_logged_out.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c165bd20f6350_90313980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd50664c0ac556fcfb2dd515750b156e14f6ef5ed' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\project_final\\templates\\common\\menu_logged_out.tpl',
      1 => 1544969117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c165bd20f6350_90313980 (Smarty_Internal_Template $_smarty_tpl) {
?><li><a onclick="document.getElementById('login-modal-wrapper').style.display='block'">Login</a></li>
<li><a onclick="document.getElementById('signup-modal-wrapper').style.display='block'">Registar</a></li>                        

<!-- LOGIN POP-UP -->
<div id="modal-wrapper">
  <div id="login-modal-wrapper" class="modal">  
      <form class="modal-content animate" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/login.php" method="POST">
          <div class="imgcontainer">
              <span onclick="document.getElementById('login-modal-wrapper').style.display='none'" class="close-pop" title="Close PopUp">&times;</span>
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
    <!-- END -->

    <!-- SIGNUP POP-UP -->
<div id="signup-modal-wrapper" class="modal">  
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
<!-- END -->
</div><?php }
}
