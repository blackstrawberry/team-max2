<?php
/*
Template Name: About Us 페이지
*/
?>
<?php global $asset_uri;?>
<?php get_header();?>
<main class="main_about">
    <div class="main_about_img"><img src="<?php echo $asset_uri;?>/img/8.jpeg"></div>
    <ul class="wrap">
        <div class="title">About</div>
        <li class="detail">
            Team Max 가 추구하는 가치 [상호존중] 실력과 상관없이 서로를 존중하는 문화를 만듭니다. [상승지향] 현실에 안주하지 않고 끊임없이 높은 곳을 바라봅니다. [자기신뢰] 노력하면 얼마든지 성공할 수 있다는 마음 가짐을 가집니다.
        </li>
        <li class="team">
            Team Max와 함께 할 팀원을 모집합니다.<br>
            <span>* 신청해주시면 확인 후 개인적으로 연락드리겠습니다.</span>
        </li>
        <li class="input"><input placeholder="Name"></li>
        <li class="input"><input placeholder="E-mail"></li>
        <li class="input"><input placeholder="Phone Number"></li>
        <li class="support">Support <img src="<?php echo $asset_uri;?>/img/right_arrow.svg" class="right"></li>
        
    </ul>
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