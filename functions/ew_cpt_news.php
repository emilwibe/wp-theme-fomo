<?php
if (!defined('ABSPATH')) { exit; }

// Register Custom Post Type
function register_cpt_ew_news() {

	$labels = array(
		'name'                  => 'Nyheder',
		'singular_name'         => 'Nyhed',
		'menu_name'             => 'Nyheder',
		'name_admin_bar'        => 'Nyheder',
		'archives'              => 'Nyhedsarkiv',
		'attributes'            => 'Nyhedsattributter',
		'parent_item_colon'     => 'Forældreelement',
		'all_items'             => 'Alle Nyheder',
		'add_new_item'          => 'Tilføj ny Nyhed',
		'add_new'               => 'Tilføj ny',
		'new_item'              => 'Ny Nyhed',
		'edit_item'             => 'Rediger Nyhed',
		'update_item'           => 'Opdater Nyhed',
		'view_item'             => 'Se Nyhed',
		'view_items'            => 'Se Nyheder',
		'search_items'          => 'Søg Nyhed',
		'not_found'             => 'Ikke fundet',
		'not_found_in_trash'    => 'Ikke fundet i papirkurv',
		'featured_image'        => 'Fremhævet billede',
		'set_featured_image'    => 'Vælg fremhævet billede',
		'remove_featured_image' => 'Fjern fremhævet billede',
		'use_featured_image'    => 'Brug som fremhævet villede',
		'insert_into_item'      => 'Indsæt i Nyhed',
		'uploaded_to_this_item' => 'Upload til denne Nyhed',
		'items_list'            => 'Nyhedsliste',
		'items_list_navigation' => '',
		'filter_items_list'     => '',
	);
	$args = array(
		'label'                 => 'Nyhed',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-admin-site-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'rewrite'				=> array(
			'slug'			=>	'nyhed'
		)
	);
	register_post_type( 'fomo_news', $args );

}
add_action( 'init', 'register_cpt_ew_news', 0 );