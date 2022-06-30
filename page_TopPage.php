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
        
        <div class="swiper-wrapper">
            <div class="swiper-slide banner1"><img src="https://kyohyunkim.github.io/Team-Max/img/6.jpeg"><p class="number">1</p><div class="title"><p>TEAM MAX</p><span>Amateur Basketball Team</span></div></div>
            <div class="swiper-slide banner2"><img src="https://kyohyunkim.github.io/Team-Max/img/5.jpeg"><p class="number">2</p><div class="title"><p class="orange">TEAM MAX</p><span class="orange">Amateur Basketball Team</span></div></div>
            <div class="swiper-slide banner3"><img src="https://kyohyunkim.github.io/Team-Max/img/7.jpeg"><p class="number">3</p><div class="title"><p>TEAM MAX</p><span>Amateur Basketball Team</span></div></div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <ul class="about" onclick="location.href='about.html';">
        <div class="title"><p>About us</p> <img src="https://kyohyunkim.github.io/Team-Max/img/icon_home_shop_arrow_black.svg"></div>
        <li class="about_img1"><img src="https://kyohyunkim.github.io/Team-Max/img/8.jpeg"></li>
        <ul class="text">
            <li></li>
        </ul>
    </ul>

    <ul class="photo" onclick="location.href='photo.html';">
        <div class="title"><p>Photo</p> <img src="https://kyohyunkim.github.io/Team-Max/img/icon_home_shop_arrow_black.svg"></div>
        <li class="about_img1"><img src="https://kyohyunkim.github.io/Team-Max/img/10.jpeg"></li>
        <ul class="text">
            <li></li>
        </ul>
    </ul>

    <ul class="video" onclick="location.href='https://instagram.com/max_ketball?igshid=NWRhNmQxMjQ=';">
        <div class="title"><p>Video</p> <img src="https://kyohyunkim.github.io/Team-Max/img/icon_home_shop_arrow_black.svg"></div>
        <li class="about_img1"><img src="https://kyohyunkim.github.io/Team-Max/img/11.jpeg"><p class="play_btn"><img src="https://kyohyunkim.github.io/Team-Max/img/play_w.svg"></p></li>
        <ul class="text">
            <li></li>
        </ul>
    </ul>
</main>
<?php if(the_content()){ the_content(); } ?>
<?php echo get_footer(); ?>