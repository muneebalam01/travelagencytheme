<?php  $labels = array(
        'name' => _x( 'Destinations', 'Post Type General Name', 'textdomain' ),
        'singular_name' => _x( 'Destinations', 'Post Type Singular Name', 'textdomain' ),
        'menu_name' => _x( 'Destinations', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar' => _x( 'Destinations', 'Add New on Toolbar', 'textdomain' ),
        'archives' => __( 'Destinations Archives', 'textdomain' ),
        'attributes' => __( 'Destinations Attributes', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Destinations:', 'textdomain' ),
        'all_items' => __( 'All Destinations', 'textdomain' ),
        'add_new_item' => __( 'Add New Destinations', 'textdomain' ),
        'add_new' => __( 'Add New', 'textdomain' ),
        'new_item' => __( 'New Destinations', 'textdomain' ),
        'edit_item' => __( 'Edit Destinations', 'textdomain' ),
        'update_item' => __( 'Update Destinations', 'textdomain' ),
        'view_item' => __( 'View Destinations', 'textdomain' ),
        'view_items' => __( 'View Destinations', 'textdomain' ),
        'search_items' => __( 'Search Destinations', 'textdomain' ),
        'not_found' => __( 'Not found', 'textdomain' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
        'featured_image' => __( 'Featured Image', 'textdomain' ),
        'set_featured_image' => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item' => __( 'Insert into Destinations', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Destinations', 'textdomain' ),
        'items_list' => __( 'Destinations list', 'textdomain' ),
        'items_list_navigation' => __( 'Destinations list navigation', 'textdomain' ),
        'filter_items_list' => __( 'Filter Destinations list', 'textdomain' ),
    );
    $args = array(
        'label' => __( 'Destinations', 'textdomain' ),
        'description' => __( '', 'textdomain' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-site-alt3',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author'),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type( 'destinations', $args );