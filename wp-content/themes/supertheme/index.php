<?php
/*
  * Blog main page
  * This template is using for output posts
  */
?>
<?php get_header(); ?>
    <div class="main-container">
        <div class="content-container">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part('content-single'); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="sidebar">
            <?php if( is_active_sidebar( 'header_info' ) ) : ?>
                <?php dynamic_sidebar( 'header_info' ); ?>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>