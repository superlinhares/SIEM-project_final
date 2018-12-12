<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>A Marmita da Rita</title>
        <link rel="shortcut icon" href="{$BASE_URL}/img/groceries.png">
	    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto+Condensed|" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{$BASE_URL}/css/styles.css">
        <!-- jQuery integration -->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="{$BASE_URL}javascript/main.js" defer></script>
 
    </head>
    <body>

        <header>
            <a href="{$BASE_URL}">
                <img class="logo" src="{$BASE_URL}/img/logo.png">			
            </a>
            <div class="tab">
                <nav>									
                    <ul>	
                        <!-- TODO: Fazer isto compatível com a nova estrutura -->						          
                        <li><a href="{$BASE_URL}/pages/about/about.php">Sobre</a></li>
                        <li><a href="{$BASE_URL}/pages/store/list_all.php">Loja</a></li>
                        <li><a href="{$BASE_URL}/pages/contact/contact.php">Contactos</a></li>
                        <li><a href="{$BASE_URL}/pages/faq/faq.php">FAQ</a></li>
                        <!-- FIXME: Select wich menu to show -->
                        {if isset($USERNAME)}
                            {include file="common/menu_logged_in.tpl"}
                        {else}
                            {include file="common/menu_logged_out.tpl"}
                        {/if}
                    </ul>					       
                </nav>
            </div>	
         
            <!-- The code that displays error messages will be executed in every single page -->
            <section id="messages">
                {if (isset($ERROR_MESSAGES))}
                    {foreach $ERROR_MESSAGES as $error}
                        <div class="error">{$error} <a class="close" href="#">&#215;</a></div>                        
                    {/foreach}
                {/if}

                {if isset($SUCCESS_MESSAGES)}
                    {foreach $SUCCESS_MESSAGES as $success}
                        <div class="success">{$success} <a class="close" href="#">&#215;</a></div>                        
                    {/foreach}
                {/if}                
            </section> 

        </header>
	    <div id="container">
		