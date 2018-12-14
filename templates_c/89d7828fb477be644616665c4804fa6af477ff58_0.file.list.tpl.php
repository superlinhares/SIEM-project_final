<?php
/* Smarty version 3.1.33, created on 2018-12-14 18:42:56
  from 'C:\inetpub\wwwroot\project_final\templates\products\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c13cf8025aeb7_41367728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89d7828fb477be644616665c4804fa6af477ff58' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\project_final\\templates\\products\\list.tpl',
      1 => 1544801593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c13cf8025aeb7_41367728 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Header -->
<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Main -->
<section id='products'>
    <h2>Produtos</h2>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
        <article class="product-data">
            <!-- TODO: Acrescentar as descrições dos produtos-->
            <!--Clicar no produto passa para a pg do produto -->
            <h2 class="selected-dish-labels">Nome do prato</h2>		
            <p class="selected-dish-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</p> 
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/store/list_product.php?productID=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"></a>
        </article>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   
</section>

<?php if (isset($_smarty_tpl->tpl_vars['USERNAME']->value)) {?>
    <section id="comment_form">
        <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/comment.php" method="post">
            <textarea name="comment" placeholder="Diga algo acerca deste produto"></textarea>
            <input type="submit" value="Comentar">
        </form>
    </section> 
<?php }?>
<!-- Footer -->
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
