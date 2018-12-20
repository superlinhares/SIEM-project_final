<?php
/* Smarty version 3.1.33, created on 2018-12-20 11:13:23
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final\templates\contacts\contacts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1be9d3d89b06_19790096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dba637ea531cbd49c90e07b8c606c269a856b594' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final\\templates\\contacts\\contacts.tpl',
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
function content_5c1be9d3d89b06_19790096 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Header -->
<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Main -->
	<section class="contact-intro">
		<p class="intro-name">A Marmita da Rita</p>
		<p class="intro-subname">Entre em Contacto Connosco</p>
	</section>

	<section class="contact-map">
		<a href="https://www.google.pt/maps/place/FEUP+-+Faculdade+de+Engenharia+da+Universidade+do+Porto/@41.1779401,-8.5998763,17z/data=!4m5!3m4!1s0xd246440e3780045:0x405225b4b451f7d7!8m2!3d41.1779401!4d-8.5976876" target="_blank"><img class="mapa" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/mapa.png"></a>
	</section>
	<section class="contact-info">

		<p class="contact-details-header">A Marmita da Rita</p>
		<p class="contact-details">R. Dr. Roberto Frias</p>
		<p class="contact-details">4200-465 Porto</p>
		<p class="contact-details">+352 223 456 789</p>
		<p class="contact-details">contacto@amarmitadarita.pt</p>
		<p class="contact-details-header">
			<a href="https://facebook.com" target="_blank"><img class="social-logo" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/face.png"></a>
			<a href="https://instagram.com" target="_blank"><img class="social-logo" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/insta.png"></a>
			<a href="https://linkedin.com" target="_blank"><img class="social-logo" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/in.png"></a>
		</p>
	</section>

<!-- Footer -->
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
