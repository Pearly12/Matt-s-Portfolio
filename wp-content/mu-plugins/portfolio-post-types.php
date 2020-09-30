<?php

// Function Post Type 

function portfolio_post_types(){
    register_post_type('project', array(
        'supports' => array('title', 'editor'),
        'public' => true,    
        'labels' => array(
            'name' => 'Projects',
            'edit_item' => 'Edit Project',
            'all_items' => 'All Projects',
            'singular_name' => 'Project'
        ),
        'menu_icon' => 'dashicons-desktop'
    ));
}

add_action('init', 'portfolio_post_types');