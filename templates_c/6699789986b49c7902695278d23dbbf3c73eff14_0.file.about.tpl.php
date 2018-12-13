<?php
/* Smarty version 3.1.33, created on 2018-12-13 20:26:13
  from 'C:\inetpub\wwwroot\project_final\templates\about\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c129635226b33_40900272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6699789986b49c7902695278d23dbbf3c73eff14' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\project_final\\templates\\about\\about.tpl',
      1 => 1544718832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c129635226b33_40900272 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Header -->
<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Main -->
<section class="about-intro">
		<p class="intro-name">A Marmita da Rita</p>
		<p class="intro-subname">Sobre Nós</p>
	</section>
	<section class="about-wrap-left">
		<p class="about-header">Quem nós somos?</p>
		<p class="about-info">
			A Marmita da Rita é um serviço de entrega de refeições que oferece alimentos de qualidade, saudáveis ​​e frescos, que são congruentes com os objetivos da forma corporal.
			<br><br>
			Preparado pelos nossos chefs especializados, a nossa comida é entregue numa morada à sua escolha, duas vezes por semana, pela nossa transportadora de confiança! Temos uma grande variedade de refeições para você selecionar, mudada mensalmente. A Marmita da Rita elimina todo o stress do planeamento, compras, contar calorias, cozinhar e limpar. Permitindo que você se concentre nas coisas mais importantes da vida.
			<br><br>
			Se você está à procura de ganhar massa muscular, perder peso ou simplesmente viver um estilo de vida mais saudável e equilibrado, A Marmita da Rita é a maneira mais conveniente, acessível e agradável de obter resultados duradouros.
			<br><br>
			Nós transformamos a tarefa da dieta numa experiência prazerosa, fácil e deliciosa.
		</p>
	</section>

	<section class="about-wrap-right">
		<img class="about-img" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/about-food.jpg">
	</section>

<!-- Footer -->
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
