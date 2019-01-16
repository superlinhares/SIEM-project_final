<!-- Header -->
{include file="common/header.tpl"}

<!--FIXME: Made by Lemos-->
<!-- Main -->			
<div id="password-page">
  <h1 class="page-title">Alterar Password</h1>
  <section class="password-form">			
    <form class="password" action="{$BASE_URL}/actions/user/change_password.php" method="POST">
      <label for="user-password"><b>Password Atual</b></label>
      <input type="password" placeholder="Insira password atual" name="user-password" required>      
      <label for="user-new-password"><b>Nova Password</b></label>
      <input type="password" placeholder="Insira a nova password" name="user-new-password" required>
      <label for="user-new-password-confirm"><b>Confirmar Password</b></label>
      <input type="password" placeholder="Insira novamenre" name="user-new-password-confirm" required>
      <button type="submit" class="submit" name="submit">Guardar</button> 
      <button type="reset" class="reset">Limpar</button>      
    </form>	
  </section>
</div>

<!-- Footer -->
{include file="common/footer.tpl"}