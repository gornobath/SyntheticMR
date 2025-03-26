<?php
if(! defined('ABSPATH')) exit;

function syncom_scripts_y_styles(){
    $ruta = '';
    $ruta = '/assets';
    /*STYLE */
    wp_enqueue_style('syncom_css', plugins_url($ruta.'/css/style.css', __FILE__ ), '0.0.2' ); 
    /*JS*/

    //wp_enqueue_script('syncom_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), '5.1.3', true  );
    //wp_enqueue_script('syncom_js', plugins_url($ruta.'/js/script.js', __FILE__ ), array('jquery'), 0.0.1, true  );
}

add_action('wp_enqueue_scripts', 'syncom_scripts_y_styles');