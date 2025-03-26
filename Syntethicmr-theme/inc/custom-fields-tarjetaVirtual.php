<?php



/* =============================================================
*   METABOXES PARA LA INFORMACION PRINCIPAL DEL INTEGRANTE
*  ==============================================================*/

add_action( 'cmb2_admin_init', 'cd_lm_cmb2_Tarjetavirtual' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function cd_lm_cmb2_Tarjetavirtual() {
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$prefix = 'md_bc_td_';

	/**
	 * Metabox to be displayed on a single page ID
	 */
	$md_bc_td_campos = new_cmb2_box( array(
		'id'           => $prefix.'tarjetaVirtual_metabox',
		'title'        => esc_html__( 'Información para la tarjeta Digital', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/tarjetaDigital.php' ),
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
	) );

	$md_bc_td_campos->add_field( array(
		'name' => esc_html__( 'Banner', 'cmb2' ),
		'desc' => esc_html__( 'Se recomienda un tamaño de 600px de ancho por 248px de alto.', 'cmb2' ),
		'id'   => $prefix.'banner',
		'type' => 'file',
	) );

	$md_bc_td_campos->add_field( array(
		'name' => esc_html__( 'Logo Corporativo', 'cmb2' ),
		'desc' => esc_html__( 'Se recomienda un tamaño de 250px de ancho por 60px de alto en formato PNG.', 'cmb2' ),
		'id'   => $prefix.'logo',
		'type' => 'file',
	) );
	$md_bc_td_campos->add_field( array(
		'name' => esc_html__( 'Fotografia del integrante', 'cmb2' ),
		'desc' => esc_html__( 'Se recomienda un tamaño de 180px de ancho por 180px de alto.', 'cmb2' ),
		'id'   => $prefix.'foto_integrante',
		'type' => 'file',
	) );

	$md_bc_td_campos->add_field( array(
    	'name'    => esc_html( 'Nombre del integrante', 'cmb2' ) ,
		'default' => '',
    	'id'      => $prefix.'nombre_integrante',
    	'type'    => 'text',
	) );

	$md_bc_td_campos->add_field( array(
		'name'       => esc_html__( 'Cargo', 'cmb2' ),
		'id'         => $prefix.'cargo_integrante',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$group_field_areas = $md_bc_td_campos->add_field( array(
		'id'          => $prefix.'areas_grupo',
		'type'        => 'group',
		'description' => esc_html__( 'Agregue las areas en que trabaja', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Área {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar otro Contenedor', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );


	$md_bc_td_campos->add_group_field( $group_field_areas, array(
		'name'       => esc_html__( 'Área', 'cmb2' ),
		'id'         => $prefix.'area_integrante',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

}


/* =============================================================
*   METABOXES PARA COMUNICARSE CON EL CLIENTE
*  ==============================================================*/

add_action( 'cmb2_admin_init', 'cd_lm_cmb2_Tarjetavirtual_Comunicacion' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function cd_lm_cmb2_Tarjetavirtual_Comunicacion() {
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$prefix = 'md_bc_td_comicacion';

	/**
	 * Metabox to be displayed on a single page ID
	 */
	$md_bc_td_campos = new_cmb2_box( array(
		'id'           => $prefix.'tarjetaVirtual_comunicacion_metabox',
		'title'        => esc_html__( 'Información para la tarjeta Digital', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/tarjetaDigital.php' ),
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
	) );

	$md_bc_td_campos->add_field( array(
		'name'       => esc_html__( 'Llamar', 'cmb2' ),
		'description' => esc_html__( 'Numero de celular', 'cmb2' ),
		'id'         => $prefix.'llamar',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$md_bc_td_campos->add_field( array(
		'name'       => esc_html__( 'Mensaje', 'cmb2' ),
		'description' => esc_html__( 'Texto de la API de Whastapp. Busque por internet Generador de enlaces para Whatsapp. este link puede servir https://postcron.com/es/blog/landings/generador-de-enlaces-para-whatsapp/ ', 'cmb2' ),
		'id'         => $prefix.'mensaje',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );
	
	$md_bc_td_campos->add_field( array(
		'name'       => esc_html__( 'Mail', 'cmb2' ),
		'description' => esc_html__( 'Email del integrante ', 'cmb2' ),
		'id'         => $prefix.'mail',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

}

/* =============================================================
*   METABOXES PARA COMUNICARSE CON EL CLIENTE
*  ==============================================================*/

add_action( 'cmb2_admin_init', 'cd_lm_cmb2_Tarjetavirtual_Estudios' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function cd_lm_cmb2_Tarjetavirtual_Estudios() {
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$prefix = 'md_bc_td_educacion';

	/**
	 * Metabox to be displayed on a single page ID
	 */
	$md_bc_td_campos = new_cmb2_box( array(
		'id'           => $prefix.'tarjetaVirtual_estudios_metabox',
		'title'        => esc_html__( 'Información de los estudios ', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/tarjetaDigital.php' ),
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
	) );

	$group_field_estudios = $md_bc_td_campos->add_field( array(
		'id'          => $prefix.'estudios_grupo',
		'type'        => 'group',
		'description' => esc_html__( 'Agregue los estudios', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Estudio {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar otro Contenedor', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );


	$md_bc_td_campos->add_group_field( $group_field_estudios, array(
		'name'       => esc_html__( 'Estudio', 'cmb2' ),
		'id'         => $prefix.'estudio',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$md_bc_td_campos->add_group_field( $group_field_estudios, array(
		'name'       => esc_html__( 'Instituto', 'cmb2' ),
		'id'         => $prefix.'instituto',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

}
