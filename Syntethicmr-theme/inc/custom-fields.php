<?php

/*=============================================================
*         METABOXES PAGINA DE SERVICIOS
==============================================================*/

add_action( 'cmb2_admin_init', 'md_bb_servicios_page_metaboxes' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function md_bb_servicios_page_metaboxes() {
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$prefix = 'md_bb_servicios_page_';

	/**
	 * Metabox to be displayed on a single page ID
	 */
	$md_bb_servicios_mb = new_cmb2_box( array(
		'id'           => $prefix.'principal_metabox',
		'title'        => esc_html__( 'Información de Servicios', 'cmb2' ),
		'object_types' => array( 'page' ),
		//'show_on'      => array( 'key' => 'page', 'value' => 'servicios' ),
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array(  3318 ),
		),
	) ); 

  $md_bb_servicios_mb->add_field( array(
        'id'   => $prefix.'posiciones_grupo',
        'type'        => 'group',
        'description' => __( 'Seleccion', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Sección {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Nueva sección', 'cmb2' ),
            'remove_button'     => __( 'Eliminar', 'cmb2' ),
            'sortable'          => true,
            // 'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) ); 

 	$md_bb_servicios_mb->add_group_field( $prefix.'posiciones_grupo', array(
		'name'       => __( 'Nombre', 'cmb2' ),
		'desc'       => __( 'Seleccione un nombre del servicio. si selecciona "sin servicio" tomara el espacio en blanco.', 'cmb2' ),
		'id'         => $prefix . 'post_category',
		'type'       => 'select',
		'options_cb' => 'cc_cmb2_opcionesCategoria',
	) ); 
}

/* =========================================================================
*   LLAMA TODOS LOS NOMBRES Y SLUGS DE LAS CATEGORIAS DE LOS POST
*  =========================================================================*/
function cc_cmb2_opcionesCategoria(){
	
    $args = array(  
		'post_type' => 'servicio',
        'post_status' => 'publish',
        'orderby' => 'name',
        'order'   => 'ASC'
     );

	$loop = new WP_Query( $args ); 
	$array = array();
	$array += [ '-1'=> __( 'Sin servicio', 'cmb2' ) ];
    while ( $loop->have_posts() ) : $loop->the_post(); 
		$array += [ get_the_title().'='.get_permalink() => __( get_the_title(), 'cmb2' ) ];
	endwhile;
	return $array;
}

/*=============================================================
*         METABOXES PAGINA DE SERVICIOS
==============================================================*/

add_action( 'cmb2_admin_init', 'md_bb_blog_metaboxes' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function md_bb_blog_metaboxes() {
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$prefix = 'md_bc_blog_';

	/**
	 * Metabox to be displayed on a single page ID
	 */
	$md_bb_blog_mb = new_cmb2_box( array(
		'id'           => $prefix.'principal_metabox',
		'title'        => esc_html__( 'Autor', 'cmb2' ),
		'object_types' => array( 'post' ),
		//'show_on'      => array( 'key' => 'page', 'value' => 'servicios' ),
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
	) ); 

	$md_bb_blog_mb->add_field( array(
		'name'       => __( 'Autor', 'cmb2' ),
		'desc'       => __( 'Seleccione el autor del artículo.', 'cmb2' ),
		'id'         => $prefix . 'post_autor',
		'type'       => 'select',
		'options_cb' => 'cc_cmb2_opcionesAutorArticulo',
	) );

	$md_bb_blog_mb = new_cmb2_box( array(
		'id'           => $prefix.'img_principal_metabox',
		'title'        => esc_html__( 'Imagen - banner', 'cmb2' ),
		'object_types' => array( 'post' ),
		//'show_on'      => array( 'key' => 'page', 'value' => 'servicios' ),
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
	) ); 

	$md_bb_blog_mb->add_field( array(
		'name'       => __( 'Autor', 'cmb2' ),
		'desc'       => __( 'Seleccione una imagen para el articulo', 'cmb2' ),
		'id'         => $prefix . 'img',
		'type'       => 'file',
		'options_cb' => 'cc_cmb2_opcionesAutorArticulo',
	) );

	

}


/* =========================================================================
*   LLAMA TODOS LOS NOMBRES Y SLUGS DE LAS CATEGORIAS DE LOS POST
*  =========================================================================*/
function cc_cmb2_opcionesAutorArticulo(){
	
    $args = array(  
		'post_type' => 'integrantes',
        'post_status' => 'publish',
        'orderby' => 'name',
        'order'   => 'ASC'
     );

	$loop = new WP_Query( $args ); 
	$array = array();
	$array += [ '-1'=> __( 'Selecione un autor', 'cmb2' ) ];
    while ( $loop->have_posts() ) : $loop->the_post(); 
		$array += [ get_the_ID() => __( get_the_title(), 'cmb2' ) ];
	endwhile;
	return $array;
}


/* =========================================================================
*   LLAMA LOS KEYWORDS A LAS PAGINAS Y POST
*  =========================================================================*/
add_action( 'cmb2_admin_init', 'md_bb_keywords_metaboxes' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function md_bb_keywords_metaboxes() {
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$prefix = 'delage_campos_';

	/**
	 * Metabox to be displayed on a single page ID
	 */
	$md_bb_blog_mb = new_cmb2_box( array(
		'id'           => $prefix.'keywords_metabox',
		'title'        => esc_html__( 'Keywords - palabras Clave', 'cmb2' ),
		'object_types' => array( 'post','page' ),
		//'show_on'      => array( 'key' => 'page', 'value' => 'servicios' ),
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
	) ); 

	$md_bb_blog_mb->add_field( array(
		'name'       => __( 'Keywords', 'cmb2' ),
		'desc'       => __( 'Agregue las keywords o palabras clave que desee. Sí son dos o mas se debe de agregar una coma(,) sin espacios para separarlas. ej, palabra1,palabra2,palabra3.', 'cmb2' ),
		'id'         => $prefix . 'keywords',
		'type'       => 'textarea',

	) );
}
