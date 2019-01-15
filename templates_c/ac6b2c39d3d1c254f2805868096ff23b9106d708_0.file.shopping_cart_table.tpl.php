<?php
/* Smarty version 3.1.33, created on 2019-01-15 05:26:26
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final\templates\shopping_cart\shopping_table\shopping_cart_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3ddf8231dcb3_99755686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac6b2c39d3d1c254f2805868096ff23b9106d708' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final\\templates\\shopping_cart\\shopping_table\\shopping_cart_table.tpl',
      1 => 1547558758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3ddf8231dcb3_99755686 (Smarty_Internal_Template $_smarty_tpl) {
?><table class='store-table'>
  <tr>
    <th>Produto</th>
    <th>Preço</th>
    <th>Quantidade</th>
    <th>Sub-Total</th>
    <th>Remover</th>
  </tr>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SHOPPING_CART']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 €</td>
      <td><?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['productTotal']->value[$_smarty_tpl->tpl_vars['product']->value['id']];?>
 €</td>
      <td>
        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/order/remove_from_cart.php?action=delete&id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
          <i class="fas fa-trash" style="color: red"></i>
        </a>
      </td>	
    </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <tr>
    <td colspan="3" align="right">Total</td>
    <td align="right"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 €</td>
    <td></td>
  </tr>
  <tr>
    <!-- Show checkout button only if the shopping cart is not empty -->
    <td colspan="5">
      <?php if ((isset($_smarty_tpl->tpl_vars['SHOPPING_CART']->value))) {?> 
        <?php if ((count($_smarty_tpl->tpl_vars['SHOPPING_CART']->value) > 0)) {?>
          <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/order/checkout.php" formmethod="GET">  
            <button name="submit" class="checkout">Checkout</button>
          </form>   
        <?php }?>
      <?php }?>
    </td>
  </tr>		
</table><?php }
}
