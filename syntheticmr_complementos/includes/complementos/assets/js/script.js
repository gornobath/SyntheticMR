jQuery(document).ready( function() {
	var desplazamientoActual = $(document).scrollTop();
	console.log('1');
		if(desplazamientoActual > 140){
			$("#om_headerPrincipal").css( { 'background-color' : 'red !important' } );
		}else{
			$("#om_headerPrincipal").css( { 'background-color' : 'blue !important' } );
		}
 }); 