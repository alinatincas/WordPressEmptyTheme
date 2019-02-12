<?php get_header(); ?>
    <?php 
        if(have_posts()):
            while(have_posts()): the_post(); ?>
                <?php get_template_part('content',get_post_format()); ?>
            <?php endwhile;
        endif;?>

        <small><?php the_category(''); ?> || <?php the_tags(); ?> || <?php edit_post_link() ?> </small>

        <?php the_content(); ?>
        

<?php get_footer(); ?>