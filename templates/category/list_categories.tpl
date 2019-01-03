<!-- Header -->
{include file="common/header.tpl"}

<!-- Main -->
<div id="store">
  <header class="store-header">
    <h1 class="page-title">Categorias</h1> 
  </header>
  <section id='categories'>    
    {foreach from=$categories item=$category}
      <article class="category-container">
        <!--Clicar na categoria passa para a pg do produto -->     
        <a class="category" href="{$BASE_URL}/pages/store/list_products.php?category_id={$category.id}">{$category.name}</a>
      </article>
    {/foreach}    
  </section>
</div>

<!-- Footer -->
{include file="common/footer.tpl"}

