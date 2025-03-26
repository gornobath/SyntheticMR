jQuery(function ($) {

    syn_js_agregarFondoHeaderPorScroll();
    syn_js_mostrarMenuResponsive();


function syn_js_agregarFondoHeaderPorScroll(){
    $(window).scroll(function(){
        var posicionActual = $(window).scrollTop();
       
            if( posicionActual > 0 ){
                $('.syn_headerPrincipal').addClass('syn_headerPrincipal_activo');
            } else {

                $('.syn_headerPrincipal').removeClass('syn_headerPrincipal_activo');
            }
       
    });
}


    /* =========================================================================
    *   MUESTRA Y OCULTA EL MENU SECUNDARIO
    *  =========================================================================*/
    var estadoMenuSecundario = false
    function syn_js_mostrarMenuResponsive(){
        $('#syn_header_navicon-box').on('click',function(){

            if( estadoMenuSecundario == false){
                $('.syn_header_navicon').addClass('syn-ocultar-navicon');
                $('.syn_header_close').removeClass('syn-ocultar-navicon');
                $('.syn_menuSecundario_cont').addClass('syn_menuSecundario_cont_mostrar');

                estadoMenuSecundario = true
            }else{
                $('.syn_header_navicon').removeClass('syn-ocultar-navicon');
                $('.syn_header_close').addClass('syn-ocultar-navicon');  
                $('.syn_menuSecundario_cont').removeClass('syn_menuSecundario_cont_mostrar');
                estadoMenuSecundario = false
            }
        })
    }

    /* =========================================================================
    *   MUESTRA Y OCULTA EL MENU EN RESPONSIVE
    *  =========================================================================*/


    
    function syn_js_mostrarMenuResponsivePorNavicon(){
        const menu = $('.md_header_nav_principal');
        $('.md20_navicon_01').click( () => {
            if(estadoNavicon === false){
                $('.md20_navicon_button').addClass('md20_navicon_button_activo');
                menu.removeClass('md_header_nav_principal_ocultar');
                menu.addClass('md_header_nav_principal_mostrar');
                
                estadoNavicon = true
            }else{
                $('.md20_navicon_button').removeClass('md20_navicon_button_activo');
                menu.removeClass('md_header_nav_principal_mostrar');
                menu.addClass('md_header_nav_principal_ocultar');
                estadoNavicon = false
            }
        });

        $('#md_header_responsive_cerrar_menu').click( () => {
                menu.addClass('md_header_nav_principal_ocultar');
                menu.removeClass('md_header_nav_principal_mostrar');
                estadoNavicon = false
        });
    }
	
	$('.syn-tab-botonera-opcion').click(function(){
		let syn_opcion_mri = $(this).attr('id').split('-').pop();
		let syn_cont_mri = '.syn-prod-symri-'+syn_opcion_mri;
		let syn_option_mri_seleccionado = '#syn-tab-botonera-opcion-' + syn_opcion_mri;
		
		$('.syn-tab-botonera-opcion').removeClass('syn-tab-botonera-opcion-active');
		$(syn_option_mri_seleccionado).addClass('syn-tab-botonera-opcion-active');
		
		$('.syn-prod-symri').removeClass('syn-prod-symri-active');
		$(syn_cont_mri).addClass('syn-prod-symri-active');
	})

    


});