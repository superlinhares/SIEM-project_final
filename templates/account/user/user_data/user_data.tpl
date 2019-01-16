<!-- Header -->
{include file="common/header.tpl"}

<!--FIXME: Made by Lemos-->
<!-- Main -->			
<div id="user-data-page">
  <h1 class="page-title">Dados da Conta</h1>
  <section class="user-form">			
    <form class="user-data" action="{$BASE_URL}/actions/user/update_user_data.php" method="POST">      
      <label for="user-name"><b>Nome</b></label>
      <input type="text" placeholder="{$userData.real_name}" name="user-name" >
      <label for="user-dob"><b>Data de nascimento</b></label>
      <input type="date" placeholder="{$userData.dob}" name="user-dob" >
      <label for="user-email"><b>E-mail</b></label>
      <input type="text" placeholder="{$userData.email}" name="user-email" >							
      <label for="user-phone"><b>Telefone</b></label>
      <input type="text" placeholder="{$userData.tel}" name="user-phone" >       
      <button type="submit" class="submit" name="submit">Guardar</button> 
      <button type="reset" class="reset">Limpar</button>      
    </form>	
  </section>

<!-- Footer -->
{include file="common/footer.tpl"}

