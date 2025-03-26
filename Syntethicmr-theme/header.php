<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  <head>
	  <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <meta charset="<?php bloginfo('charset'); ?>">
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
	  <?php 
      if( function_exists( 'delage_AgregarKeywords' ) ):
	  			echo delage_AgregarKeywords( get_the_ID() );
			endif;
	  ?>
	  
 </head>

 <body <?php body_class(); ?>>

<header class="syn_headerPrincipal">
  <div class="syn_anchoPagina ">
    <div class="syn_header_cont ins-header-desktop">
      <div class="syn_header_seccion1">
        <?php if( is_active_sidebar( 'header-logo' ) ){ dynamic_sidebar( 'header-logo' ); } ?>
      </div>
      <div class="syn_header_seccion2">
          <?php 
          $args= array(
            'menu_class' 		=> 	'syn_menu_principal_desktop', //clases del menu
              'container_id' 		=> 	'syn_menu_principal_desktop_cont', //ID del contenedor principal
              'container_class'	=> 	'syn_menu_principal_desktop_cont', //Clases del contenedor
            'theme_location' 	=> 	'menuHeaderDesktop'
          );
          wp_nav_menu($args);
        ?>
      </div>
      <div class="syn_header_seccion3">
        <a href="#" class="syn-btn syn-btn-book-a-demo"><span>Book a demo</span><img src="<?php echo  get_template_directory_uri().'/assets/images/iconos/icon-btn-book-a-demo.svg';?>"></a>
      </div>
    </div>
    <div class="ins-header-mobile">
          <div class="syn_header_mobile_seccion1">
          <?php if( is_active_sidebar( 'header-mobile-logo' ) ){ dynamic_sidebar( 'header-mobile-logo' ); } ?>
          </div>
          <div class="syn_header_mobile_seccion2">
            <div class="syn_header_navicon-box" id="syn_header_navicon-box">
              <img src="<?php echo  get_template_directory_uri().'/assets/images/iconos/navicon.svg';?>" class="syn_header_navicon" id="syn_header_navicon">
              <img src="<?php echo  get_template_directory_uri().'/assets/images/iconos/close.svg';?>" class="syn_header_close syn-ocultar-navicon" id="syn_header_close">
            </div>
            <div >
              
            </div>
          </div>
    </div>
  </div>
</header>  

<div class="syn_menuSecundario">
        <div class="syn_menuSecundario_cont syn_anchoPagina">
        <?php 
          $args= array(
            'menu_class' 		=> 	'syn_menu_principal_desktop', //clases del menu
              'container_id' 		=> 	'syn_menu_principal_desktop_cont', //ID del contenedor principal
              'container_class'	=> 	'syn_menu_principal_desktop_cont', //Clases del contenedor
            'theme_location' 	=> 	'menuHeaderDesktop'
          );
          wp_nav_menu($args);
        ?>
        <div class="syn_header_mobile_nav">
          <a href="#" class="syn-btn syn-btn-book-a-demo"><span>Book a demo</span><img src="<?php echo  get_template_directory_uri().'/assets/images/iconos/icon-btn-book-a-demo.svg';?>"></a>
        </div>
      </div>
</div>

