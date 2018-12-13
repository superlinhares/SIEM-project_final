<!-- Header -->
{include file="common/header.tpl"}

<!-- Main -->			
  <section class="main-container">
    <table>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Preço/unidade (€)</th>
        <th>Stock</th>								
      </tr>
    {foreach from=$products item=$product} 
      <tr> 
        <td>{$product.id}</td>
        <td>{$product.name}</td>
        <td>{$product.description}</td>
        <td>{$product.price}</td>
        <td>{$product.stock}</td>
      </tr>
    {/foreach}  
    </table>

    <div class="update-db">							
      <form method="GET">
        <table>
          <th>ID</th>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Imagem</th>
          <th>Preço/unidade (€)</th>
          <th>Stock</th>								
          <tr>
            <td><input type="text" name="product-id"></td>
            <td><input type="text" name="product-name"></td>
            <td><input type="text" name="product-description"></td>
            <td><input type="text" name="product-img"></td>
            <td><input type="text" name="product-price"></td>
            <td><input type="text" name="product-stock"></td>
          </tr>									
        </table>
        <div class="admin-buttons">
          <button type="submit" name="add" formaction="includes/add_to_warehouse.inc.php">Adicionar</button>
          <button type="submit" name="change" formaction="includes/update_warehouse.inc.php">Alterar</button>
          <button type="submit" name="delete" formaction="includes/delete_from_warehouse.inc.php">Eliminar</button>
        </div>	
      </form>							
    </div>
  </section>

<!-- Footer -->
{include file="common/footer.tpl"}

