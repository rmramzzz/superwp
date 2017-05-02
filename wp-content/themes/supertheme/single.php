<?php get_header(); ?>
    <div class="main-container">
        <div class="wrapper-content clearfix">
            <?php
            while (have_posts()) : the_post();
                get_template_part('theme-structure/content', 'single');
            endwhile;
            ?>
        </div>
        <div class="wrapper-sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>