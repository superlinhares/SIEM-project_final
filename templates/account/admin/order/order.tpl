<!-- Header -->
{include file="common/header.tpl"}

<!-- Main -->			
<div id="order-page" class="default-page">
  <h1 class="page-title">Encomendas</h1>
  <table class="order-table page-table">
    <tr>
      <th>ID</th>
      <th>Data</th>
      <th>Username</th>
      <th>Endereço</th>
      <th>Produtos [Quantidade]</th>
      <th>Estado</th>
      <th>Confirmar / Enviar / Remover</th>
    </tr>
  {foreach from=$orders item=$order} 
    <tr> 
      <td>{$order.id}</td>
      <td>{$order.order_date}</td>
      <td>{$order.username}</td>
      <td>{$order.address}</td>
      <td>
        {foreach from=$ordersProducts item=$orderProducts}
            {foreach from=$orderProducts item=$products}
              {foreach from=$products item=$product}
                {if ($product.order_id === $order.id)}
                  {$allProducts[$product.product_id-1].name} [{$product.quantity}]
                  <br><br>
                {/if}           
              {/foreach}            
            {/foreach}                
        {/foreach}
      </td>      
      <td>{$order.order_state}</td>
      <td>
        <a href="{$BASE_URL}/actions/admin/order/confirm_order.php?action=confirm&id={$order.id}">
          <i class="fas fa-check-circle" style="color: green"></i>
        </a>
        &nbsp;
        <a href="{$BASE_URL}/actions/admin/order/ship_order.php?action=ship&id={$order.id}">
          <i class="fas fa-shipping-fast" style="color: orange"></i>
        </a>
        &nbsp;
        <a href="{$BASE_URL}/actions/admin/order/delete_order.php?action=delete&id={$order.id}">
          <i class="fas fa-trash" style="color: red"></i>
        </a>
      </td>
    </tr>
  {/foreach}  
  </table>

<!-- Footer -->
{include file="common/footer.tpl"}

