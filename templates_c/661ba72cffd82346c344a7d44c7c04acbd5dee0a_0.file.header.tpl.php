<?php
/* Smarty version 3.1.33, created on 2019-01-10 08:37:19
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final\templates\common\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3774bf904214_61023431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '661ba72cffd82346c344a7d44c7c04acbd5dee0a' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final\\templates\\common\\header.tpl',
      1 => 1547138203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/menu_logged_in.tpl' => 1,
    'file:common/logged_out/menu_logged_out.tpl' => 1,
    'file:shopping_cart/shopping_table/shopping_cart_table.tpl' => 1,
  ),
),false)) {
function content_5c3774bf904214_61023431 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Marmita da Rita</title>
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/groceries.png">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/style_reset.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/style_common.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/style_pages.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/style_about.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/style_contacts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/style_faq.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/style_effects.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/style_popup.css">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto+Condensed|" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <!-- jQuery integration -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-2.2.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/javascript/main.js" defer><?php echo '</script'; ?>
>

  </head>
  <body>
    <div id="container">
      <header id="header">                
        <div id="logo">
          <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">
            <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/logo.png">		
          </a>     
        </div>
        <nav id="nav">                  						
          <ul>	
            <!-- TODO: Fazer isto compatível com a nova estrutura -->						          
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/about/about.php">Sobre</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/store/list_categories.php">Loja</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/contacts/contacts.php">Contactos</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/faq/faq.php">FAQ</a></li>
            <!-- Select wich menu to show -->
            <?php if (isset($_smarty_tpl->tpl_vars['USERNAME']->value)) {?>
                <?php $_smarty_tpl->_subTemplateRender("file:common/menu_logged_in.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender("file:common/logged_out/menu_logged_out.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
            <li>
              <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/shopping_cart/shopping_cart.php" class="shopping-cart">
                <i class="fas fa-shopping-cart shopping-cart"> [<?php echo $_smarty_tpl->tpl_vars['cartSize']->value;?>
]</i> 
              </a>  
            </li>
          </ul>
        </nav>
        <div id="mini-cart-container">
            <div class="products-container">
              <?php $_smarty_tpl->_subTemplateRender("file:shopping_cart/shopping_table/shopping_cart_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div> 
             
        <!-- The code that displays error messages will be executed in every single page -->
        <section id="messages">
          <?php if ((isset($_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value))) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
              <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 <!--<a class="close" href="#">&#215;</a>--></div> <!--TODO: delete close later -->                        
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php }?>

          <?php if (isset($_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value, 'success');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['success']->value) {
?>                           
              <div class="success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>                                               
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php }?>                
        </section>                
      </header>

      <!-- Beginning of content -->
      <div id="content">
<?php }
}
