/// <reference path="../typings/globals/jquery/index.d.ts" />

initMessageOpeners(); //FIXME: perguntar ao restivo

$(document).ready(function() {    
    initMessageClosers();
    initMessageClosersOnClick();
    showShoppingCart();
    hideShoppingCart();
});

function initMessageOpeners(){
  $('.message').fadeIn(1000);
}

function initMessageClosers(){
  $('.message').delay(2000).fadeOut(1000);
}


function initMessageClosersOnClick(){
    $('.close').click(function(){
        $(this).parent().fadeOut(1000);
    }) 
}

function showShoppingCart(){
  $('a.shopping-cart').mouseover(function(){
    $('#mini-cart-container').css('display', 'block');
  })
}

function hideShoppingCart(){
  $('#mini-cart-container').mouseleave(function(){
    $('#mini-cart-container').css('display', 'none');
  })
}

 