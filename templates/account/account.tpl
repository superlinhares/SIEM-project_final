<!-- Header -->
{include file="common/header.tpl"}

<!-- Main -->
{if isset($ADMIN)}
    {include file="account/admin/admin_menu.tpl"}
{else}
    {include file="account/user/user_menu.tpl"}
{/if}

<!-- Footer -->
{include file="common/footer.tpl"}