<section>
    <div class="">
        Post ID equals to <?php the_ID(); ?>
    </div>
    <div>
        Post name <?php echo the_title(); ?>
    </div>
    <div>
        Post link: <a href="<?php echo get_page_link() ?>" ><?php the_title(); ?></a>
    </div>
</section>