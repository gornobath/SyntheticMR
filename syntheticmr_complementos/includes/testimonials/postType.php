<?php if(! defined('ABSPATH')) exit;  
    //SUB MENU PAGE


if(! defined('ABSPATH')) exit;

if ( ! function_exists('argTestimonials_post_type') ) {

	// Register Custom Post Type
	function argTestimonials_post_type() {
	
		$labels = array(
			'name'                  => _x( 'Testimonials', 'Post Type General Name', 'syncom' ),
			'singular_name'         => _x( 'Testimonials', 'Post Type Singular Name', 'syncom' ),
			'menu_name'             => __( 'Testimonials', 'syncom' ),
			'name_admin_bar'        => __( 'Testimonials', 'syncom' ),
			'archives'              => __( 'Archivo de Testimonials', 'syncom' ),
			'attributes'            => __( 'Atributos de Testimonials', 'syncom' ),
			'parent_item_colon'     => __( 'Testimonials Padre', 'syncom' ),
			'all_items'             => __( 'Testimonials', 'syncom' ),
			'add_new_item'          => __( 'Añadir nuevo Testimonials', 'syncom' ),
			'add_new'               => __( 'Añadir Nuevo', 'syncom' ),
			'new_item'              => __( 'Nuevo Testimonials', 'syncom' ),
			'edit_item'             => __( 'Editar Testimonials', 'syncom' ),
			'update_item'           => __( 'Actualizar Testimonials', 'syncom' ),
			'view_item'             => __( 'Ver Testimonials', 'syncom' ),
			'view_items'            => __( 'Ver Testimonials', 'syncom' ),
			'search_items'          => __( 'Buscar Testimonials', 'syncom' ),
			'not_found'             => __( 'No Encontrado', 'syncom' ),
			'not_found_in_trash'    => __( 'No encontrado en la papelera', 'syncom' ),
			'featured_image'        => __( 'Imagen destacada', 'syncom' ),
			'set_featured_image'    => __( 'Configurar imagen destacada', 'syncom' ),
			'remove_featured_image' => __( 'Borrar imagen destacada', 'syncom' ),
			'use_featured_image'    => __( 'Usar como imagen destacada', 'syncom' ),
			'insert_into_item'      => __( 'Insertar en el Testimonials', 'syncom' ),
			'uploaded_to_this_item' => __( 'Actualizar en este Testimonials', 'syncom' ),
			'items_list'            => __( 'Listado de Testimonials', 'syncom' ),
			'items_list_navigation' => __( 'Lista de navegación de Testimonials', 'syncom' ),
			'filter_items_list'     => __( 'Filtro de lista de Testimonials', 'syncom' ),
		);
		$args = array(
			'label'                 => __( 'Testimonials', 'syncom' ),
			'description'           => __( 'Testimonials', 'syncom' ),
			'labels'                => $labels,
			'supports'              => array( 'title', ),
			'taxonomies'            => array( 'category.post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => 'syncom_nav',
			'menu_position'         => 30,
			'menu_icon'             => 'dashicons-groups',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		//register_post_type( 'syncom', $args );
		register_post_type( 'syncom_Testimonials', $args );
	
	}
	add_action( 'init', 'argTestimonials_post_type', 0 );
	/*
	* Flush Rewrite
	*/
	function rewrite_flush_Testimonials() {
		argTestimonials_post_type();
		flush_rewrite_rules();
	}  	
}