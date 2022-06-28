<?php 
  $labels = array(
        'name' => _x( 'Trip Packages', 'Post Type General Name', 'textdomain' ),
        'singular_name' => _x( 'Trip Package', 'Post Type Singular Name', 'textdomain' ),
        'menu_name' => _x( 'Trip Packages', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar' => _x( 'Trip Package', 'Add New on Toolbar', 'textdomain' ),
        'archives' => __( 'Trip Package Archives', 'textdomain' ),
        'attributes' => __( 'Trip Package Attributes', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Trip Package:', 'textdomain' ),
        'all_items' => __( 'All Trip Packages', 'textdomain' ),
        'add_new_item' => __( 'Add New Trip Package', 'textdomain' ),
        'add_new' => __( 'Add New', 'textdomain' ),
        'new_item' => __( 'New Trip Package', 'textdomain' ),
        'edit_item' => __( 'Edit Trip Package', 'textdomain' ),
        'update_item' => __( 'Update Trip Package', 'textdomain' ),
        'view_item' => __( 'View Trip Package', 'textdomain' ),
        'view_items' => __( 'View Trip Packages', 'textdomain' ),
        'search_items' => __( 'Search Trip Package', 'textdomain' ),
        'not_found' => __( 'Not found', 'textdomain' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
        'featured_image' => __( 'Featured Image', 'textdomain' ),
        'set_featured_image' => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item' => __( 'Insert into Trip Package', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Trip Package', 'textdomain' ),
        'items_list' => __( 'Trip Packages list', 'textdomain' ),
        'items_list_navigation' => __( 'Trip Packages list navigation', 'textdomain' ),
        'filter_items_list' => __( 'Filter Trip Packages list', 'textdomain' ),
    );
    $args = array(
        'label' => __( 'Trip Package', 'textdomain' ),
        'description' => __( '', 'textdomain' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-site-alt3',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
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
        'show_in_menu' => 'theme-page',
    );
    register_post_type( 'trippackage', $args );
