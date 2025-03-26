(function($) {
	$(document).on( "ready", function(){
		if($('#carouselTestimonials').length  ){
			console.log('entre')
			$('.carousel-indicators li:first').addClass('active')	
		}

		$('.carousel').carousel({
			interval: 1000
		  })
	}) 
})( jQuery );