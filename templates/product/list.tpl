<!-- Header -->
{include file="common/header.tpl"}

<!-- Main -->
<div id="store">
  <header class="store-header">
    <h1 class="page-title">Os Nossos Pratos</h1>
  </header>
    <div class="search-bar">
      <form action="{$BASE_URL}/pages/store/list_products.php" method="get">
        <input type="hidden" name="category_id" value="{$category.id}">
        <input type="text" name="name" placeholder="nome">
        <input type="text" name="min" placeholder="preço mínimo">
        <input type="text" name="max" placeholder="preço máximo">
        <input type="submit" value="Procurar">
      </form>   
    </div>
  <section id='products'>
    {foreach from=$products item=$product}
      <article class="product-container">
        <!-- TODO: Acrescentar as descrições dos produtos-->
        <!--Clicar no produto passa para a pg do produto -->
        <span class="dish-label name-label">Nome do prato</span>
        <p class="dish-name">{$product.name}</p> 
        <a class="dish-img" href="{$BASE_URL}/pages/store/list_product.php?productId={$product.id}"><img src="{$BASE_URL}/img/products/{$product.id}.jpg" alt="{$product.name}"></a>
        <form class="dish-order" action="{$BASE_URL}/actions/order/add_to_cart.php?action=add&id={$product.id}" method="POST">
          <span class="dish-label price-label">Preço / unidade</span>
          <span class="dish-price">{$product.price} €</span>
          <label class="dish-label quantity-label" for="quantity">Quantidade</label>
          <select class="order-quantity" name="quantity" value="1" min="1">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          <input type="hidden" name="name" value="{$product.name}">
          <input type="hidden" name="price" value="{$product.price}">
          <button type="submit" class="default-button dish-add-to-cart" name="add_to_cart">Adicionar ao Carrinho</button>
        </form>
      </article>
    {/foreach}    
  </section>
    <div class="pagination">
       {if ($page === 1)}
        <a>&lt;</a>
       {else} 
        <a href="?category_id={$category.id}&page={$page-1}">&lt;</a>
       {/if}  
      {$page} 
      <a href="?category_id={$category.id}&page={$page+1}">&gt;</a>
    </div>
</div>

<!--FIXME: Comments only for individual products
{if isset($USERNAME)}
    <section id="comment_form">
        <form action="{$BASE_URL}actions/products/comment.php" method="post">
            <textarea name="comment" placeholder="Diga algo acerca deste produto"></textarea>
            <input type="submit" value="Comentar">
        </form>
    </section> 
{/if} -->

<!-- Footer -->
{include file="common/footer.tpl"}

