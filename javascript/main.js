initMessageOpeners();

$(document).ready(function() {    
    initMessageClosers();
    initMessageClosersOnClick();
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

 