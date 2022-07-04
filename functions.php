<?php

function shortcodes_init(){
 add_shortcode( 'recent_posts', 'shortcode_handler_function' );
}
add_action('init', 'shortcodes_init');

function main_features(){
  add_theme_support("title_tag");
}
add_action('after_setup_theme', 'main_features');

// Admin Bar css
add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );

// Pagination
function pagination($pages = '', $asset_uri, $range = 2){
  $showitems = ($range * 2)+1;

  global $paged;
  if(empty($paged)) $paged = 1;

  if($pages == ''){
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if(!$pages){
      $pages = 1;
    }
  }
  if(1 != $pages){
    echo '<div class="page">';
    if($paged !=1) echo '<a href="'.get_pagenum_link($paged-1).'"><img src="'.$asset_uri.'/img/left_arrow.svg" class="left" /></a>';
    for($i=1; $i<= $pages; $i++){
      if(1 != $pages && (!($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems)){
        echo ($paged == $i )? '<div class="number">'.$i.'</div>':'<div class="number" ><a href="'.get_pagenum_link($i).'">'.$i.'</a></div>';
      }
    }
    if($paged != $pages) echo '<a href="'.get_pagenum_link($paged+1).'"><img src="'.$asset_uri.'/img/right_arrow.svg" class="right" /></a>';
    echo '</div>';
  }
}

function gpi_find_image_id($post_id) {
  if (!$img_id = get_post_thumbnail_id ($post_id)) {
      $attachments = get_children(array(
          'post_parent' => $post_id,
          'post_type' => 'attachment',
          'numberposts' => 1,
          'post_mime_type' => 'image'
      ));
      if (is_array($attachments)) foreach ($attachments as $a)
          $img_id = $a->ID;
  }
  if ($img_id)
      return $img_id;
  return false;
}
function find_img_src($post) {
  if (!$img = gpi_find_image_id($post->ID))
      if ($img = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches))
          $img = $matches[1][0];
  if (is_int($img)) {
      $img = wp_get_attachment_image_src($img);
      $img = $img[0];
  }
  return $img;
}
?>