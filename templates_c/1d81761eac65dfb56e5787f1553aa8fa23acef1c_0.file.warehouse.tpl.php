<?php
/* Smarty version 3.1.33, created on 2018-12-14 17:03:07
  from 'C:\inetpub\wwwroot\project_final\templates\account\admin\warehouse\warehouse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c13b81b499383_84848290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d81761eac65dfb56e5787f1553aa8fa23acef1c' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\project_final\\templates\\account\\admin\\warehouse\\warehouse.tpl',
      1 => 1544737213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c13b81b499383_84848290 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Header -->
<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Main -->			
  <section class="main-container">
    <table>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Preço/unidade (€)</th>
        <th>Stock</th>								
      </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?> 
      <tr> 
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['stock'];?>
</td>
      </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
    </table>

    <div class="update-db">							
      <form method="GET">
        <table>
          <th>ID</th>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Imagem</th>
          <th>Preço/unidade (€)</th>
          <th>Stock</th>								
          <tr>
            <td><input type="text" name="product-id"></td>
            <td><input type="text" name="product-name"></td>
            <td><input type="text" name="product-description"></td>
            <td><input type="text" name="product-img"></td>
            <td><input type="text" name="product-price"></td>
            <td><input type="text" name="product-stock"></td>
          </tr>									
        </table>
        <div class="admin-buttons">
          <button type="submit" name="add" formaction="includes/add_to_warehouse.inc.php">Adicionar</button>
          <button type="submit" name="change" formaction="includes/update_warehouse.inc.php">Alterar</button>
          <button type="submit" name="delete" formaction="includes/delete_from_warehouse.inc.php">Eliminar</button>
        </div>	
      </form>							
    </div>
  </section>

<!-- Footer -->
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
