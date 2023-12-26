<?php

/**
 * FCG Tag
 */

defined('ABSPATH') or die('No script kiddies please!');


function mm_fcgtag()
{
    $tag_array = ['Tag 1', 'Tag 2', 'Tag 3', 'Tag 4', 'Tag 5', 'Tag 6', 'Tag 7', 'Tag 8', 'Tag 9', 'Tag 10', 'Tag 11', 'Tag 12', 'Tag 13', 'Tag 14', 'Tag 15'];
    $randomIndex = array_rand($tag_array);
    //get three random tags
    $tag1 = $tag_array[$randomIndex];
    $tag2 = $tag_array[array_rand($tag_array)];
    $tag3 = $tag_array[array_rand($tag_array)];
    return $tag1 . ', ' . $tag2 . ', ' . $tag3;
}
