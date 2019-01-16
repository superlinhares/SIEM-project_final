<!-- Header -->
{include file="common/header.tpl"}
´
<!--FIXME: Made by Lemos-->
<!-- Main -->			
<div id="address-page">
  <h1 class="page-title">Endereço de entrega e faturação</h1>
  <section class="address-form">			
    <form class="address" action="{$BASE_URL}/actions/user/update_address.php" method="POST">      
      <label for="user-address"><b>Novo Endereço</b></label>
      <input type="text" placeholder="{$address}" name="user-address" required>
      <button type="submit" class="submit" name="submit">Guardar</button> 
      <button type="reset" class="reset">Limpar</button>      
    </form>	
  </section>
</div>

<!-- Footer -->
{include file="common/footer.tpl"}