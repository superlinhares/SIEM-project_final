<?php
/* Smarty version 3.1.33, created on 2018-12-20 01:47:34
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final\templates\home\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1b65361baf65_79297401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7cee60df8d3812d1d0d070d2f53a7507f0cd968' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final\\templates\\home\\home.tpl',
      1 => 1545299092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c1b65361baf65_79297401 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Header -->
<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Main -->
<div id="home">	
	<section id="home-first-section">
		<p class="first-p">Dietas personalizadas e sem trabalho!</p>

		<div class="small-container">
			<p>Entregas em todo o país!</p>
		</div>
		
		<p class="second-p">Comida deliciosa e saudável entregue à sua porta!</p>

		<a href="store.php" class="order-button"><button class="default-button">Fazer Pedido</button></a> 
		
	</section>

	<section id="home-second-section">
    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/online.png" alt="Online" class="col-img first-col-img">
    <span class="first-col-subtitle">Encomenda Online</span>    

    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/delivery-truck.png" alt="Delivery" class="col-img second-col-img">
    <span class="second-col-subtitle">Entregue em menos de 24h</span>    

    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/chef.png" alt="Chef" class="col-img third-col-img">
    <span class="third-col-subtitle">Preparado pelos melhores chefs</span>    

    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/microwave-oven.png" alt="Microwave" class="col-img forth-col-img">
    <span class="forth-col-subtitle">Aquecer e comer - Pronto em menos de 3 minutos</span>		    
	</section>

	<section class="social">
		
	</section>		
</div>

<!-- Footer -->
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
