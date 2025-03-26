<?php if(! defined('ABSPATH')) exit;  


function syncon_testimonials_shortcode(){
     return SYNCON_TESTIMONIALS::syncon_test_mostrarTestimonials();
}

add_shortcode('syncon_testimonials','syncon_testimonials_shortcode');


class SYNCON_TESTIMONIALS{

    function __construct(){

    }


    public static function syncon_test_mostrarTestimonials(){
        ?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
         
        
        <?php
        $contadorElementos = 0;
        $cantidadElementos = 0;
        $imagen = '';
        $html = '';
        $prefix = '';
        $name = '';
        $job = '';
        $testimonial = ''; 

        global $wpdb;
        $tabla = $wpdb->prefix.'posts';
        $sql = $wpdb->prepare(" SELECT ID
                                FROM $tabla
                                WHERE post_type = %s 
                                AND post_status = %s
                                ORDER BY ID DESC", 'syncom_testimonials','publish');
    
        $query = $wpdb->get_results($sql,OBJECT);

        $cantidadElementos = $wpdb->get_var( "SELECT COUNT(ID) FROM $tabla WHERE post_type = 'syncom_testimonials' AND post_status = 'publish'" );

        $prefix = 'syn_testimonials_';
        $html .= '  <div class="carousel slide syn-carouselTestimonials" data-ride="carousel" id="carouselTestimonials">';
                        
                            $html .= '<div class="carousel-inner carousel">';
                                $html .= '<div class="syncon_testimonials ">';
                               
                                    foreach($query as $q):
                                            $imagen =  get_post_meta( $q->ID, $prefix.'img', 1 ) ;
                                            $name =  get_post_meta( $q->ID, $prefix.'name', 1 ) ;
                                            $job =  get_post_meta( $q->ID, $prefix.'job', 1 ) ;
                                            $testimonial =  get_post_meta( $q->ID, $prefix.'testimonial', 1 ) ;
                    
                                            $classMostrar = ($contadorElementos == 0 )? 'active': '';
                                            
                                        
                                                $html .='<div class="carousel-item  '.esc_attr($classMostrar).' carrusel-item-'.esc_attr($contadorElementos).'">';
                                                    $html .='<div class=" syncon_testimonials-box ">';
                                                        $html .='<picture class="syncon_testimonials--img">';
                                                            $html .='<img src="'.esc_url($imagen ).'"/>';
                                                        $html .='</picture>';
                                                        $html .='<div class="syncon_testimonials--info">';
                                                            $html .= '<span class="syncon_testimonials--info_testimonial">'.esc_html($testimonial).'</span>';
                                                            $html .= '<span class="syncon_testimonials--info_name">'.esc_html($name).'</span>';
                                                            $html .= '<span class="syncon_testimonials--info_job">'.esc_html($job).'</span>';
                                                        $html .='</div>';
                                                    $html .='</div>';
                                                $html .='</div>';

                                                if( $contadorElementos != $cantidadElementos):
                                                    $contadorElementos++;
                                                else:
                                                    $contadorElementos = 0;
                                                endif;
                                    endforeach;

                                $html .= '  </div>  '; 
                            $html .= '  </div>  '; 

                            $html .= '<ol class="carousel-indicators"';       
                                for($i = -1; $i < $cantidadElementos; $i++):
                                    $html.= '<li data-target="#carouselTestimonials" data-slide-to="'.esc_attr($i).'"></li>';
                                endfor;
                            $html .= '</o>';
                        
        $html .= '  </div>  '; 
  

        wp_reset_query();
        return $html; 
    }
}

