<?php
/*
Template Name: Photo-archive 페이지
*/
?>
<?php global $asset_uri;?>
<?php 
    $arg = array(
        'post_type' => 'photo',
        'posts_per_page' => 8,
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => get_query_var('paged'),
    );
    // var_dump($arg);
    $posts = new WP_Query($arg);
    // var_dump($posts);
?>
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

        <!-- dynamic -->
        <div class="img_box">
        <?php
            if($posts->have_posts()): while ($posts->have_posts()): $posts->the_post();
                    $post_img = SCF::get('photo');
                    $post_img = wp_get_attachment_image_src($post_img, 'large');
                    $post_img_url = esc_url($post_img[0]);
                    $post_description = post_custom('description');
                    $post_title = get_the_title();
                    ?>
        
                    <div class="box">
                        <div class="img">
                            <img src="<?php echo $post_img_url;?>" width="100%" height="auto" alt="post_image"/>
                        </div>
                        <div class="day"><span>&#8226;</span><span><?php echo get_the_date("yy.m.d");?></span></div>
                    </div>
            <?php endwhile; endif; ?>
        </div>
        <?php 
        if(function_exists('pagination')){
            pagination($posts->max_num_pages,$asset_uri);
        }
        ?>
        <?php wp_reset_postdata();?>
    </div>
</main>
<?php get_footer();?>