<!-- LOGIN POP-UP -->
<div id="login-modal-wrapper" class="modal-wrapper modal">  
  <form class="modal-content animate" action="{$BASE_URL}/actions/users/login.php" method="POST">
      <div class="imgcontainer">
          <span class="close-pop close-login" title="Close PopUp">&times;</span>
          <img src="{$BASE_URL}/img/avatar.png" alt="Avatar" class="avatar">
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