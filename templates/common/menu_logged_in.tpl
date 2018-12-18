<li><a href="{$BASE_URL}/pages/account/account.php">Conta</a></li>							
<li>								
    <a href="{$BASE_URL}/actions/users/logout.php">Logout</a>
    <span class="username">{$USERNAME}</span>
</li>
<li>
  <a href="{$BASE_URL}/pages/shopping_cart/shopping_cart.php" class="shopping-cart">
    <i class="fas fa-shopping-cart shopping-cart"> [{$cartSize}]</i> 
  </a>  
</li>
<div id="mini-cart-container" style="display:none; position:fixed; width=100%;">
    <div class="products-container">
      {include file="shopping_cart/shopping_table/shopping_cart_table.tpl"}
    </div>
</div>
