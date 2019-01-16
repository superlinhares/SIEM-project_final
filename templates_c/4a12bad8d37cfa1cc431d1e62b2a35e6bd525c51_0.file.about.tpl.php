<?php
/* Smarty version 3.1.33, created on 2019-01-16 13:37:04
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final_2\templates\about\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3fa400b70155_45394252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a12bad8d37cfa1cc431d1e62b2a35e6bd525c51' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final_2\\templates\\about\\about.tpl',
      1 => 1547558883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3fa400b70155_45394252 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Header -->
<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Main -->
<section id="about">
	<header class="about-header">
		<h1 class="page-title">Sobre Nós</h1>
	</header>
	<section id="about-first-section">
    <div class="first-section-left">
      <article class="about-info">
        <h1>Quem nós somos?</h1>
        <br><br>
			  <p>
          A Marmita da Rita é um serviço de entrega de refeições que oferece alimentos de qualidade, saudáveis ​​e frescos, que são congruentes com os objetivos da forma corporal.
          <br><br>
          Preparado pelos nossos chefs especializados, a nossa comida é entregue numa morada à sua escolha, duas vezes por semana, pela nossa transportadora de confiança! Temos uma grande variedade de refeições para você selecionar, mudada mensalmente. A Marmita da Rita elimina todo o stress do planeamento, compras, contar calorias, cozinhar e limpar. Permitindo que você se concentre nas coisas mais importantes da vida.
          <br><br>
          Se você está à procura de ganhar massa muscular, perder peso ou simplesmente viver um estilo de vida mais saudável e equilibrado, A Marmita da Rita é a maneira mais conveniente, acessível e agradável de obter resultados duradouros.
          <br><br>
          Nós transformamos a tarefa da dieta numa experiência prazerosa, fácil e deliciosa.
        </p>
		  </article>

      <article class="siem">
        <h1>SIEM - Documentação</h1>
        <br><br>
        <h2>Admin login</h2>
        <br>
        <h3>username: admin</h3>
        <h3>password: password</h3>
        <br>
        <h2>User login</h2>
        <br>
        <h3>username: user</h3>
        <h3>password: password</h3>
        <br>
        <h2>Código + Mockup</h2>
        <br>
        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/siem_files/codigo_mockup.zip" download><i class="fas fa-download" style="color: #83BB66; font-size: 4em"></i></a>        
      </article>   
    </div>		
    <div class="first-section-right">
			<img class="first-section-img" alt="Roda Alimentar" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/about-food.jpg">
		</div>	
  </section>
</section>

<!-- Footer -->
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
