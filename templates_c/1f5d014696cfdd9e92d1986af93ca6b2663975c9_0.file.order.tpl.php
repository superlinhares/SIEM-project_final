<?php
/* Smarty version 3.1.33, created on 2019-01-16 15:29:54
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final_2\templates\account\admin\order\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3fbe72967625_62912851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f5d014696cfdd9e92d1986af93ca6b2663975c9' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final_2\\templates\\account\\admin\\order\\order.tpl',
      1 => 1547679124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3fbe72967625_62912851 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Header -->
<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Main -->			
<div id="order-page" class="default-page">
  <h1 class="page-title">Encomendas</h1>
  <table class="order-table page-table">
    <tr>
      <th>ID</th>
      <th>Data</th>
      <th>Username</th>
      <th>Endereço</th>
      <th>Produtos [Quantidade]</th>
      <th>Estado</th>
      <th>Confirmar / Enviar / Remover</th>
    </tr>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?> 
    <tr> 
      <td><?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['order']->value['order_date'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['order']->value['username'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['order']->value['address'];?>
</td>
      <td>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ordersProducts']->value, 'orderProducts');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['orderProducts']->value) {
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderProducts']->value, 'products');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['products']->value) {
?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                <?php if (($_smarty_tpl->tpl_vars['product']->value['order_id'] === $_smarty_tpl->tpl_vars['order']->value['id'])) {?>
                  <?php echo $_smarty_tpl->tpl_vars['allProducts']->value[$_smarty_tpl->tpl_vars['product']->value['product_id']-1]['name'];?>
 [<?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>
]
                  <br><br>
                <?php }?>           
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>            
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </td>      
      <td><?php echo $_smarty_tpl->tpl_vars['order']->value['order_state'];?>
</td>
      <td>
        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/admin/order/confirm_order.php?action=confirm&id=<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
">
          <i class="fas fa-check-circle" style="color: green"></i>
        </a>
        &nbsp;
        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/admin/order/ship_order.php?action=ship&id=<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
">
          <i class="fas fa-shipping-fast" style="color: orange"></i>
        </a>
        &nbsp;
        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/admin/order/delete_order.php?action=delete&id=<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
">
          <i class="fas fa-trash" style="color: red"></i>
        </a>
      </td>
    </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
  </table>

<!-- Footer -->
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
