<?php
/* Smarty version 3.1.33, created on 2019-01-16 12:19:44
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final_2\templates\account\admin\user_data\user_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3f91e0b98472_77231827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15176055ab92397218b4f801a3cae03c4d719a65' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final_2\\templates\\account\\admin\\user_data\\user_data.tpl',
      1 => 1547669844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3f91e0b98472_77231827 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Header -->
<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Main -->			
<div id="admin-users-page" class="default-page">
  <h1 class="page-title">Utilizadores</h1>
  <table class="users-table page-table">
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Email</th>
      <th>Username</th>
      <th>Endereço</th>
      <th>Data de nascimento</th>
      <th>Contacto</th>
      <th>Apagar utilizador</th>
    </tr>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?> 
    <tr> 
      <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['user']->value['real_name'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>   
      <td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['user']->value['dob'];?>
</td>      
      <td><?php echo $_smarty_tpl->tpl_vars['user']->value['tel'];?>
</td>
      <td>        
        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/admin/user/delete_user.php?action=delete&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
          <i class="fas fa-trash" style="color: red"></i>
        </a>
      </td>
    </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
  </table>
</div>

<!-- Footer -->
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
