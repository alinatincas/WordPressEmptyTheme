<!DOCTYPE html>
<html <?php language_attributes(); ?> > <!-- displays the language for of wp -->

	<head>
        <meta charset="<?php bloginfo('charset'); ?>"> 
        <!-- displays the 'Encoding for pages and feeds' set in Settings > Reading of WP.
         Note: this parameter always echoes 'UTF-8', which is the default encoding of WordPress.-->
		<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title> <!-- Displays the 'Site Title' set in Settings > General from WP.-->
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<meta name="description" content="<?php bloginfo('description'); ?>"> <!-- Get the description from the wp -->
        <?php wp_head(); ?> 
            <!--Always have wp_head() just before the closing </head>
            tag of your theme, or you will break many plugins, which
            generally use this hook to add elements to <head> such
            as styles, scripts, and meta tags. -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>

    <?php 
        /* If you are on the front-page, add the classes below, if not, then put no-empthytheme-class */
        if( is_front_page() ):
            $emptytheme_classes = array( 'emptytheme-class', 'empty-class' );
        else:
            $emptytheme_classes = array( 'no-emptytheme-class' );
        endif;
    
    ?>

    <body <?php body_class( $emptytheme_classes ); ?>> <!-- Add classes automatic to the body-->
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo(); }
                    ?>
                </div>   
                <div class="col-md-9">
                        <!-- show the nav menu-->
                        <!--?php wp_nav_menu(array('theme_location'=>'primary')); ?> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- this piece of code is necessary for the image that you set on the wp to be, to appear on the website -->
                    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" class="img-fluid"/> 
                </div>
            </div>
        </div>
        
    

    

           
        