<?php
//Adding styles to website
function portfolio_files() {
    wp_enqueue_style('foundation-2', 'https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css');
    wp_enqueue_style('font-awesome', get_theme_file_uri('./fontawesome/css/all.css'));
    wp_enqueue_style('foundation', get_theme_file_uri('/css/foundation.css'));
    wp_enqueue_style('portfolio_main_styles', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts', 'portfolio_files');

//Load contact.php when sending email
if (!empty($_POST['submitEmail'])){
    require_once(__DIR__.'/contact.php');
    die();
}