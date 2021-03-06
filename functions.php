<?php

    function mygym_resources() {
        // Scripts
        wp_enqueue_script( 'jquery' );
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

    if ( function_exists( 'acf_register_block_type' ) ) {
        /**
         * Adding specific ACF action
         */
        add_action( 'acf/init', 'register_acf_block_types' );
    }

    function register_acf_block_types() {

        /**
         * Blog Block
         */
        acf_register_block_type(
            array(
                'name'              => 'blog',
                'title'             => __( 'Blog' ),
                'description'       => __( 'Blog block' ),
                'render_template'   => 'template-parts/blocks/blog.php',
                'enqueue_script'    => get_template_directory_uri() . '/inc/js/masonry.js',
                'icon'              => 'book-alt',
                'keywords'          => array(
                                        'Blog',
                                        'club information'
                ),
                'supports'          => array(
                    'align' => false,
                )
            )
        ); 

        /**
         * Carousel Block
         */
        acf_register_block_type(
            array(
                'name'              => 'carousel',
                'title'             => __( 'Carousel' ),
                'description'       => __( 'Gym Carousel block' ),
                'render_template'   => 'template-parts/blocks/carousel.php',
                'enqueue_script'    => get_template_directory_uri() . '/inc/js/countdown.js',
                'icon'              => 'format-gallery',
                'keywords'          => array(
                                        'carousel',
                                        'banner'
                                    )
                )
        ); 

        /**
         * CTA Block
         */
        acf_register_block_type(
            array(
                'name'              => 'cta',
                'title'             => __( 'CTA' ),
                'description'       => __( 'Gym cta block' ),
                'render_template'   => 'template-parts/blocks/cta.php',
                'icon'              => 'info',
                'keywords'          => array(
                                        'cta',
                                        'call to action'
                                    )
                )
        );

        /**
         * Features Block
         */
        acf_register_block_type(
            array(
                'name'              => 'features',
                'title'             => __( 'Features' ),
                'description'       => __( 'Gym Features block' ),
                'render_template'   => 'template-parts/blocks/features.php',
                'icon'              => 'pressthis',
                'keywords'          => array(
                                        'features',
                                        'product'
                                    )
                )
        );
    };
