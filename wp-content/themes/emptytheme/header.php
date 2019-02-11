<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Empty Theme</title>
        <?php wp_head(); ?>
    </head>
    <?php
        if(is_front_page()):
            $theme_classes = array('theme-class');
        else:
            $theme_classes = array('no-theme-class');
        endif;
    ?>
    <body <?php body_class( $theme_classes ); ?> >
        <?php wp_nav_menu(array('theme_location'=>'primary')); ?> 
        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt=""/>

        <div class="search-form-container">
            <?php get_search_form(); ?>
        </div>