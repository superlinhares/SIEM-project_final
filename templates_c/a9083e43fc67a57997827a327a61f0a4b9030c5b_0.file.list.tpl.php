<?php
/* Smarty version 3.1.33, created on 2019-01-09 11:04:59
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final\templates\product\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3645dba47e81_91222699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9083e43fc67a57997827a327a61f0a4b9030c5b' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final\\templates\\product\\list.tpl',
      1 => 1547060046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3645dba47e81_91222699 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Header -->
<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Main -->
<div id="store">
  <header class="store-header">
    <h1 class="page-title">Os Nossos Pratos</h1>
  </header>
    <div class="search-bar">
      <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/store/list_products.php" method="get">
        <input type="hidden" name="category_id" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
        <input type="text" name="name" placeholder="nome">
        <input type="text" name="min" placeholder="preço mínimo">
        <input type="text" name="max" placeholder="preço máximo">
        <input type="submit" value="Procurar">
      </form>   
    </div>
  <section id='products'>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
      <article class="product-container">
        <!-- TODO: Acrescentar as descrições dos produtos-->
        <!--Clicar no produto passa para a pg do produto -->
        <span class="dish-label name-label">Nome do prato</span>
        <p class="dish-name"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</p> 
        <a class="dish-img" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/store/list_product.php?productId=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/products/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"></a>
        <form class="dish-order" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/order/add_to_cart.php?action=add&id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" method="POST">
          <span class="dish-label price-label">Preço / unidade</span>
          <span class="dish-price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 €</span>
          <label class="dish-label quantity-label" for="quantity">Quantidade</label>
          <select class="order-quantity" name="quantity" value="1" min="1">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
">
          <input type="hidden" name="price" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
">
          <button type="submit" class="default-button dish-add-to-cart" name="add_to_cart">Adicionar ao Carrinho</button>
        </form>
      </article>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
  </section>
    <div class="pagination">
       <?php if (($_smarty_tpl->tpl_vars['page']->value === 1)) {?>
        <a>&lt;</a>
       <?php } else { ?> 
        <a href="?category_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">&lt;</a>
       <?php }?>  
      <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 
      <a href="?category_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">&gt;</a>
    </div>
</div>

<!--FIXME: Comments only for individual products
<?php if (isset($_smarty_tpl->tpl_vars['USERNAME']->value)) {?>
    <section id="comment_form">
        <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/comment.php" method="post">
            <textarea name="comment" placeholder="Diga algo acerca deste produto"></textarea>
            <input type="submit" value="Comentar">
        </form>
    </section> 
<?php }?> -->

<!-- Footer -->
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
