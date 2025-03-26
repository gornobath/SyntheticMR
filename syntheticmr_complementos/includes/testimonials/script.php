<?php
if(! defined('ABSPATH')) exit;

function syncom_testimonials_complementos_scripts_y_styles(){
    $ruta = '';
    $ruta = '/assets';
    /*STYLE */
    wp_enqueue_style('syncom_testimonials', plugins_url($ruta.'/css/style.css', __FILE__ ), '0.0.1' ); 
    wp_enqueue_script('syncom_testimonials', plugins_url($ruta.'/js/script.js', __FILE__ ), array('jquery'), '0.0.1', true  );
}

add_action('wp_enqueue_scripts', 'syncom_testimonials_complementos_scripts_y_styles');


