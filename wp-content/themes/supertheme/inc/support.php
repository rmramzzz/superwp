<?php
/*
 * Support functions
 */

/**
 * Tags count function.
 * Add custom field for tags (counter)
 */

function addTagCounter($term){
    $term_id = $term->term_id;
    $tag_count = get_term_meta($term_id, 'tagcounter', true);
    ?>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="cat_page_title"><?php _e('Tag Counts:'); ?></label></th>
        <td>
            <input type="number" name="tag_count" id="tag_count" value="<?php echo $tag_count ?>"><br />
        </td>
    </tr>
    <?php

}
add_action ( 'edit_tag_form_fields', 'addTagCounter');

function edited_term($term_id) {
    if ( isset( $_POST['tag_count'] ) ) {
        update_term_meta($term_id, 'tagcounter', $_POST['tag_count']);
    }
}
add_action ( 'edited_post_tag', 'edited_term');

function increaseTagsViews($cats){
    if(isset($cats)){
        foreach ($cats as $c){
            if(is_numeric($c)){
                $current_views = get_term_meta($c, 'tagcounter', true);
                update_term_meta($c, 'tagcounter', ++$current_views);
            }
        }
    }
}

function order_tags_by_tagcounter($a, $b) {
    $a = get_term_meta($a->term_id, 'tagcounter', true);
    $b = get_term_meta($b->term_id, 'tagcounter', true);
    if ($a == $b) {
        return 0;
    }
    return ($a > $b) ? -1 : 1;
}

function outputTagsFont($tags){
    $start_font_size = 24;
    $tags_size = count($tags);

    if($tags_size <= 4){
        foreach ($tags as $t){
            $t->font_size = $start_font_size;
            $start_font_size -= 2;
        }
    }else{
        $step = 2;
        for ($i = 0; $i < $tags_size; $i++){
            if($i % $step == 0 && $i < 6 & $i != 0){
                $start_font_size -= 2;
            }
            $tags[$i]->font_size = $start_font_size;
        }
    }

}