
$( document ).ready(function() {
    
});

$(document).on('click', '.btn-toggle-mobile-menu', function(event) {
    event.preventDefault();
    $(this).parents('.header-container').toggleClass('active');
    var height = $(this).parents('.header-container').height();
	var height2 = $(window).height();

	$('.header-container .navbar-menu').css('top', height - 1);
	$('.header-container .navbar-menu').css('height', height2 - height + 3);
});