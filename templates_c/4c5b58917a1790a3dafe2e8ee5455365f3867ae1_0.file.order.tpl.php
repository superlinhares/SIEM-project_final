<?php
/* Smarty version 3.1.33, created on 2019-01-15 10:14:39
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final\templates\account\admin\order\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3e230fa4f7e1_03921091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c5b58917a1790a3dafe2e8ee5455365f3867ae1' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final\\templates\\account\\admin\\order\\order.tpl',
      1 => 1547576077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3e230fa4f7e1_03921091 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Header -->
<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Main -->			
<div id="order-page">
  <h1 class="page-title">Encomendas</h1>
  <table class="order-table">
    <tr>
      <th>ID</th>
      <th>Data</th>
      <th>Username</th>
      <th>Endereço</th>
      <th>Produtos</th>
      <th>Estado</th>
      <th>Confirmar / Remover</th>
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
          <?php if (($_smarty_tpl->tpl_vars['orderProducts']->value['order_id'] == $_smarty_tpl->tpl_vars['order']->value['id'])) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderProducts']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
              <?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
: <?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>

              <br>            
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
          <?php }?>        
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
