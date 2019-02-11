<?php
/* INCLUDE SCRIPTS */
    function emptytheme_script_enqueue() {
        //css
        wp_enqueue_style('customstyle', get_template_directory_uri().'/css/emptytheme.css', array(), '1.0.0', 'all');
        //js
        wp_enqueue_script('customjs', get_template_directory_uri().'/js/emptytheme.js', array(), '1.0.0', true);
    }

    add_action('wp_enqueue_scripts', 'emptytheme_script_enqueue');

   /* ACTIVATE MENUS */
    function empty_theme_setup(){
        add_theme_support('menus');
        register_nav_menu( 'primary', 'Top Navigation' );
        register_nav_menu( 'secondary', 'Bottom Navigation' );
    }
    add_action('init', 'empty_theme_setup');

/* THEME SUPPORT FUNCTION */
    //background
   $defaultbg = array(
        'default-image'          => '',
        'default-preset'         => 'default', // 'default', 'fill', 'fit', 'repeat', 'custom'
        'default-position-x'     => 'left',    // 'left', 'center', 'right'
        'default-position-y'     => 'top',     // 'top', 'center', 'bottom'
        'default-size'           => 'auto',    // 'auto', 'contain', 'cover'
        'default-repeat'         => 'repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
        'default-attachment'     => 'scroll',  // 'scroll', 'fixed'
        'default-color'          => '',
        'wp-head-callback'       => '_custom_background_cb',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
        );
    add_theme_support( 'custom-background', $defaultbg );

    //header-image
    $defaulthead = array(
        'default-image'          => '',
        'random-default'         => false,
        'width'                  => 0,
        'height'                 => 0,
        'flex-height'            => false,
        'flex-width'             => false,
        'default-text-color'     => '',
        'header-text'            => true,
        'uploads'                => true,
        'wp-head-callback'       => '',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
        'video'                  => false,
        'video-active-callback'  => 'is_front_page',
        );
    add_theme_support( 'custom-header', $defaulthead );

    //thumbnails
    add_theme_support('post-thumbnails');

    //post-formats
    add_theme_support( 'post-formats', array( 'aside', 'image' ) );

    //logo
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );

/* SIDEBAR FUNCTION */
function emptytheme_widget_setup(){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar-1',
        'class' => 'custom',
        'description' => 'Standard Sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>'
    ));
}
add_action('widgets_init','emptytheme_widget_setup');
?>