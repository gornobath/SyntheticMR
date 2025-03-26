<?php

/*=============================================================
*         METABOXES PAGINA DE Banner
==============================================================*/

add_action( 'cmb2_admin_init', 'syncon_testimonials_metabox' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function syncon_testimonials_metabox() {
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$prefix = 'syn_testimonials_';

	/**
	 * Metabox to be displayed on a single page ID
	 */
	$syncom_test = new_cmb2_box( array(
		'id'           => $prefix.'principal_metabox',
		'title'        => esc_html__( 'Información dePerfileria', 'cmb2' ),
		'object_types' => array( 'syncom_testimonials' ),
		//'show_on'      => array( 'key' => 'page', 'value' => 'aclecom_banner' ),
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left

	) ); 


	$syncom_test->add_field( array(
		'name'       => __( 'Image', 'cmb2' ),
		/*'desc'       => __( '', 'cmb2' ),*/
		'id'         => $prefix . 'img',
		'type'       => 'file',
		'text'    => array(
			'add_upload_file_text' => 'Agregar imagen' // Change upload button text. Default: "Add or Upload File"
		),
		'query_args' => array(
			'type' => array(
				'image/jpeg',
				'image/jpg',
			    'image/png',
			    'image/webp',
			),
		),
		'attributes'  => array(
			'required'    => 'required',
		),
		
	) );
	$syncom_test->add_field( array(
		'name'       => __( 'Name', 'cmb2' ),
		/*'desc'       => __( '', 'cmb2' ),*/
		'id'         => $prefix . 'name',
		'type' => 'text',
	) );

	$syncom_test->add_field( array(
		'name'       => __( 'Job', 'cmb2' ),
		/*'desc'       => __( '', 'cmb2' ),*/
		'id'         => $prefix . 'job',
		'type' => 'textarea',
		'attributes'  => array(
			'required'    => 'required',
		),
		
	) );

	$syncom_test->add_field( array(
		'name'       => __( 'Testimonial', 'cmb2' ),
		'desc'       => __( '', 'cmb2' ),
		'id'         => $prefix . 'testimonial',
		'type' => 'textarea',
		'attributes'  => array(
			'required'    => 'required',
		),
		
	) );


}
