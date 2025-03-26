<?php

defined( 'ABSPATH' ) or die(); 

/*
*AGREGAR CMB2"
*/
//require_once dirname(__FILE__).'/example-functions.php';

/*
* Cargar campos personalizados
*/

//require_once dirname(__FILE__).'/inc/custom-fields.php';

function synthetic_setup(){

    //  Habilitar imagenes destacadas
    add_theme_support('post-thumbnails');

    //  Agregar imagenes de tamaño personalizado
    // add_image_size('servicios', 840, 560, true);  
    //add_image_size('blog_miniatura', 314, 144, true); 
    // add_image_size('blog', 852, 541, true);
}
add_action('after_setup_theme', 'synthetic_setup');
/**
 * Funciones que se cargan al activar el theme
 */

function synthetic_mis_menus() {
	register_nav_menus(
	  array(
		'menuHeaderDesktop' => esc_html__( 'Menu Header Principal' , 'synthetic'),
		'menuHeaderMobile' => esc_html__( 'Menu Header Mobile' , 'synthetic'),
		'menuFooterInformation' => esc_html__( 'Menu Footer Information' , 'synthetic'),
		'menuFooterSynthetic' => esc_html__( 'Menu Footer Synthetic' , 'synthetic'),
		'menuFooterInvestor' => esc_html__( 'Menu Footer Investor' , 'synthetic'),
		'menuFooterCustomer' => esc_html__( 'Menu Footer Customer' , 'synthetic'),
		'menuFooterPoliticas' => esc_html__( 'Menu Footer Politicas' , 'synthetic'),
	  )
	);
  }
  add_action( 'after_setup_theme', 'synthetic_mis_menus' );
 

/*
* CARGA LOS SCRIPTS Y CSS DE LA PLANTILLA 
*/
function synthetic_styles_scripts(){
	/*Style*/
	wp_enqueue_style('synthetic_style_css', get_template_directory_uri().'/assets/css/style.css', false,'1');
	/*script*/ 
	wp_enqueue_script('synthetic_script_js', get_template_directory_uri().'/assets/js/js.js', array('jquery'),'1.0', true);
	wp_enqueue_script('synthetic_fondoPuntos', get_template_directory_uri().'/assets/js/fondoPuntos.js', array('jquery'),'1.0', true);

}
add_action('wp_enqueue_scripts','synthetic_styles_scripts');


/**
 * Crear una zonan de widgets que podremos gestionar
 * fácilmente desde administrador de Wordpress.
 */

function synthetic_mis_widgets(){
	/*CREAR SIDEBAR*/
	/*CREAR HEADERS LOGO*/
	register_sidebar( array(
		'name' => 'Logo Desktop principal en el Header',
		'description'   => 'Imagen del logo de la empresa.',
		'id' => 'header-logo'
		) 
	);

	register_sidebar( array(
		'name' => 'Logo mobile principal en el Header',
		'description'   => 'Imagen del logo de la empresa.',
		'id' => 'header-mobile-logo'
		) 
	);


	register_sidebar( array(
		'name' => 'Footer logo Principal ',
		'description'   => 'Logotipo de la empresa en el footer.',
		'id' => 'md-footer-logo'
		) 
	); 
	register_sidebar( array(
		'name' => 'Footer Synthetic ',
		'description'   => 'Logotipo de la empresa en el footer.',
		'id' => 'footer-synthetic'
		) 
	); 
	register_sidebar( array(
		'name' => 'Footer investor ',
		'description'   => 'Logotipo de la empresa en el footer.',
		'id' => 'footer-investor'
		) 
	); 
	register_sidebar( array(
		'name' => 'Footer customer ',
		'description'   => 'Logotipo de la empresa en el footer.',
		'id' => 'footer-customer'
		) 
	); 

	register_sidebar( array(
		'name' => 'Footer texto ',
		'description'   => 'Texto del footer',
		'id' => 'footer-texto'
		) 
	);
	
	register_sidebar( array(
		'name' => 'Footer Derechos reservados',
		'id' => 'footer-sidebar-5',
		'before_widget' => '<aside id="%1$s" class="widget %2$s ">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="footer-title">',
		'after_title' => '</h3>',
		) 
	);

}
add_action('init','synthetic_mis_widgets');

include('shortcode.php');

function synthetic_add_settings_page() {
	add_options_page(
	  'Configuraciòn General de la plantilla',
	  'Configuraciòn General de la plantilla',
	  'manage_options',
	  'synthetic_configuracion_general',
	  'synthetic_paginaDeConfiguracionGeneral'
	);
  }
 // add_action( 'admin_menu', 'synthetic_add_settings_page' );

  function synthetic_paginaDeConfiguracionGeneral() {
	?>
	  <h2>Configuraciòn General de la plantilla</h2>
	  <form action="options.php" method="post">
		<?php 
		settings_fields( 'synthetic_configuracion_general' );
		do_settings_sections( 'nelio_example_plugin' );
		?>
		<input
		  type="submit"
		  name="submit"
		  class="button button-primary"
		  value="<?php esc_attr_e( 'Save' ); ?>"
		/>
	  </form>
	<?php
}

/* ==============================================================================
*  AGREGAR LA METADATA DE LAS KEYWORDS
*  ==============================================================================*/
function delage_AgregarKeywords( $id ){
	$id = trim( intval( sanitize_text_field( $id ) ) );
	$synthetic_meta = get_post_meta( $id, 'delage_campos_keywords', true );
	if( !empty( $synthetic_meta ) ):
		return '<meta name="keywords" content="'.$synthetic_meta.'" >';
	endif;
}
