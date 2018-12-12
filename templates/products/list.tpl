<!-- Header -->
{include file="common/header.tpl"}

<!-- Main -->
<section id='products'>
    <h2>Products</h2>

    {foreach from=$products item=$product}
        <article class="product-data">
            <!-- TODO: Acrescentar as descrições dos produtos-->
            <!--Clicar no produto passa para a pg do produto -->
            <a href="{$BASE_URL}/pages/store/list_product.php?productID={$products.id}"><img src="" alt=""></a>
        </article>
    {/foreach}
   
</section>

{if isset($USERNAME)}
    <section id="comment_form">
        <form action="{$BASE_URL}actions/products/comment.php" method="post">
            <textarea name="comment" placeholder="Diga algo acerca deste produto"></textarea>
            <input type="submit" value="Comentar">
        </form>
    </section> 
{/if}
<!-- Footer -->
{include file="common/footer.tpl"}

