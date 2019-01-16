<?php
/* Smarty version 3.1.33, created on 2019-01-15 15:52:00
  from 'C:\Bitnami\wampstack-7.1.25-0\apache2\htdocs\siem_project_final\templates\account\user\password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3e72204ae3f9_46785192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da7cf15f5047b5e17e967009ac16897fcb2e417b' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-7.1.25-0\\apache2\\htdocs\\siem_project_final\\templates\\account\\user\\password.tpl',
      1 => 1547403830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3e72204ae3f9_46785192 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Header -->
<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Main -->			
<div id="warehouse-page">
  <h1 class="page-title">Alterar Password</h1>

  <div class="update-table">							
    <form method="POST" enctype="multipart/form-data">
      <table>
        <th>Password Atual</th>	
        <th>Password Nova</th>	
        <th>Repetir Password Nova</th>						
        <tr>
          <td><input type="password" name="user-password"></td>
          <td><input type="password" name="new-user-password"></td>
          <td><input type="password" name="new-user-password2"></td>
        </tr>									
      </table>
      <div class="admin-buttons">
        <button type="submit" name="change" formaction="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/user/change_password.php">Alterar</button>
      </div>	
    </form>							
  </div>
</div>

<!-- Footer -->
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
