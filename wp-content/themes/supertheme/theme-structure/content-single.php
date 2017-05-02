<div class="post post-<?php the_ID(); ?>">
    <div class="entry-header">
        <h2><a href="<?php echo get_permalink()?>"><?php the_title(); ?></a></h2>
    </div>
    <div class="content">
        <?php if(is_home()): ?>
            <?php the_excerpt(); ?>
        <?php else: ?>
            <?php the_content(); ?>
        <?php endif; ?>
    </div>
</div>