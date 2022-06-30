<?php
/*
Template Name: TOP페이지
*/
?>
<? global $asset_uri; ?>
<?php echo get_header(); ?>
<main>
    <div class="swiper mySwiper">
        <div class="number">/ 3</div>
        <div class="title"><p>TEAM MAX</p><span>Amateur Basketball Team</span></div>
        <div class="swiper-wrapper">
            <div class="swiper-slide banner1"><img src="<?php echo $asset_uri;?>/img/6.jpeg"><p class="">1</p></div>
            <div class="swiper-slide banner2"><img src="<?php echo $asset_uri;?>/img/5.jpeg"><p class="">2</p></div>
            <div class="swiper-slide banner3"><img src="<?php echo $asset_uri;?>/img/7.jpeg"><p class="">3</p></div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <ul class="about">
        <div class="title"><p>About us</p> <img src="<?php echo $asset_uri;?>/img/icon_home_shop_arrow_black.svg"></div>
        <li class="about_img1"><img src="<?php echo $asset_uri;?>/img/8.jpeg"></li>
        <ul class="text">
            <li></li>
        </ul>
    </ul>

    <ul class="photo">
        <div class="title"><p>Photo</p> <img src="<?php echo $asset_uri;?>/img/icon_home_shop_arrow_black.svg"></div>
        <li class="about_img1"><img src="<?php echo $asset_uri;?>/img/10.jpeg"></li>
        <ul class="text">
            <li></li>
        </ul>
    </ul>

    <ul class="video">
        <div class="title"><p>Video</p> <img src="<?php echo $asset_uri;?>/img/icon_home_shop_arrow_black.svg"></div>
        <li class="about_img1"><img src="<?php echo $asset_uri;?>/img/11.jpeg"><p class="play_btn"><img src="<?php echo $asset_uri;?>/img/play_w.svg"></p></li>
        <ul class="text">
            <li></li>
        </ul>
    </ul>
    <div class="top_btn">
        <a href="#">
            <img class="aside_arrow" src="<?php echo $asset_uri;?>/img/aside_arrow.svg">
            <img class="aside_img" id="aside_img" src="<?php echo $asset_uri;?>/img/aside.svg">
        </a>
    </div>
</main>
<?php if(the_content()){ the_content(); } ?>
<?php echo get_footer(); ?>