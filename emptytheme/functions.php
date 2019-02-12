<?php
/*
	==========================================
	 Include scripts
	==========================================
*/

//Always give unique names to your functions, because having the same name can break your site

function emptytheme_script_enqueue() { //This function is used to embed the styles, js, fonts and other links 
    //css
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7','all'); // bootstrap css
    wp_enqueue_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', 'all'); //instead of glyphicons
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/emptytheme.css', array(), '', 'all'); //own theme css
    
        /*
            All parameters begin with wp_ 
            1 First inside the brackets is a simple name that uses the file we want to use
            2 Second it is the source of the file from where the dot conects the url of the file
            3 An array
            4 Version no.
            5 The media, which suggests where to be printed, in which device. All is to be included in each scenario of our site
        */

    //js / scripts
    wp_enqueue_script( 'jquery' ); //This enqueue above uses WordPress's jQuery. You can enqueue other pre-registered scripts from WordPress too.
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), '3.3.7', true); // bootstrap js
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/emptytheme.js', array(), true); //own theme js
        //true is a boolean neccessary so that it can be included in the footer, to improve page spped and load time 
}

// add_action- to call an action to say when it has to be executed & it connects wp execution functions to custom functions
add_action( 'wp_enqueue_scripts', 'emptytheme_script_enqueue' );  //the first one is to embbed the script, the second one is from the function name (see top)

/*
	==========================================
	 Activate menus
	==========================================
*/
function emptytheme_theme_setup() {
	
	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Menu');
	register_nav_menu('secondary', 'Secondary Menu');
	
}

add_action('init', 'emptytheme_theme_setup');
// instead of init it can be after_setup_theme. Init is initialization of the theme from the time it is called

/*
	==========================================
	 Activate background editor on the wp on the appearance/ adding the possibility to edit your background
	==========================================
*/
//function taken directly from https://codex.wordpress.org/Custom_Backgrounds 
$background = array(
    'default-image' => '',
    'default-preset' => 'default',
    'default-position-x' => 'left',
    'default-position-y' => 'top',
    'default-size' => 'auto',
    'default-repeat' => 'repeat',
    'default-attachment' => 'scroll',
    'default-color' => '',
    'wp-head-callback' => '_custom_background_cb',
    'admin-head-callback' => '',
    'admin-preview-callback' => '',
);
add_theme_support( 'custom-background', $background );

/*
	==========================================
	 Sidebar function
	==========================================
*/
function emptytheme_widget_setup() {   
        register_sidebar(
            array(
                'name'	=> 'Sidebar',
                'id'	=> 'sidebar-1',
                'class'	=> 'custom',
                'description' => 'Standard Sidebar',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget'  => '</aside>',
                'before_title'  => '<h1 class="widget-title">',
                'after_title'   => '</h1>',
            )
        );    
    }
add_action('widgets_init','emptytheme_widget_setup');

/*
	==========================================
	 Activate header editor on the wp on the appearance/ adding the possibility to edit your header
	==========================================
*/
//function taken directly from https://codex.wordpress.org/Custom_Headers
$header = array(
    'default-image' => '',
    'random-default' => false,
    'width' => 0,
    'height' => 0,
    'flex-height' => false,
    'flex-width' => false,
    'default-text-color' => '',
    'header-text' => true,
    'uploads' => true,
    'wp-head-callback' => '',
    'admin-head-callback' => '',
    'admin-preview-callback' => '',
    'video' => true,
    'video-active-callback' => 'is_front_page',
);
add_theme_support( 'custom-header', $header );

/*
	==========================================
	 Activate logo editor / adding the possibility to custom and add a logo to your wp
	==========================================
*/
// function taken directly from https://codex.wordpress.org/Theme_Logo 
function theme_prefix_the_custom_logo() {	
	if ( function_exists( 'the_custom_logo' ) ) { //Use function_exists() wrapper to maintain backwards compatibility with older versions of WordPress.
		the_custom_logo();
	}
}

add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 100,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );

/*
	==========================================
	 Activate thumbnail posts / adding the possibility to add a feature image for your posts
	==========================================
*/
add_theme_support('post-thumbnails');

/*
	==========================================
	 Activate post-format of your post / adding the possibility to add a format for your post
	==========================================
*/
add_theme_support('post-formats',array('aside','image','video', 'link', 'gallery', 'quote', 'status', 'audio', 'chat'));

/*
	==========================================
	 Hide the version of wp that you have so that hackers can't see it
	==========================================
*/
function emptytheme_remove_version() {
	return '';
}
add_filter('the_generator', 'emptytheme_remove_version');



