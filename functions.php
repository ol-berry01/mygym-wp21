<?php

    function mygym_resources() {
        // Scripts
        wp_enqueue_script( 'mygym_dist_vendors', get_template_directory_uri() . '/dist/js/vendors.bundle.js', array(), false, true  );
        wp_enqueue_script( 'mygym_dist_scripts', get_template_directory_uri() . '/dist/js/scripts.bundle.js', array(), false, true  );
        wp_enqueue_script( 'mygym_dist_main', get_template_directory_uri() . '/dist/js/main.bundle.js', array(), false, true  );
        // Stylesheets
        wp_enqueue_style( 'mygym_fontawesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css', NULL, microtime() );
        wp_enqueue_style( 'mygym_bootstrap_styles', get_template_directory_uri() . '/dist/css/bootstrap.css', NULL, microtime() );
        wp_enqueue_style( 'mygym_main_styles', get_template_directory_uri() . '/dist/css/main.css', NULL, microtime() );
        wp_enqueue_style( 'mygym_styles', get_stylesheet_uri(), NULL, microtime() );
    }

    add_action( 'wp_enqueue_scripts', 'mygym_resources' );

    function mygym_features() {
        register_nav_menu( 'headerMenu', 'Header Menu' );
    }

    add_action( 'after_setup_theme', 'mygym_features' );

    /**
     * Register Custom Navigation Walker
     */
    function register_navwalker(){
        require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
    }

    add_action( 'after_setup_theme', 'register_navwalker' );