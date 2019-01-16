<!-- Header -->
{include file="common/header.tpl"}

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
  {foreach from=$users item=$user} 
    <tr> 
      <td>{$user.id}</td>
      <td>{$user.real_name}</td>
      <td>{$user.email}</td>   
      <td>{$user.username}</td>
      <td>{$user.address}</td>
      <td>{$user.dob}</td>      
      <td>{$user.tel}</td>
      <td>        
        <a href="{$BASE_URL}/actions/admin/user/delete_user.php?action=delete&id={$user.id}">
          <i class="fas fa-trash" style="color: red"></i>
        </a>
      </td>
    </tr>
  {/foreach}  
  </table>
</div>

<!-- Footer -->
{include file="common/footer.tpl"}

