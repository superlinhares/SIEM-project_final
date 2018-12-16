<!-- Header -->
{include file="common/header.tpl"}

<!-- Main -->
<div id="store">
  <header class="store-header">
    <h1 class="page-title">Os Nossos Pratos</h1>
  </header>
  <section id='products'>    
    {foreach from=$products item=$product}
        <article class="product-data">
          <!-- TODO: Acrescentar as descrições dos produtos-->
          <!--Clicar no produto passa para a pg do produto -->
          <span class="dish-label name-label">Nome do prato</span>
          <p class="dish-name">{$product.name}</p> 
          <a class="dish-img" href="{$BASE_URL}/pages/store/list_product.php?productID={$product.id}"><img src="{$BASE_URL}/{$product.img}" alt="{$product.id}"></a>
          <!--TODO: inserir botão de adicionar ao carrinho-->
          <div class="dish-order">
            <span class="dish-label price-label">Preço / unidade</span>
            <span class="dish-price">{$product.price} €</span>
            <label class="dish-label quantity-label" for="quantity">Quantidade</label>
            <input type="text" name="quantity" class="order-quantity" value="1">
            <input type="hidden" name="name" value="{$product.name}">
            <input type="hidden" name="price" value="{$product.price}">
            <input type="submit" class="dish-add-to-cart" name="add_to_cart" value="Adicionar ao Carrinho">
          </div>
        </article>
    {/foreach}    
  </section>
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

