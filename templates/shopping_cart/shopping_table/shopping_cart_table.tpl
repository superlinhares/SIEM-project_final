<table class='store-table'>
  <tr>
    <th width="40%">Produto</th>
    <th width="10%">Quantidade</th>
    <th width="20%">Preço</th>
    <th width="15%">Sub-Total</th>
    <th width="5%">Ação</th>
  </tr>

  {foreach from=$SHOPPING_CART  item=$product}
    <tr>
      <td>{$product.name}</td>
      <td>{$product.quantity}</td>			
      <td>{$product.price} €</td>
      <td>{$productTotal[$product.id]} €</td>
      <td>
        <a href="{$BASE_URL}/actions/order/add_to_cart.php?action=delete&id={$product.id}">
          <div class="btn-danger">Remove</div>
        </a>
      </td>	
    </tr>
  {/foreach}
  <tr>
    <td colspan="3" align="right">Total</td>
    <td align="right">{$total} €</td>
    <td></td>
  </tr>
  <tr>
    <!-- Show checkout button only if the shopping cart is not empty -->
    <td colspan="5">
  {if (isset($SHOPPING_CART))} 
    {if (count($SHOPPING_CART) > 0)}
        <form action="includes/checkout.inc.php" formmethod="GET">  <!--FIXME: form action --> 
          <button name="submit" class="checkout">Checkout</button>
        </form>   
    {/if}
  {/if}
    </td>
  </tr>		
</table>