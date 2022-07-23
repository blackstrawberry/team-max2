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
        <?php 
            $arg = array(
                'post_type' => 'img_slider',
                'posts_per_page' => 1,
                'orderby' => 'date',
                'order' => 'DESC',
            );
            $posts = new WP_Query($arg);
            
            if($posts->have_posts()): while ($posts->have_posts()): $posts->the_post();
                    $post_img1 = SCF::get('img1');
                    $post_img1 = wp_get_attachment_image_src($post_img1, 'large');
                    $post_img_url1 = esc_url($post_img1[0]);
                    $post_img2 = SCF::get('img2');
                    $post_img2 = wp_get_attachment_image_src($post_img2, 'large');
                    $post_img_url2 = esc_url($post_img2[0]);
                    $post_img3 = SCF::get('img3');
                    $post_img3 = wp_get_attachment_image_src($post_img3, 'large');
                    $post_img_url3 = esc_url($post_img3[0]);
        ?>
            <div class="swiper-slide banner1"><img src="<?php echo $post_img_url1;?>"><p class="number">1</p><div class="title"><p>TEAM MAX</p><span>Amateur Basketball Team</span></div></div>
            <div class="swiper-slide banner2"><img src="<?php echo $post_img_url2;?>"><p class="number">2</p><div class="title"><p class="orange">TEAM MAX</p><span class="orange">Amateur Basketball Team</span></div></div>
            <div class="swiper-slide banner3"><img src="<?php echo $post_img_url3;?>"><p class="number">3</p><div class="title"><p>TEAM MAX</p><span>Amateur Basketball Team</span></div></div>
        <?php endwhile; endif; ?>
        <?php wp_reset_postdata();?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <?php 
        $arg2 = array(
            'post_type' => 'main-page',
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'DESC',
        );
        $posts2 = new WP_Query($arg2);
    ?>
    <?php
        if($posts2->have_posts()): while ($posts2->have_posts()): $posts2->the_post();
            $post_img1 = SCF::get('about_us');
            $post_img1 = wp_get_attachment_image_src($post_img1, 'large');
            $post_img_url1 = esc_url($post_img1[0]);
            $post_img2 = SCF::get('photo');
            $post_img2 = wp_get_attachment_image_src($post_img2, 'large');
            $post_img_url2 = esc_url($post_img2[0]);
            $post_img3 = SCF::get('video');
            $post_img3 = wp_get_attachment_image_src($post_img3, 'large');
            $post_img_url3 = esc_url($post_img3[0]);
            ?>

    <ul class="about" onclick="location.href='/aboutus/';">
        <div class="title"><p>About us</p> <img src="<?php echo $asset_uri;?>/img/icon_home_shop_arrow_black.svg"></div>
        <li class="about_img1"><img src="<?php echo $post_img_url1;?>"/></li>
        <ul class="text">
            <li></li>
        </ul>
    </ul>

    <ul class="photo" onclick="location.href='/photo/';">
        <div class="title"><p>Photo</p> <img src="<?php echo $asset_uri;?>/img/icon_home_shop_arrow_black.svg"></div>
        <li class="about_img1"><img src="<?php echo $post_img_url2;?>"></li>
        <ul class="text">
            <li></li>
        </ul>
    </ul>

    <ul class="video" onclick="location.href='https\://instagram.com/max_ketball?igshid=NWRhNmQxMjQ=';">
        <div class="title"><p>Video</p> <img src="<?php echo $asset_uri;?>/img/icon_home_shop_arrow_black.svg"></div>
        <li class="about_img1"><img src="<?php echo $post_img_url3;?>"><p class="play_btn"><img src="<?php echo $asset_uri;?>/img/play_w.svg"></p></li>
        <ul class="text">
            <li></li>
        </ul>
    </ul>
    <?php endwhile; endif; ?>
    <?php wp_reset_postdata();?>
</main>
<?php //if(the_content()){ the_content(); } ?>
<?php echo get_footer(); ?>