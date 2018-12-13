<!--<a href="{$BASE_URL}actions/users/logout.php">Logout</a>
<span class="username">{$USERNAME}</span>-->

<li><a href="{$BASE_URL}/pages/account/account.php">Conta</a></li>							
<li>								
    <form action="{$BASE_URL}/actions/users/logout.php" method="POST">
    <button type="submit" name="submit" class="logout">Logout</button>
    </form>
</li>
<li><a href="cart.php" class="shopping-cart"><img src="{$BASE_URL}/img/cart.png" alt="shopping-cart"></a></li>
