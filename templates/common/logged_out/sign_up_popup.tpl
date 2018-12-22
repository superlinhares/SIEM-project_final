<!-- SIGNUP POP-UP -->
<div id="sign-up-modal-wrapper" class="modal-wrapper modal">  
  <form class="modal-content animate" action="{$BASE_URL}/actions/users/register.php" method="POST">          
    <div class="imgcontainer">
      <span class="close-pop close-sign-up" title="Close PopUp">&times;</span>
      <img src="{$BASE_URL}/img/avatar.png" alt="Avatar" class="avatar">
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