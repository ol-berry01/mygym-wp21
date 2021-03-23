<?php

    function bp_resources() {
        // Scripts
        wp_enqueue_script( 'bp_dist_vendors', get_template_directory_uri() . '/dist/js/vendors.bundle.js', array(), false, true  );
        wp_enqueue_script( 'bp_dist_scripts', get_template_directory_uri() . '/dist/js/scripts.bundle.js', array(), false, true  );
        wp_enqueue_script( 'bp_dist_main', get_template_directory_uri() . '/dist/js/main.bundle.js', array(), false, true  );
        // Stylesheets
        wp_enqueue_style( 'bp_fontawesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css', NULL, microtime() );
        wp_enqueue_style( 'bp_bootstrap_styles', get_template_directory_uri() . '/dist/css/bootstrap.css', NULL, microtime() );
        wp_enqueue_style( 'bp_main_styles', get_template_directory_uri() . '/dist/css/main.css', NULL, microtime() );
        wp_enqueue_style( 'bp_styles', get_stylesheet_uri(), NULL, microtime() );
    }

    add_action( 'wp_enqueue_scripts', 'bp_resources' );