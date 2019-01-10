<?php
/* Smarty version 3.1.33, created on 2019-01-10 08:39:03
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final\templates\about\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c377527ac49f4_58631436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '022734804df21c44280f79c0cd69fae13d9c41f7' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final\\templates\\about\\about.tpl',
      1 => 1545647735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c377527ac49f4_58631436 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Header -->
<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Main -->
<section id="about">
	<header class="about-header">
		<h1 class="page-title">Sobre Nós</h1>
	</header>
	<section id="information">
		<article>
			<p class="about-title">Quem nós somos?</p>
			<p class="about-text">
				A Marmita da Rita é um serviço de entrega de refeições que oferece alimentos de qualidade, saudáveis ​​e frescos, que são congruentes com os objetivos da forma corporal.
				<br><br>
				Preparado pelos nossos chefs especializados, a nossa comida é entregue numa morada à sua escolha, duas vezes por semana, pela nossa transportadora de confiança! Temos uma grande variedade de refeições para você selecionar, mudada mensalmente. A Marmita da Rita elimina todo o stress do planeamento, compras, contar calorias, cozinhar e limpar. Permitindo que você se concentre nas coisas mais importantes da vida.
				<br><br>
				Se você está à procura de ganhar massa muscular, perder peso ou simplesmente viver um estilo de vida mais saudável e equilibrado, A Marmita da Rita é a maneira mais conveniente, acessível e agradável de obter resultados duradouros.
				<br><br>
				Nós transformamos a tarefa da dieta numa experiência prazerosa, fácil e deliciosa.
			</p>
		</article>

		<article>
			<img class="about-img" alt="Roda Alimentar" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/about-food.jpg">
		</article>
	</section>
</section>

<!-- Footer -->
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
