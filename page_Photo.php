<?php
/*
Template Name: Photo 페이지
*/
?>
<?php global $asset_uri;?>
<?php get_header();?>
<main class="main_photo">
    <div class="wrap">
        <div class="title">
            <div>Photo</div>
            <ul>
                <li id="img_btn1">1 <img src="<?php echo $asset_uri;?>/img/icon_home_shop_arrow_black.svg"></li>
                <li id="img_btn2">2 <img src="<?php echo $asset_uri;?>/img/icon_home_shop_arrow_black.svg"></li>
            </ul>
        </div>
        <div class="img_box">
            <div class="box">
                <div class="img"></div>
                <div class="day"><span>&#8226;</span><span>xxxx.xx.xx</span></div>
            </div>
            <div class="box">
                <div class="img"></div>
                <div class="day"><span>&#8226;</span><span>xxxx.xx.xx</span></div>
            </div>
            <div class="box">
                <div class="img"></div>
                <div class="day"><span>&#8226;</span><span>xxxx.xx.xx</span></div>
            </div>
            <div class="box">
                <div class="img"></div>
                <div class="day"><span>&#8226;</span><span>xxxx.xx.xx</span></div>
            </div>
        </div>

        <div class="page">
            <img src="<?php echo $asset_uri;?>/img/left_arrow.svg" class="left">
            <div class="number">1</div>
            <div class="number">2</div>
            <div class="number">3</div>
            <img src="<?php echo $asset_uri;?>/img/right_arrow.svg" class="right">
        </div>
    </div>
</main>
<div>
<?php
  /* Start the Loop */
  while ( have_posts() ) :?>
  <div style="padding-top: 100px;"><h1><?php echo get_the_title();?></h1></div>
  <div style="width:100%; height: 400px;">content</div>
  <?php
    the_post();
  endwhile; // End of the loop.
?>
</div>
<?php get_footer();?>