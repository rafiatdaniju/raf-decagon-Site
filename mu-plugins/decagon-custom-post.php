<?php
add_theme_support( 'post-thumbnails' );

function decagon_register_custom_posts(){

    // Leaders Post Type
    register_post_type('Leaders',
     
    array(
        'labels' => array(
            'name'=> __('Leaders'),
            'singular_name' => __('leader'),
            'add_new_item' => 'Add New Leader',
            'edit_item' => 'Edit Leader',
            'all_items' => 'All leaders'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-groups',
        'rewrite' => array('slug' => 'leader'),
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    )
    );

    
    // Testimonial Post Type
    register_post_type('Testimonial',
    
    array(
        'labels' => array(
            'name'=> __('Testimonial'),
            'singular_name' => __('testimonial'),
            'add_new_item' => 'Add New Testimonial',
            'edit_item' => 'Edit Testimonial',
            'all_items' => 'All Testimonials'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-awards',
        'rewrite' => array('slug' => 'testimonial'),
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail' ),
    )
    );

    // Client Post Type
    register_post_type('Clients',
    
    array(
        'labels' => array(
            'name'=> __('Clients'),
            'singular_name' => __('Client'),
            'add_new_item' => 'Add New Client',
            'edit_item' => 'Edit Client',
            'all_items' => 'All Clients'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-money',
        'rewrite' => array('slug' => 'client'),
        'show_in_rest' => true,
        'supports' => array('title', 'thumbnail')
    )
    );

    // Partner Post Type
    register_post_type('Partners',
    
    array(
        'labels' => array(
            'name'=> __('Partners'),
            'singular_name' => __('Partner'),
            'add_new_item' => 'Add New Partner',
            'edit_item' => 'Edit Partner',
            'all_items' => 'All Partners'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'rewrite' => array('slug' => 'partner'),
        'show_in_rest' => true,
        'supports' => array('title', 'thumbnail')
    )
    );

    //Skill Post Type
    register_post_type('Skills',
    
    array(
        'labels' => array(
            'name'=> __('Skills'),
            'singular_name' => __('skill'),
            'add_new_item' => 'Add New Skill',
            'edit_item' => 'Edit Skill',
            'all_items' => 'All Skill'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-lightbulb',
        'rewrite' => array('slug' => 'skill'),
        'show_in_rest' => true,
        'supports' => array('title'),
    )
    );

    // Leaders Post Type
    register_post_type('Blog-Posts',
    
    array(
        'labels' => array(
            'name'=> __('Blog-Posts'),
            'singular_name' => __('Blog-Post'),
            'add_new_item' => 'Add New Blog Post',
            'edit_item' => 'Edit Blog Post',
            'all_items' => 'All Blog Posts'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-edit',
        'rewrite' => array('slug' => 'blog'),
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt'),
    )
    );
    
}

add_action('init', 'decagon_register_custom_posts');
