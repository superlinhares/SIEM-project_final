<?php
/* Smarty version 3.1.33, created on 2018-12-13 18:25:27
  from 'C:\inetpub\wwwroot\project_final\templates\home\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1279e7a9da15_84684765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '725d0dfe7154713f661a4da30d8ae58d1231ad04' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\project_final\\templates\\home\\home.tpl',
      1 => 1544714723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c1279e7a9da15_84684765 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Header -->
<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Main -->
<div id="home">	
	<section class="home-first-section">
		<p class="first_p">Dietas personalizadas e sem trabalho!</p>

		<div class="small-container">
			<p>Entregas em todo o país!</p>
		</div>
		
		<p class="second_p">Comida deliciosa e saudável entregue à sua porta!</p>

		<a href="store.php"><button>Fazer Pedido</button></a>
		
	</section>
	<section class="home-second-section">
		<ul class="image-list">
			<li class="image-inline"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/online.png" alt="Online" class="list-img"><br>Encomenda Online</li>
			<li class="image-inline"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/delivery-truck.png" alt="Delivery" class="list-img"><br>Entregue em menos de 24h</li>
			<li class="image-inline"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/chef.png" alt="Chef" class="list-img"><br><br>Preparado pelos melhores chefs</li>
			<li class="image-inline"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/microwave-oven.png" alt="Microwave" class="list-img"><br>Aquecer e comer - Pronto em menos de 3 minutos</li>
		</ul>		
	</section>

	<section class="social">
		
	</section>
		
</div>

<!-- Footer -->
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
