<!-- Header -->
{include file="common/header.tpl"}

<!-- Main -->			
<div id="warehouse-page">
  <h1 class="page-title">Armazém</h1>
  <table class="warehouse-table">
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Categoria</th>
      <th>Descrição</th>
      <th>Preço/unidade (€)</th>
      <th>Stock</th>								
    </tr>
  {foreach from=$products item=$product} 
    <tr> 
      <td>{$product.id}</td>
      <td>{$product.name}</td>
      <td>{$categories[$product.cat_id-1].name}</td>
      <td>{$product.description}</td>
      <td>{$product.price}</td>
      <td>{$product.stock}</td>
    </tr>
  {/foreach}  
  </table>

  <div class="update-table">							
    <form method="POST" enctype="multipart/form-data">
      <table>
        <th>ID</th>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Descrição</th>
        <th>Imagem</th>
        <th>Preço/unidade (€)</th>
        <th>Stock</th>								
        <tr>
          <td><input type="text" name="product-id"></td>
          <td><input type="text" name="product-name"></td>
          <td><input type="text" name="product-category"></td>
          <td><input type="text" name="product-description"></td>
          <td><input type="file" name="product-img"></td>
          <td><input type="text" name="product-price"></td>
          <td><input type="text" name="product-stock"></td>
        </tr>									
      </table>
      <div class="admin-buttons">
        <button type="submit" name="add" formaction="{$BASE_URL}/actions/admin/warehouse/add_to_warehouse.php">Adicionar</button>
        <button type="submit" name="change" formaction="{$BASE_URL}/actions/admin/warehouse/update_warehouse.php">Alterar</button>
        <button type="submit" name="delete" formaction="{$BASE_URL}/actions/admin/warehouse/delete_from_warehouse.php">Eliminar</button>
      </div>	
    </form>							
  </div>
</div>

<!-- Footer -->
{include file="common/footer.tpl"}

