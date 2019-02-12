<!-- Include the header.php file, from the same folder -->
<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php 
            // While you have posts in the wp, print/show the title, content and at what date the post was published //
                if( have_posts() ):
                    while( have_posts() ): the_post(); ?>
                        <?php get_template_part('content',get_post_format()); ?>           
                    <?php endwhile;           
                endif;
            ?>   
        </div>
    </div><!-- /.row -->
</div><!-- /.container -->

<!-- Include the footer.php file, from the same folder -->
<?php get_footer(); ?>