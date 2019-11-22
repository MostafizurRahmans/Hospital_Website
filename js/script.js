/*
Hide preloader
*/
$(window).on('load', function() {
	$('#status').fadeOut();
	$('#preloader').delay(350).fadeOut();
});
/*
Doctors Slider
*/

$(function() {
	$("#doctors").owlCarousel({
		items: 2,
		autoplay: true,
		smartSpeed: 700,//time to slide
		loop: true,
		autoplayHoverPause: true,
		dots: false,
		nav: true

	});
});

/*------------------------------------------------------WOW--------------------------------------------*/

$(function() {
	new WOW().init();
})
// Logo
$(window).on('load', function() {
	$("#full_logo").addClass("animated bounceInDown");
});

$(window).on('load', function() {
	$("#top_animate").addClass("animated slideInLeft");
});

$(window).on('load', function() {
	$("#service_one").addClass("animated slideInLeft");
});

$(window).on('load', function() {
	$("#service_two").addClass("animated slideInRight");
});

/*-----------------------------------------------------Counter-----------------------------------------*/


$(function() {
	$(".counter").counterUp({
                delay: 10,
                time: 1000
      });
});



