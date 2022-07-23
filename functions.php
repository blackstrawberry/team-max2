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

  global $wp_query;
  $lastpage = $wp_query->max_num_pages;

  if($pages == ''){
    $pages = $lastpage;
    if(!$pages){
      $pages = 1;
    }
  }
  if(1 != $pages){
    echo '<div class="page">';
    echo '<a class="first" href="'.get_pagenum_link(1).'"><img src="'.$asset_uri.'/img/left_arrow.svg" class="left" /><img src="'.$asset_uri.'/img/left_arrow.svg" class="left" /></a>';
    if($paged !=1) echo '<a href="'.get_pagenum_link($paged-1).'"><img src="'.$asset_uri.'/img/left_arrow.svg" class="left" /></a>';
    for($i=1; $i<= $pages; $i++){
      if(1 != $pages && (!($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems)){
        echo ($paged == $i )? '<div class="number">'.$i.'</div>':'<div class="number" ><a href="'.get_pagenum_link($i).'">'.$i.'</a></div>';
      }
    }
    if($paged != $pages) echo '<a href="'.get_pagenum_link($paged+1).'"><img src="'.$asset_uri.'/img/right_arrow.svg" class="right" /></a>';
    echo '<a class="last" href="'.get_pagenum_link($lastpage).'"><img src="'.$asset_uri.'/img/right_arrow.svg" class="right" /><img src="'.$asset_uri.'/img/right_arrow.svg" class="right" /></a>';
    echo '</div>';
  }
}
?>