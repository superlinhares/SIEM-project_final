<!-- Header -->
{include file="common/header.tpl"}

<!-- Main -->			
<div id="order-page">
  <h1 class="page-title">Encomendas</h1>
  <table class="order-table">
    <tr>
      <th>ID</th>
      <th>Data</th>
      <th>Endereço</th>
      <th>Produtos</th>
      <th>Estado</th>     						
    </tr>
  {foreach from=$orders item=$order} 
    <tr> 
      <td>{$order.id}</td>
      <td>{$order.order_date}</td>
      <td>{$order.address}</td>
      <td>
        <!--FIXME: -->       
        {foreach from=$ordersProducts item=$orderProducts}
          {if ($orderProducts.order_id == $order.id)}
            {foreach from=$orderProducts item=$product}
              {$product.product_id}: {$product.quantity}
              <br>            
            {/foreach}  
          {/if}        
        {/foreach}
      </td>     
      </td>
      <td>{$order.order_state}</td>      
    </tr>
  {/foreach}  
  </table>
</div>

<!-- Footer -->
{include file="common/footer.tpl"}

