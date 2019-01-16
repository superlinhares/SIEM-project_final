<?php
/* Smarty version 3.1.33, created on 2019-01-16 12:19:51
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final_2\templates\account\admin\warehouse\warehouse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3f91e7d28291_55878804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25f0df13ccd1a39d73775f772978986b1f03b34e' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final_2\\templates\\account\\admin\\warehouse\\warehouse.tpl',
      1 => 1547669904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3f91e7d28291_55878804 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Header -->
<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Main -->			
<div id="warehouse-page" class="default-page">
  <h1 class="page-title">Armazém</h1>
  <table class="warehouse-table page-table">
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Categoria</th>
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
      <td><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['product']->value['cat_id']-1]['name'];?>
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

  <div class="update-table">							
    <form method="POST" enctype="multipart/form-data">
      <table>
        <th>ID</th>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Descrição</th>
        <th>Imagem</th>
        <th>Preço/unidade (€)</th>
        <th>Stock</th>								
        <tr>
          <td><input type="text" name="product-id"></td>
          <td><input type="text" name="product-name"></td>
          <td><input type="text" name="product-category"></td>
          <td><input type="text" name="product-description"></td>
          <td><input type="file" name="product-img"></td>
          <td><input type="text" name="product-price"></td>
          <td><input type="text" name="product-stock"></td>
        </tr>									
      </table>
      <div class="admin-buttons">
        <button type="submit" name="add" formaction="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/admin/warehouse/add_to_warehouse.php">Adicionar</button>
        <button type="submit" name="change" formaction="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/admin/warehouse/update_warehouse.php">Alterar</button>
        <button type="submit" name="delete" formaction="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/admin/warehouse/delete_from_warehouse.php">Eliminar</button>
      </div>	
    </form>							
  </div>
</div>

<!-- Footer -->
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
