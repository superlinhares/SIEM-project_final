<?php
/* Smarty version 3.1.33, created on 2019-01-04 10:17:41
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final\templates\category\list_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2fa345b29651_91780839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8de29d2a4dcea17113fbb68088527a08b945a4c8' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final\\templates\\category\\list_categories.tpl',
      1 => 1546625854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c2fa345b29651_91780839 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Header -->
<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Main -->
<div id="store">
  <header class="store-header">
    <h1 class="page-title">Categorias</h1> 
  </header>
  <section id='categories'>    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/store/list_products.php?category_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
      <div class="category-container">
        <!--Clicar na categoria passa para a pg do produto -->     
        <h1><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</h1>
      </div>
    </a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
  </section>
</div>

<!-- Footer -->
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
