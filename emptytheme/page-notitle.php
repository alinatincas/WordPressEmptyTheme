<?php 
	
/*
	Template Name: Page No Title
*/
	
get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php 
                    //if you have posts, publish only the content and time, without the title
                    if( have_posts() ):	
                        while( have_posts() ): the_post(); ?>									
                            <p><?php the_content(); ?></p>
                            <small>Posted on: <?php the_time('F j, Y'); ?></small>
                            <hr>		
                        <?php endwhile;		
                    endif;			
                ?>
            </div>
        </div>
    </div>
    
<?php get_footer(); ?>