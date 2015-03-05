
$(function(){
	//your jQuery here
	$('.flexslider').flexslider({
		animation: "slide",
		slideshowSpeed: 6000,
	});

	$('.fa-bars').click(function(){
		$('.mobileNav').css('display', 'block');
	});

	$('.navClose').click(function(){
		$('.mobileNav').css('display', 'none');
	});

});