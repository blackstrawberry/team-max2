<?php
/*
Template Name: Game 페이지
*/
?>
<?php global $asset_uri;?>
<?php get_header();?>
<main>
<?php
  /* Start the Loop */
  while ( have_posts() ) :?>
  <div style="padding-top: 100px;"><h1><?php echo get_the_title();?></h1></div>
  <div style="width:100%; height: 400px;">content</div>
  <?php
    the_post();
  endwhile; // End of the loop.
?>
</main>
<?php get_footer();?>