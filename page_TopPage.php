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
        
        <!-- <div class="swiper-wrapper">
            <div class="swiper-slide banner1"><img src="<?php echo $asset_uri;?>/img/6.jpeg"><p class="number">1</p><div class="title"><p>TEAM MAX</p><span>Amateur Basketball Team</span></div></div>
            <div class="swiper-slide banner2"><img src="<?php echo $asset_uri;?>/img/5.jpeg"><p class="number">2</p><div class="title"><p class="orange">TEAM MAX</p><span class="orange">Amateur Basketball Team</span></div></div>
            <div class="swiper-slide banner3"><img src="<?php echo $asset_uri;?>/img/7.jpeg"><p class="number">3</p><div class="title"><p>TEAM MAX</p><span>Amateur Basketball Team</span></div></div>
        </div> -->
        
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

    <ul class="about" onclick="location.href='/aboutus/';">
        <div class="title"><p>About us</p> <img src="<?php echo $asset_uri;?>/img/icon_home_shop_arrow_black.svg"></div>
        <?php $img_src = find_img_src(get_post(25)); ?>
        <li class="about_img1"><img src="<?php echo $img_src;?>"/></li>
        <ul class="text">
            <li></li>
        </ul>
    </ul>
    <?php 
        $arg = array(
            'post_type' => 'photo',
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'DESC',
            'paged' => get_query_var('paged'),
        );
        $posts = new WP_Query($arg);
        if($posts->have_posts()): while ($posts->have_posts()): $posts->the_post();
            $post_img = SCF::get('photo');
            $post_img = wp_get_attachment_image_src($post_img, 'large');
            $post_img_url = esc_url($post_img[0]); 
    ?>

    <ul class="photo" onclick="location.href='/photo/';">
        <div class="title"><p>Photo</p> <img src="<?php echo $asset_uri;?>/img/icon_home_shop_arrow_black.svg"></div>
        <li class="about_img1"><img src="<?php echo $post_img_url;?>"></li>
        <ul class="text">
            <li></li>
        </ul>
    </ul>

    <?php endwhile; endif; ?>
    <?php wp_reset_postdata();?>

    <ul class="video" onclick="location.href='https://instagram.com/max_ketball?igshid=NWRhNmQxMjQ=';">
        <div class="title"><p>Video</p> <img src="<?php echo $asset_uri;?>/img/icon_home_shop_arrow_black.svg"></div>
        <li class="about_img1"><img src="<?php echo $asset_uri;?>/img/11.jpeg"><p class="play_btn"><img src="<?php echo $asset_uri;?>/img/play_w.svg"></p></li>
        <ul class="text">
            <li></li>
        </ul>
    </ul>
</main>
<?php if(the_content()){ the_content(); } ?>
<?php echo get_footer(); ?>