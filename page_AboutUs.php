<?php
/*
Template Name: About Us 페이지
*/
?>
<?php global $asset_uri;?>
<?php get_header();?>
<main class="main_about">
    <?php if(the_content()){ the_content(); } ?>
</main>
<div>
</div>
<?php get_footer();?>