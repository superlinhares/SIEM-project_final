 <!-- Header -->
{include file="common/header.tpl"}

<!-- Main -->
 <div id="admin-panel">
  <a href="{$BASE_URL}/pages/account/admin/user_data.php"><div class="single-container admin-user-container"> <!--FIXME: path-->
    <img src="{$BASE_URL}/img/user.png" class="container-img">
    <h2 class="container-title">Gerir contas de utilizador</h2>
    <span class="container-description">Ver, alterar ou apagar contas de utilizador</span>
  </div></a>				
  <a href="{$BASE_URL}/pages/account/admin/orders.php"><div class="single-container admin-order-container"> <!--FIXME: path-->
    <img src="{$BASE_URL}/img/order.png" class="container-img">
    <h2 class="container-title">Gerir encomendas</h2>
    <span class="container-description">Ver, confirmar, alterar e eliminar encomendas</span>
  </div></a>
    <a href="{$BASE_URL}/pages/account/admin/warehouse/warehouse.php"><div class="single-container admin-warehouse-container">
    <img src="{$BASE_URL}/img/warehouse.png" class="container-img">
    <h2 class="container-title">Armazém</h2>
    <span class="container-description">Ver e gerir armazém</span>
  </div></a>
</div> 

<!-- Footer -->
{include file="common/footer.tpl"}