<table class='store-table'>
  <tr>
    <th>Produto</th>
    <th>Preço</th>
    <th>Quantidade</th>
    <th>Sub-Total</th>
    <th>Remover</th>
  </tr>

  {foreach from=$SHOPPING_CART  item=$product}
    <tr>
      <td>{$product.name}</td>
      <td>{$product.price} €</td>
      <td>
        <select name="{$product.id}-quantity" value="{$product.quantity}">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </td>
      <td>{$productTotal[$product.id]} €</td>
      <td>
        <a href="{$BASE_URL}/actions/order/add_to_cart.php?action=delete&id={$product.id}">
          <i class="fas fa-trash" style="color: red"></i>
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