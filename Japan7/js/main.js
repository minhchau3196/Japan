
$( document ).ready(function() {
    
});

$(document).on('click', '.btn-toggle-mobile-menu', function(event) {
    event.preventDefault();
    $(this).parents('.header-container').toggleClass('active');
    $(this).parents('.header-container').find('.menu-show').slideToggle();
});