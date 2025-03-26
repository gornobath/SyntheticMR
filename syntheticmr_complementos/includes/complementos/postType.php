<?php if(! defined('ABSPATH')) exit;  
add_action( 'admin_menu', 'syncom_agregarPosty' );

function syncom_agregarPosty(){
    //MENU PAGE
     add_menu_page(
        __('SyntheticMR' , 'syncom'), //Page_title
        __('SyntheticMR' , 'syncom'), //$menu_title
        'administrator', //$capability
        'syncom_nav', //$menu_slug
        'syncom_mostarDasboardPrincipal', //$function
        esc_url( plugin_dir_url( __FILE__ )).'images/logos/act_logo.jpg', //$icon_url,
        5 //$position
    ); 
    //SUB MENU PAGE
    add_submenu_page( 
        'syncom_nav', //$parent_slug
        __('Configuración', 'syncom'), //$page_title
        __('Configuración', 'syncom'), //$menu_title
	    'administrator', //$capability
	    'syncom_nav_config', //$menu_slug
        'syncom_ConfiguracionPrincipal'  //$function 
    );
}

function syncom_mostarDasboardPrincipal(){
    echo _e('Esta es la dashboard Principal','syncom');
}

function syncom_ConfiguracionPrincipal(){
    wp_create_nonce('name_of_your_action');
   
    $html = '';
    $html = _e('<h1 class="syncom_titulo_principal">Configuracion Principal</h1>','syncom');
    $html .= '   <div class="syncom_contenedor_principal"> ';
    $html .= '      <div class="syncom_contenedor_secundario"> ';
    $html .= '          <h2 class="syncom_contenedor_secundario">Redes Sociales</h2> ';
    $html .= '          <p>Agregue en los campos la URL de la red social.  En el caso de no tener alguna de esta, dejar el campo en blanco.</p>';
    $html .=            syncom_formularioRedesSociales();
    $html .= '      </div>';
    $html .= '      <div class="syncom_contenedor_secundario"> ';
    $html .= '          <h2 class="syncom_contenedor_secundario">Información</h2> ';
    $html .= '          <p>Agregue en los campos la URL de la red social.  En el caso de no tener alguna de esta, dejar el campo en blanco.</p>';
    $html .=            syncom_formularioInformacíon();
    $html .= '      </div>';

    $html .= '  </div>';
    echo $html;

}


/* ================================================================================
*  VERIFICA QUE LOS CAMPOS SEAN URLs. SI EXISTE DEVUELVE ESTA, DE LO CONTRARIO 
*  DEVUELVE UN ESPACIO
*  ================================================================================*/
function syncom_verificarURL( $url ){
    return ( isset( $url )  && !empty( $url )  )  ? trim( sanitize_url( $url ) ) : '';
}
/* ================================================================================
*  VERIFICA QUE LOS CAMPOS SEAN URLs. SI EXISTE DEVUELVE ESTA, DE LO CONTRARIO 
*  DEVUELVE UN ESPACIO
*  ================================================================================*/
function syncom_verificarTexto( $texto ){
    return ( isset( $texto )  && !empty( $texto )  )  ? trim( sanitize_text_field( $texto ) ) : '';
}

function syncom_formularioRedesSociales(){
    $html = '';
    $html .= '          <form action="'. esc_url( admin_url( 'admin-post.php' )  ).'?action=process_form_redes_sociales" id="cd_form_registraDenuncia" method="POST" enctype="multipart/form-data">';
    // wp_nonce_field( 'syncom_form_nonce_rs', 'syncom_form_redes_sociales_nonce' );
    // wp_nonce_field('name_of_your_action', 'name_of_your_nonce_field');
    $html .= '              <input type="hidden"  name="process_form_redes_sociales" value="process_form_redes_sociales" />';
    $html .= '              <div class="syncom_form_campos" >';
    $html .= '                  <label class="syncom_form_campos_label" for="syncom_form_campos_facebook">Facebook</label>'  ;
    $html .= '                  <input type="text" class="syncom_form_campos_input" name="syncom_facebook" id="syncom_form_campos_facebook" placeholder="URL" value="'.esc_html( get_option( 'syncom_facebook' ) ).'" />'  ;
    $html .= '              </div>';
    $html .= '              <div class="syncom_form_campos" >';
    $html .= '                  <label class="syncom_form_campos_label" for="syncom_form_campos_instagram">Instagram</label>'  ;
    $html .= '                  <input type="text" class="syncom_form_campos_input" name="syncom_instagram" id="syncom_form_campos_instagram" placeholder="URL" value="'.esc_html( get_option( 'syncom_instagram' ) ).'" />'  ;
    $html .= '              </div>';
    $html .= '              <div class="syncom_form_campos" >';
    $html .= '                  <label class="syncom_form_campos_label" for="syncom_form_campos_linkedin">Linkedin</label>'  ;
    $html .= '                  <input type="text" class="syncom_form_campos_input" name="syncom_linkedin" id="syncom_form_campos_linkedin" placeholder="URL"  value="'.esc_html( get_option( 'syncom_linkedin' ) ).'" />'  ;
    $html .= '              </div>';
    $html .= '              <div class="syncom_form_campos" >';
    $html .= '                  <label class="syncom_form_campos_label" for="syncom_form_campos_tiktok">Tiktok</label>'  ;
    $html .= '                  <input type="text" class="syncom_form_campos_input" name="syncom_tiktok" id="syncom_form_campos_tiktok" placeholder="URL"  value="'.esc_html( get_option( 'syncom_tiktok' ) ).'" />'  ;
    $html .= '              </div>';
    $html .= '              <div class="syncom_form_campos" >';
    $html .= '                  <label class="syncom_form_campos_label" for="syncom_form_campos_twiter">Twiter</label>'  ;
    $html .= '                  <input type="text" class="syncom_form_campos_input" name="syncom_twiter" id="syncom_form_campos_twiter" placeholder="URL"  value="'.esc_html( get_option( 'syncom_twiter' ) ).'" />'  ;
    $html .= '              </div>';
    $html .= '              <div class="syncom_form_campos" >';
    $html .= '                  <label class="syncom_form_campos_label" for="syncom_form_campos_whatsapp">Whatsapp</label>'  ;
    $html .= '                  <input type="text" class="syncom_form_campos_input" name="syncom_whatsapp" id="syncom_form_campos_whatsapp" placeholder="URL"  value="'.esc_html( get_option( 'syncom_whatsapp' ) ).'" />'  ;
    $html .= '              </div>';
    $html .= '              <div class="syncom_form_campos" >';
    $html .= '                  <label class="syncom_form_campos_label" for="syncom_form_campos_youtube">Youtube</label>'  ;
    $html .= '                  <input type="text" class="syncom_form_campos_input" name="syncom_youtube" id="syncom_form_campos_youtube" placeholder="URL"  value="'.esc_html( get_option( 'syncom_youtube' ) ).'" />'  ;
    $html .= '              </div>';
    $html .= '              <div class="syncom_form_botonera" >';               
    $html .= '                  <input type="submit" class="syncom_form_campos_input" name="syncom_form_redes_sociales_enviar" id="syncom_form_campos_btn_guardar" value="Guardar" />'  ;
    $html .= '              </div>';
    $html .= '          </form>';  
    return $html;
}

add_action( 'admin_post_nopriv_process_form_redes_sociales', 'syncom_GuardarRedesSociales' );
add_action( 'admin_post_process_form_redes_sociales', 'syncom_GuardarRedesSociales' );
function syncom_GuardarRedesSociales(){

    $mensaje = '';
    if( isset( $_POST['syncom_form_redes_sociales_enviar'] ) && $_POST['syncom_form_redes_sociales_enviar'] == "Guardar"):

        $facebook = '' ;
        $instagram = '' ;
        $linkedin = '' ;
        $twitter = '' ;
        $tiktok = '' ;
        $whatsapp = '' ;
        $youtube = '' ;

        $facebook = syncom_verificarURL( $_POST['syncom_facebook'] );
        $instagram = syncom_verificarURL( $_POST['syncom_instagram'] );
        $linkedin = syncom_verificarURL( $_POST['syncom_linkedin'] );
        $twitter = syncom_verificarURL( $_POST['syncom_twiter'] );
        $whatsapp = syncom_verificarURL( $_POST['syncom_whatsapp'] );
        $youtube = syncom_verificarURL( $_POST['syncom_youtube'] );
        $tiktok = syncom_verificarURL( $_POST['syncom_tiktok'] );

        update_option( 'syncom_facebook', $facebook, true );
        update_option( 'syncom_instagram', $instagram, true );
        update_option( 'syncom_linkedin', $linkedin, true );
        update_option( 'syncom_twiter', $twitter, true );
        update_option( 'syncom_whatsapp', $whatsapp, true );
        update_option( 'syncom_youtube', $youtube, true );
        update_option( 'syncom_tiktok', $tiktok, true );
        
        $mensaje = 1;
    else:
        $mensaje = 2;
    endif;
    wp_redirect( get_admin_url() . 'admin.php?page=syncom_nav_config&mensaje='.$mensaje); exit;
    wp_die();
}


function syncom_formularioInformacíon(){
    $html = '';
    $html .= '          <form action="'. esc_url( admin_url( 'admin-post.php' )  ).'?action=process_form_informacion" id="cd_form_registraDenuncia" method="POST" enctype="multipart/form-data">';
    // wp_nonce_field( 'syncom_form_nonce_rs', 'syncom_form_informacion_nonce' );
    // wp_nonce_field('name_of_your_action', 'name_of_your_nonce_field');
    $html .= '              <input type="hidden"  name="process_form_informacion" value="process_form_informacion" />';
    $html .= '              <div class="syncom_form_campos" >';
    $html .= '                  <div class="syncom_form_campos_fila" >';
    $html .= '                      <h3 class="syncom_form_titulo_3" >Teléfono</h3>';
    $html .= '                  </div>';
    $html .= '                  <div class="syncom_form_campos_fila" >';
    $html .= '                      <label class="syncom_form_campos_label" for="syncom_form_campos_telefono">Texto</label>'  ;
    $html .= '                      <input type="text" class="syncom_form_campos_input" name="syncom_telefono" id="syncom_form_campos_telefono" placeholder="URL" value="'.esc_html( get_option( 'syncom_telefono' ) ).'" />'  ;
    $html .= '                  </div>';
    $html .= '                  <div class="syncom_form_campos_fila" >';
    $html .= '                      <label class="syncom_form_campos_label" for="syncom_form_campos_telefono_url">URL</label>'  ;
    $html .= '                      <input type="text" class="syncom_form_campos_input" name="syncom_telefono_url" id="syncom_form_campos_telefono_url" placeholder="URL" value="'.esc_html( get_option( 'syncom_telefono_url' ) ).'" />'  ;
    $html .= '                  </div>';
    $html .= '              </div>';
    $html .= '              <div class="syncom_form_campos" >';
    $html .= '                  <div class="syncom_form_campos_fila" >';
    $html .= '                      <h3 class="syncom_form_titulo_3" >Email</h3>';
    $html .= '                  </div>';
    $html .= '                  <div class="syncom_form_campos_fila" >';
    $html .= '                      <label class="syncom_form_campos_label" for="syncom_form_campos_email">Texto</label>'  ;
    $html .= '                      <input type="text" class="syncom_form_campos_input" name="syncom_email" id="syncom_form_campos_email" placeholder="URL" value="'.esc_html( get_option( 'syncom_email' ) ).'" />'  ;
    $html .= '                  </div>';
    $html .= '                  <div class="syncom_form_campos_fila" >';
    $html .= '                      <label class="syncom_form_campos_label" for="syncom_form_campos_email_url">URL</label>'  ;
    $html .= '                      <input type="text" class="syncom_form_campos_input" name="syncom_email_url" id="syncom_form_campos_email_url" placeholder="URL" value="'.esc_html( get_option( 'syncom_email_url' ) ).'" />'  ;
    $html .= '                  </div>';
    $html .= '              </div>';
    $html .= '              <div class="syncom_form_campos" >';
    $html .= '                  <div class="syncom_form_campos_fila" >';
    $html .= '                      <h3 class="syncom_form_titulo_3" >Dirección</h3>';
    $html .= '                  </div>';
    $html .= '                  <div class="syncom_form_campos_fila" >';
    $html .= '                      <label class="syncom_form_campos_label" for="syncom_form_campos_direccion">Texto</label>'  ;
    $html .= '                      <input type="text" class="syncom_form_campos_input" name="syncom_direccion" id="syncom_form_campos_direccion" placeholder="URL" value="'.esc_html( get_option( 'syncom_direccion' ) ).'" />'  ;
    $html .= '                  </div>';
    $html .= '                  <div class="syncom_form_campos_fila" >';
    $html .= '                      <label class="syncom_form_campos_label" for="syncom_form_campos_direccion_url">URL</label>'  ;
    $html .= '                      <input type="text" class="syncom_form_campos_input" name="syncom_direccion_url" id="syncom_form_campos_direccion_url" placeholder="URL" value="'.esc_html( get_option( 'syncom_direccion_url' ) ).'" />'  ;
    $html .= '                  </div>';
    $html .= '              </div>';
    $html .= '              <div class="syncom_form_campos" >';
    $html .= '                  <div class="syncom_form_campos_fila" >';
    $html .= '                      <h3 class="syncom_form_titulo_3" >Horarios</h3>';
    $html .= '                  </div>';
    $html .= '                  <div class="syncom_form_campos_fila" >';
    $html .= '                      <textarea class="syncom_form_campos_input" name="syncom_horarios" id="syncom_form_campos_horarios" placeholder="" value="'.esc_html( get_option( 'syncom_horarios' ) ).'" />'.esc_html( get_option( 'syncom_horarios' ) ).'</textarea>'  ;
    $html .= '                      <p>Cuando se maneje diferentes horario se debe de agregar una coma(,) al final</p>';
    $html .= '                  </div>';
    $html .= '              </div>';
    $html .= '              <div class="syncom_form_botonera" >';               
    $html .= '                  <input type="submit" class="syncom_form_campos_input" name="syncom_form_informacion_enviar" id="syncom_form_campos_informacion_btn_guardar" value="Guardar" />'  ;
    $html .= '              </div>';
    $html .= '          </form>';  
    return $html;
}

add_action( 'admin_post_nopriv_process_form_informacion', 'syncom_GuardarInformacion' );
add_action( 'admin_post_process_form_informacion', 'syncom_GuardarInformacion' );
function syncom_GuardarInformacion(){

    $mensaje = '';
    if( isset( $_POST['syncom_form_informacion_enviar'] ) && $_POST['syncom_form_informacion_enviar'] == "Guardar"):

        $direccion = '' ;
        $direccion_url = '' ;
        $email = '' ;
        $email_url = '' ;
        $horarios = '' ;
        $telefono = '' ;
        $telefono_url = '' ;

        $telefono = syncom_verificarTexto( $_POST['syncom_telefono'] );
        $telefono_url = syncom_verificarTexto( $_POST['syncom_telefono_url'] );
        $email = syncom_verificarTexto( $_POST['syncom_email'] );
        $email_url = syncom_verificarTexto( $_POST['syncom_email_url'] );
        $direccion = syncom_verificarTexto( $_POST['syncom_direccion'] );
        $direccion_url = syncom_verificarURL( $_POST['syncom_direccion_url'] );
        $horario =  syncom_verificarTexto( $_POST['syncom_horarios'] );

        update_option( 'syncom_telefono', $telefono, true );
        update_option( 'syncom_telefono_url', $telefono_url, true );
        update_option( 'syncom_email', $email, true );
        update_option( 'syncom_email_url', $email_url, true );
        update_option( 'syncom_direccion', $direccion, true );
        update_option( 'syncom_direccion_url', $direccion_url, true );
        update_option( 'syncom_horarios', $horario, true );
        
        $mensaje = 3;
    else:
        $mensaje = 4;
    endif;
    wp_redirect( get_admin_url() . 'admin.php?page=syncom_nav_config&mensaje='.$mensaje); exit;
    wp_die();
}