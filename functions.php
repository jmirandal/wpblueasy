<?php

    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    function load_assets( ){
        
        //load BS
        wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css');
    
        //wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');

        wp_enqueue_style('font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
        
        //load stlye.css
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        
        //load JS
        wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');
        
    }
    add_action('wp_enqueue_scripts', 'load_assets');
                        
    //register nav menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'THEMENAME' ),
    ) );

    //support featured image
    add_theme_support('post-thumbnails'); 
        
?>