$(function () {
    $('.collapse').on('shown.bs.collapse', function(e) {
        var $card = $(this).closest('.card');
        $('html,body').animate({
          scrollTop: $card.offset().top -120
        }, 500);
      });
});