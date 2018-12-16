<?php
/* Smarty version 3.1.33, created on 2018-12-16 20:04:36
  from 'C:\inetpub\wwwroot\project_final\templates\home\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1685a40dab41_58875847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '725d0dfe7154713f661a4da30d8ae58d1231ad04' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\project_final\\templates\\home\\home.tpl',
      1 => 1544979846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c1685a40dab41_58875847 (Smarty_Internal_Template $_smarty_tpl) {
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

		<a href="store.php" class="order-button"><button class="default-button">Fazer Pedido</button></a> <!-- FIXME: posição do botão ao fazer scroll -->
		
	</section>

	<section id="home-second-section">
    <div class="first-col">
			<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/online.png" alt="Online" class="div-img">
      <p class="div-p">Encomenda Online</p>    
    </div>

    <div class="second-col">
			<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/delivery-truck.png" alt="Delivery" class="div-img">
      <p class="div-p">Entregue em menos de 24h</p>    
    </div>

    <div class="third-col">
      <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/chef.png" alt="Chef" class="div-img">
      <p class="div-p">Preparado pelos melhores chefs</p>    
    </div>   

    <div class="forth-col">
			<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/microwave-oven.png" alt="Microwave" class="div-img">
      <p class="div-p">Aquecer e comer - Pronto em menos de 3 minutos</p>		    
    </div>		
	</section>

	<section class="social">
		
	</section>		
</div>

<!-- Footer -->
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
