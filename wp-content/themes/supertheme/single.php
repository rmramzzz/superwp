<?php get_header(); ?>
    <div class="main-container clearfix">
        <div class="wrapper-content ">
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