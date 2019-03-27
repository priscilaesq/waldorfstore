$(function(){
$('.thumbnail').on('click', function() {
  var clicked = $(this);
  var newSelection = clicked.data('big');
  var $img = $('.primary').css("background-image","url(" + newSelection + ")");
  clicked.parent().find('.thumbnail').removeClass('selected');
  clicked.addClass('selected');
  $('.primary').empty().append($img.hide().fadeIn('slow'));
});


$('#boton').bind('click', function(){
  $('#overlay').fadeIn(400, function(){
    $('#dialogo').fadeIn();
  });
});

$('#cerrar').bind('click', function(){
  $('#overlay, #dialogo').fadeOut();
  });
});