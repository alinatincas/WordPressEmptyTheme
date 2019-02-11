<?php
    //Enabling the scripts
    function emptytheme_script_enqueue() {
        wp_enqueue_style('customstyle', get_template_directory_uri().'/css/emptytheme.css', array(), '1.0.0', 'all');
        wp_enqueue_script('customjs', get_template_directory_uri().'/js/emptytheme.js', array(), '1.0.0', true);
    }

    add_action('wp_enqueue_scripts', 'emptytheme_script_enqueue');

    //Activate some widgets on WP
    function empty_theme_setup(){
        add_theme_support('menus');
        register_nav_menu( 'primary', 'Top Navigation' );
        register_nav_menu( 'secondary', 'Bottom Navigation' );
    }
    add_action('init', 'empty_theme_setup');

    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
?>