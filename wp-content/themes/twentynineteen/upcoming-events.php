<?php
define( 'ROOT', plugins_url( '', __FILE__ ) );
define( 'IMAGES', ROOT . '/img/' );
define( 'STYLES', ROOT . '/css/' );
define( 'SCRIPTS', ROOT . '/js/' );

$labels = array(
		'name'                  =>   __( 'Events', 'uep' ),
		'singular_name'         =>   __( 'Event', 'uep' ),
		'add_new_item'          =>   __( 'Add New Event', 'uep' ),
		'all_items'             =>   __( 'All Events', 'uep' ),
		'edit_item'             =>   __( 'Edit Event', 'uep' ),
		'new_item'              =>   __( 'New Event', 'uep' ),
		'view_item'             =>   __( 'View Event', 'uep' ),
		'not_found'             =>   __( 'No Events Found', 'uep' ),
		'not_found_in_trash'    =>   __( 'No Events Found in Trash', 'uep' )
);

$supports = array(
		'title',
		'editor',
		'excerpt'
);

$args = array(
		'label'         =>   __( 'Events', 'uep' ),
		'labels'        =>   $labels,
		'description'   =>   __( 'A list of upcoming events', 'uep' ),
		'public'        =>   true,
		'show_in_menu'  =>   true,
		'menu_icon'     =>   IMAGES . 'event.svg',
		'has_archive'   =>   true,
		'rewrite'       =>   true,
		'supports'      =>   $supports
);

register_post_type( 'event', $args );

