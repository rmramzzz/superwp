<?php if( is_active_sidebar( 'header_info' ) ) : ?>
    <?php dynamic_sidebar( 'header_info' ); ?>
    <?php
    $categories = get_tags( array(
        'parent'  => 0
    ) );

    usort($categories, "order_tags_by_tagcounter");
    outputTagsFont($categories);
    ?>
    <canvas id="myCanvas" width="300" height="200">
        <ul>
            <?php
                foreach ($categories as $c){
                    echo '<li><a href="'.get_tag_link($c).'" style="font-size: '.$c->font_size.'px;">'.$c->name.'</a></li>';
                }
            ?>
        </ul>
    </canvas>

<?php endif; ?>