<?php
/* Smarty version 3.1.33, created on 2018-12-21 16:12:30
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final\templates\common\menu_logged_out.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1d816e9b2085_47718558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb2bb2ea2a98f7870c8fc258b78bb8c82ba7bc61' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final\\templates\\common\\menu_logged_out.tpl',
      1 => 1545437510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1d816e9b2085_47718558 (Smarty_Internal_Template $_smarty_tpl) {
?><li>
  <a onclick="document.getElementById('login-modal-wrapper').style.display='block'">Login</a>
<!-- LOGIN POP-UP -->
  <div id="modal-wrapper" class="modal">  
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
</li>

<li>
  <a onclick="document.getElementById('signup-modal-wrapper').style.display='block'">Registar</a>
  <!-- SIGNUP POP-UP -->
  <div id="modal-wrapper" class="modal">  
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
</li>                        


<?php }
}
