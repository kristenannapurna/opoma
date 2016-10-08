$(function(){

	if ($(window).width() < 925){
		console.log('yo')
		$('.testimonials-group').flickity({
			wrapAround: true,
			cellAlign: 'left'
		});
	}

});