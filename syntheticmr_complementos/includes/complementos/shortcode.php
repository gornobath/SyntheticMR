<?php if(! defined('ABSPATH')) exit;  

/* ============================================================================
*  ESTE SHORTCODE SE ENCARGA DE MOSTRAR LAS REDES SOCIALES QUE ESTAN ACTIVAS 
*  EN EL HEADER
*  [redes_sociales_header]
*  ============================================================================ */
function syncom_shortcode_mostrarRedsocial(){
    $html = '';
	

	//$html .= syncom_mostrarRedsocial( 'syncom_instagram', 'fas fa-instagram', get_template_directory_uri().'/images/iconos/Instagram.svg', 'Instagram' );
	$html .= syncom_mostrarRedsocial( 'syncom_instagram', 'fas fa-instagram', '', 'Instagram' );
    $html .= syncom_mostrarRedsocial( 'syncom_tiktok', 'fa-tiktok','','Tiktok' );
    $html .= syncom_mostrarRedsocial( 'syncom_facebook', 'fa-facebook-f','','Facebook' );
    $html .= syncom_mostrarRedsocial( 'syncom_youtube', 'fa-youtube','','Youtube' );
    $html .= syncom_mostrarRedsocial( 'syncom_linkedin', 'fa-linkedin-in','','Linkedin' );
    $html .= syncom_mostrarRedsocial( 'syncom_whatsapp', 'fas fa-whatsapp','','Whatsapp' );
    $html .= syncom_mostrarRedsocial( 'syncom_twiter', 'fa-twitter','' ,'Twitter');
    return $html;
}
add_shortcode('redes_sociales_header','syncom_shortcode_mostrarRedsocial');

/* ============================================================================
*  AGREGA EL HTML A CADA RED SOCIAL
*  syncom_mostrarRedsocial(url de la red social, clase donde se encuentra el icono)
*  ============================================================================ */
function syncom_mostrarRedsocial( $red, $icono, $imagenIcono = '', $altTitle = '' ){

	 if( !empty( get_option( $red, $default = false ) ) ):
		if( empty($imagenIcono) ):
			return '<a href ="'.esc_url( get_option( $red, $default = false ) ).'" class="da_header_red_social" target="_blank" aria-label="'.esc_attr($altTitle).'"><i class="fab '.esc_attr( $icono ).' da_header_fa"></i></a>';
    	else:
			return '<a href ="'.esc_url( get_option( $red, $default = false ) ).'" class="da_header_red_social da_header_red_social_1" target="_blank" aria-label="'.esc_attr($altTitle).'"><img src="'.esc_url($imagenIcono).'" alt="'.esc_attr($altTitle).'"></a>';
		endif;
	endif;
}

/* ============================================================================
*  ESTE SHORTCODE SE ENCARGA DE MOSTRAR LA INFORMACION EN EL HEADER
*  [informacion_header]
*  ============================================================================ */
function syncom_shortcode_mostrarInformacion(){
    $html = '';
    $html .= syncom_mostrarInformacion( 'tel:'.esc_html( get_option( 'syncom_telefono_url', $default = false ) ), 'syncom_telefono'  ,'', 'fa-sharp fa-solid fa-phone' );
    $html .= syncom_mostrarInformacion( 'mailto:'.esc_html( get_option( 'syncom_email_url', $default = false ) ), 'syncom_email'  ,'', 'fa-regular  fas fa-envelope' );
    $html .= syncom_mostrarInformacion( esc_url( get_option( 'syncom_direccion_url', $default = false ) ), 'syncom_direccion' ,'_blank' , 'fa-solid fa-location-dot' );
    return $html;
}
add_shortcode('informacion_header','syncom_shortcode_mostrarInformacion');

/* ============================================================================
*  AGREGA EL HTML A  LA INFORMACION EL HEADER
*  syncom_mostrarInformacion( $url ,$texto , si se abre en otra ventana o no, $icono)
*  ============================================================================ */
function syncom_mostrarInformacion( $url ,$texto , $target,$icono){
    if( !empty( get_option( $texto, $default = false ) ) ):
        //return '<a href="'.$url.' " target="'.esc_attr($target).'" class="da_header_barra_informativa--info_box" >
        return '<a href="'.$url.' " target="'.esc_attr($target).'" class="da_header_barra_informativa--info_box2" >
                    <i class="'.esc_attr( $icono ).' da_header_fa"></i><span>'.esc_html( get_option(  $texto, $default = false ) ).'<span>
                </a>';
    endif;
}

/* ============================================================================
*  ESTE SHORTCODE SE ENCARGA DE MOSTRAR LA INFORMACION EN EL HEADER
*  [informacion_header]
*  ============================================================================ */
function syncom_shortcode_mostrarInformacionFooter(){
    $html = '';
    $html .= syncom_mostrarInformacionFooter( 'tel:'.esc_html( get_option( 'syncom_telefono_url', $default = false ) ), 'syncom_telefono'  ,'', 'fa-sharp fa-solid fa-phone' );
    $html .= syncom_mostrarInformacionFooter( 'mailto:'.esc_html( get_option( 'syncom_email_url', $default = false ) ), 'syncom_email'  ,'', 'fa-regular fas fa-envelope' );
    $html .= syncom_mostrarInformacionFooter( esc_url( get_option( 'syncom_direccion_url', $default = false ) ), 'syncom_direccion' ,'_blank' , 'fa-solid fa-location-dot' );
    return $html;
}
 add_shortcode('informacion_footer','syncom_shortcode_mostrarInformacionFooter');

/* ============================================================================
*  AGREGA EL HTML A  LA INFORMACION PARA EL FOOTER
*  syncom_mostrarInformacion( $url ,$texto , si se abre en otra ventana o no, $icono)
*  ============================================================================ */
function syncom_mostrarInformacionFooter( $url ,$texto , $target,$icono){
    if( !empty( get_option( $texto, $default = false ) ) ):
        return '<a href="'.$url.' " target="'.esc_attr($target).'" class="da_footer_barra_informativa--info_box" >
                    <i class="'.esc_attr( $icono ).' da_footer_fa"></i><span>'.esc_html( get_option(  $texto, $default = false ) ).'<span>
                </a>';
    endif;
}

/* ============================================================================
*  ESTE SHORTCODE SE ENCARGA DE MOSTRAR LA INFORMACION EN EL HEADER
*  [informacion_header]
*  ============================================================================ */
function syncom_shortcode_mostrarInformacionMenu(){
    $html = '';
    $html .= syncom_mostrarInformacionMenu( 'tel:'.esc_html( get_option( 'syncom_telefono_url', $default = false ) ), 'syncom_telefono'  ,'', 'fa-sharp fa-solid fa-phone' );
    $html .= syncom_mostrarInformacionMenu( 'mailto:'.esc_html( get_option( 'syncom_email_url', $default = false ) ), 'syncom_email'  ,'', 'fa-regular fas fa-envelope' );
    $html .= syncom_mostrarInformacionMenu( esc_url( get_option( 'syncom_direccion_url', $default = false ) ), 'syncom_direccion' ,'_blank' , 'fa-solid fa-location-dot' );
    return $html;
}
add_shortcode('informacion_header_menu','syncom_shortcode_mostrarInformacionMenu');

/* ============================================================================
*  AGREGA EL HTML A  LA INFORMACION
*  syncom_mostrarInformacionMenu( $url ,$texto , si se abre en otra ventana o no, $icono)
*  ============================================================================ */
function syncom_mostrarInformacionMenu( $url ,$texto , $target,$icono){
    if( !empty( get_option( $texto, $default = false ) ) ):
        return '<a href="'.$url.' " target="'.esc_attr($target).'" class="da_header_barra_informativa--info_box" >
                    <i class="'.esc_attr( $icono ).' da_header_fa"></i>
                </a>';
    endif;
}

function syncom_shortcode_mostrarHorario(){
    if( !empty( get_option( 'syncom_horarios', $default = false ) ) ):
        $texto = get_option( 'syncom_horarios', $default = false );
        $separar = str_replace(',','</span><span>',$texto);
        return '<span>'.$separar.'</span>';
    endif;
    
}
add_shortcode('horario','syncom_shortcode_mostrarHorario');



function syncom_mostrarInformacionContacto( $url ,$texto , $target,$icono,$titulo){
    
        return '<a href="'.$url.' " target="'.esc_attr($target).'" class="da_mostrarInfoContactenos--info_box" >
                    <img src="'.esc_url( plugin_dir_url( __FILE__ ).'images/logos/'.$icono).' " alt="'.esc_attr($titulo).'" class="da_sh_footer_informacion_cont_imagen">
                    <h4 class="da_mostrarInfoContactenos_titulo"> '. esc_html( $titulo ).'</h4>
                    <span class="da_mostrarInfoContactenos_texto">'.esc_html( get_option(  $texto, $default = false ) ).'<span>
                </a>';
    
}

function syncom_shortcode_mostrarInfoContactenos(){
    $html = '';
    $html .= '<div class="syncom_shortcode_mostrarInfoContactenos_cont">';
    if( !empty(get_option( 'syncom_telefono_url', $default = false )) ):
        $html .= syncom_mostrarInformacionContacto( 'tel:'.esc_html( get_option( 'syncom_telefono_url', $default = false ) ), 'syncom_telefono'  ,'', 'telefono.svg', __('Llamanos') );
    endif;
    if( !empty( get_option( 'syncom_email_url', $default = false ) )):
        $html .= syncom_mostrarInformacionContacto( 'mailto:'.esc_html( get_option( 'syncom_email_url', $default = false ) ), 'syncom_email'  ,'', 'correo.svg', __('Escríbenos') );
    endif;
    if( !empty(get_option( 'syncom_direccion_url', $default = false )) ):
        $html .= syncom_mostrarInformacionContacto( esc_url( get_option( 'syncom_direccion_url', $default = false ) ), 'syncom_direccion' ,'_blank' , 'direccion.svg',  __('Ubicanos')); 
    endif;
    $html .= '</div>';
    return $html;
}

add_shortcode('informacioCorporativa','syncom_shortcode_mostrarInfoContactenos');



function syncom_mostrarInformacionContacto2( $url ,$texto , $target,$icono,$titulo){
    
    return '<a href="'.$url.' " target="'.esc_attr($target).'" class="da_sh_footer_informacion_cont" >
                <img src="'.esc_url( plugin_dir_url( __FILE__ ).'images/logos/'.$icono).' " alt="'.esc_attr($titulo).'" class="da_sh_footer_informacion_cont_imagen">
                <div class="da_sh_footer_informacion_cont_info">
                    <h4 class="da_sh_footer_informacion_cont_titulo"> '. esc_html( $titulo ).'</h4>
                    <span class="da_sh_footer_informacion_cont_texto">'.esc_html( get_option(  $texto, $default = false ) ).'<span>
                </div>
            </a>';

}

function syncom_shortcode_mostrarInfoContactenos2(){
    $html = '';
    $html .= '<div class="syncom_shortcode_mostrarInfoContactenos_cont">';
        if( !empty(get_option( 'syncom_telefono_url', $default = false )) ):
            $html .= syncom_mostrarInformacionContacto2( 'tel:'.esc_html( get_option( 'syncom_telefono_url', $default = false ) ), 'syncom_telefono'  ,'', 'telefono.svg', __('Contáctanos') );
        endif;
        if( !empty(get_option( 'syncom_email_url', $default = false )) ):
         $html .= syncom_mostrarInformacionContacto2( 'mailto:'.esc_html( get_option( 'syncom_email_url', $default = false ) ), 'syncom_email'  ,'', 'correo.svg', __('Escríbenos') );
        endif;
        if( !empty(get_option( 'syncom_direccion_url', $default = false )) ):
            $html .= syncom_mostrarInformacionContacto2( esc_url( get_option( 'syncom_direccion_url', $default = false ) ), 'syncom_direccion' ,'_blank' , 'direccion.svg',  __('Encuéntranos')); 
        endif;
    $html .= '</div>';
    return $html;
}

add_shortcode('informacioCorporativa2','syncom_shortcode_mostrarInfoContactenos2');

/* ============================================================================
*  ESTE SHORTCODE SE ENCARGA DE MOSTRAR LAS REDES SOCIALES QUE ESTAN ACTIVAS 
*  EN EL HEADER
*  [redes_sociales_header]
*  ============================================================================ */
function syncom_shortcode_mostrarRedsocialFooter(){
    $html = '';
    $html .= '<div class="da_redes_contacto">';
        $html .=  syncom_mostrarRedsocialContactenos( 'syncom_instagram', 'fas fa-instagram', '', 'Instagram' );
        $html .=  syncom_mostrarRedsocialContactenos( 'syncom_tiktok', 'fa-tiktok','','Tiktok' );
        $html .=  syncom_mostrarRedsocialContactenos( 'syncom_facebook', 'fa-facebook-f','','Facebook' );
        $html .=  syncom_mostrarRedsocialContactenos( 'syncom_youtube', 'fa-youtube','','Youtube' );
        $html .=  syncom_mostrarRedsocialContactenos( 'syncom_linkedin', 'fa-linkedin-in','','Linkedin' );
        $html .=  syncom_mostrarRedsocialContactenos( 'syncom_whatsapp', 'fas fa-whatsapp','','Whatsapp' );
        $html .=  syncom_mostrarRedsocialContactenos( 'syncom_twiter', 'fa-twitter','' ,'Twitter');
    $html .= '</div>';
    return $html;
}
add_shortcode('redes_socialesfooter','syncom_shortcode_mostrarRedsocialFooter');

/* ============================================================================
*  AGREGA EL HTML A CADA RED SOCIAL
*  syncom_mostrarRedsocialContactenos(url de la red social, clase donde se encuentra el icono)
*  ============================================================================ */
function syncom_mostrarRedsocialContactenos( $red, $icono,$imagenIcono = '', $altTitle='' ){
	if( !empty( get_option( $red, $default = false ) ) ):
			return '<a href ="'.esc_url( get_option( $red, $default = false ) ).'" class="da_contacto_red_social" target="_blank" aria-label="'.esc_attr($altTitle).'"><i class="fab '.esc_attr( $icono ).' da_footer_fa"></i></a>';
    endif;
	
}