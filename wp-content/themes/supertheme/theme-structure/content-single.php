<div class="post post-<?php the_ID(); ?>">
    <div class="entry-header">
        <h2><a href="<?php echo get_permalink()?>"><?php the_title(); ?></a></h2>
    </div>
    <div class="content">
        <?php if(is_home() || is_category() || is_search() || is_tag()): ?>
            <?php the_excerpt(); ?>
        <?php else: ?>
            <?php the_content(); ?>

                <?php
                $post_tags = Array();
                foreach (get_the_tags() as $tag){
                    array_push($post_tags, $tag->term_id);
                }
            increaseTagsViews($post_tags);
                ?>
        <?php endif; ?>
    </div>
</div>