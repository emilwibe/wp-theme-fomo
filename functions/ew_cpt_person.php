<?php
if (!defined('ABSPATH')) { exit; }

// Register Custom Post Type
function reigster_cpt_ew_person() {

	$labels = array(
		'name'                  => 'Personer',
		'singular_name'         => 'Person',
		'menu_name'             => 'Personer',
		'name_admin_bar'        => 'Personer',
		'archives'              => 'Personarkiv',
		'attributes'            => 'Personattributter',
		'parent_item_colon'     => 'Forældreelement',
		'all_items'             => 'Alle personer',
		'add_new_item'          => 'Tilføj ny person',
		'add_new'               => 'Tilføj ny',
		'new_item'              => 'Ny Person',
		'edit_item'             => 'Rediger Person',
		'update_item'           => 'Opdater Person',
		'view_item'             => 'Se Person',
		'view_items'            => 'Se Personer',
		'search_items'          => 'Søg Person',
		'not_found'             => 'Ikke fundet',
		'not_found_in_trash'    => 'Ikke fundet i papirkurv',
		'featured_image'        => 'Fremhævet billede',
		'set_featured_image'    => 'Vælg fremhævet billede',
		'remove_featured_image' => 'Fjern fremhævet billede',
		'use_featured_image'    => 'Brug som fremhævet villede',
		'insert_into_item'      => 'Indsæt i Person',
		'uploaded_to_this_item' => 'Upload til denne Person',
		'items_list'            => 'Personliste',
		'items_list_navigation' => '',
		'filter_items_list'     => '',
	);
	$args = array(
		'label'                 => 'Person',
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 22,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'ew_person', $args );

}
add_action( 'init', 'reigster_cpt_ew_person', 0 );