$(document).ready(function() {
  $('.plusInfo').click(function(event) {
    event.preventDefault();
    $(this).closest('.fiche').find('.hiddenInfo').show();
    $(this).hide();
  });
  $('.fermerInfo').click(function(event) {
    event.preventDefault();
    $(this).closest('.hiddenInfo').hide();
    $(this).closest('.fiche').find('.plusInfo').show();
  });

  $(window).trigger('resize');
});
