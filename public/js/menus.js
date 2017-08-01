$('#menu').click(function(){
   $('#menu-after').fadeIn();
});

$('.sub-menu').click(function(){
   $('#sub-menu').fadeIn();
});

$('#sub-menu').click(function(){
   $('#sub-menu').fadeOut();
   $('#menu-after').fadeOut();
});

