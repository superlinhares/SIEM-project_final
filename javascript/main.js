/// <reference path="../typings/globals/jquery/index.d.ts" />

initMessageOpeners();
initMessageClosers();
showShoppingCart();
hideShoppingCart();
openLoginPopupOnClick();
openSignUpPopupOnClick();
closeLoginPopupOnClick();
closeSignUpPopupOnClick();

function initMessageOpeners() {
  $('#messages').fadeIn(1000);
}

function initMessageClosers() {
  $('#messages').delay(5000).fadeOut(1000);
}

function initMessageClosersOnClick() {
    $('.close').click(function() {
        $(this).parent().fadeOut(1000);
    }) 
}

function showShoppingCart() {
  $('a.shopping-cart').mouseover(function() {
    $('#mini-cart-container').css('display', 'block');
  })
}

function hideShoppingCart() {
  $('#mini-cart-container').mouseleave(function() {
    $('#mini-cart-container').css('display', 'none');
  })
}

function openLoginPopupOnClick() {
  $('#login-popup').click(function() {
    $('#login-modal-wrapper').css('display', 'block');
  })
}

function closeLoginPopupOnClick() {
  $('.close-login').click(function() {
    $('#login-modal-wrapper').css('display', 'none');
  })
}

function openSignUpPopupOnClick() {
  $('#sign-up-popup').click(function() {
    $('#sign-up-modal-wrapper').css('display', 'block');
  })
}

function closeSignUpPopupOnClick() {
  $('.close-sign-up').click(function() {
    $('#sign-up-modal-wrapper').css('display', 'none');
  })
}
 