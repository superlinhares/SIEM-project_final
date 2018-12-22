<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Marmita da Rita</title>
    <link rel="shortcut icon" href="{$BASE_URL}/img/groceries.png">
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}/css/style_reset.css">
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}/css/style_common.css">
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}/css/style_pages.css">
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}/css/style_effects.css">
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}/css/style_popup.css">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto+Condensed|" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <!-- jQuery integration -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="{$BASE_URL}/javascript/main.js" defer></script>

  </head>
  <body>
    <div id="container">
      <header id="header">                
        <div id="logo">
          <a href="{$BASE_URL}">
            <img class="logo" src="{$BASE_URL}/img/logo.png">		
          </a>     
        </div>
        <nav id="nav">                  						
          <ul>	
            <!-- TODO: Fazer isto compatível com a nova estrutura -->						          
            <li><a href="{$BASE_URL}/pages/about/about.php">Sobre</a></li>
            <li><a href="{$BASE_URL}/pages/store/list_all.php">Loja</a></li>
            <li><a href="{$BASE_URL}/pages/contacts/contacts.php">Contactos</a></li>
            <li><a href="{$BASE_URL}/pages/faq/faq.php">FAQ</a></li>
            <!-- Select wich menu to show -->
            {if isset($USERNAME)}
                {include file="common/menu_logged_in.tpl"}
            {else}
                {include file="common/logged_out/menu_logged_out.tpl"}
            {/if}
            <li>
              <a href="{$BASE_URL}/pages/shopping_cart/shopping_cart.php" class="shopping-cart">
                <i class="fas fa-shopping-cart shopping-cart"> [{$cartSize}]</i> 
              </a>  
            </li>
          </ul>
        </nav>
        <div id="mini-cart-container">
            <div class="products-container">
              {include file="shopping_cart/shopping_table/shopping_cart_table.tpl"}
            </div>
        </div> 
             
        <!-- The code that displays error messages will be executed in every single page -->
        <section id="messages">
          {if (isset($ERROR_MESSAGES))}
            {foreach $ERROR_MESSAGES as $error}
              <div class="error">{$error} <!--<a class="close" href="#">&#215;</a>--></div> <!--TODO: delete close later -->                        
            {/foreach}
          {/if}

          {if isset($SUCCESS_MESSAGES)}
            {foreach $SUCCESS_MESSAGES as $success}                           
              <div class="success">{$success}</div>                                               
            {/foreach}
          {/if}                
        </section>                
      </header>

      <!-- Beginning of content -->
      <div id="content">
