<?php
// Register Custom Post Type
function cpt_video() {

	$labels = array(
		'name'                => _x( 'Mise à jour des vidéos actu', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Video', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Video', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Video :', 'text_domain' ),
		'all_items'           => __( 'Tous', 'text_domain' ),
		'view_item'           => __( 'Voir', 'text_domain' ),
		'add_new_item'        => __( 'Ajouter', 'text_domain' ),
		'add_new'             => __( 'Nouveau', 'text_domain' ),
		'edit_item'           => __( 'Editer', 'text_domain' ),
		'update_item'         => __( 'Mettre à jour', 'text_domain' ),
		'search_items'        => __( 'Chercher', 'text_domain' ),
		'not_found'           => __( 'Aucun résultat', 'text_domain' ),
		'not_found_in_trash'  => __( 'Rien dans la corbeille', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Video', 'text_domain' ),
		'description'         => __( 'Video information', 'text_domain' ),
		'labels'              => $labels,
		'supports' 			  => array( 'title', 'editor', 'revisions' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_admin_bar'   => true,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
//		'menu_icon' => get_bloginfo('template_directory') . '/images/podcast-icon.png',
		'capability_type'     => 'page',
	);
	register_post_type( 'video', $args );

}

// Hook into the 'init' action
add_action( 'init', 'cpt_video', 0 );
?>