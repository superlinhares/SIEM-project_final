<?php
/* Smarty version 3.1.33, created on 2019-01-16 15:18:19
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final_2\templates\account\user\order\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3fbbbb58f7f6_05693661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1425001956bdfd2ba4044ef00cc8dc6e14a5b82e' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final_2\\templates\\account\\user\\order\\order.tpl',
      1 => 1547680616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3fbbbb58f7f6_05693661 (Smarty_Internal_Template $_smarty_tpl) {
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
      <th>Endereço</th>
      <th>Produtos [Quantidade]</th>
      <th>Estado</th>
      <th>Cancelar</th>     						
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
/actions/user/order/cancel_order.php?action=cancel&id=<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
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
</div>

<!-- Footer -->
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
