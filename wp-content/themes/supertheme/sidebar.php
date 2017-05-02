<?php if( is_active_sidebar( 'header_info' ) ) : ?>
    <?php dynamic_sidebar( 'header_info' ); ?>
    <?php
    $categories = get_tags( array(
        'parent'  => 0
    ) );

    usort($categories, "order_tags_by_tagcounter");
    ?>
    <canvas id="myCanvas" width="300" height="200">
        <ul>
            <?php
                $start_font_size = 24;
                foreach ($categories as $c){
                    echo '<li><a href="'.get_tag_link($c).'" style="font-size: '.$start_font_size.'px;">'.$c->name.'</a></li>';
                    $start_font_size--;
                }
            ?>
        </ul>
    </canvas>

<?php endif; ?>