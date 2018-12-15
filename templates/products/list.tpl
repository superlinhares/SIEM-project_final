<!-- Header -->
{include file="common/header.tpl"}

<!-- Main -->
<section id='products'>
    <h1>Produtos</h1>

    {foreach from=$products item=$product}
        <article class="product-data">
            <!-- TODO: Acrescentar as descrições dos produtos-->
            <!--Clicar no produto passa para a pg do produto -->
            <!--<h2 class="selected-dish-labels">Nome do prato</h2>-->
            <h2 class="dish-name">{$product.name}</h2> 
            <a class="dish-img" href="{$BASE_URL}/pages/store/list_product.php?productID={$product.id}"><img src="{$BASE_URL}/{$product.img}" alt="{$product.id}"></a>
            <!--TODO: insesir botão de adicionar ao carrinho-->
            <div class="dish-order">
              <h2 class="dish-label">Preço / unidade</h2>
              <p class="dish-label">{$product.price} €</p>
              <label for="quantity">Quantidade</label>
              <input type="text" name="quantity" class="product-quantity" value="1">
              <input type="hidden" name="name" value="{$product.name}">
              <input type="hidden" name="price" value="{$product.price}">
              <input type="submit" name="add_to_cart" value="Adicionar ao Carrinho">
            </div>
        </article>
    {/foreach}
   
</section>

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

