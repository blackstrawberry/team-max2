<?php
/*
Template Name: About Us 페이지
*/
?>
<?php global $asset_uri;?>
<?php get_header();?>
<main class="main_about">
    <?php if(the_content()){ the_content(); } ?>
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
        <li class="support" onClick="sendMail()">Support <img src="<?php echo $asset_uri;?>/img/right_arrow.svg" class="right"></li>
        <script>
            function sendMail(){
                const inputs = document.querySelectorAll(".input");
                console.log(inputs);
                input_1 = inputs[0].querySelector('input').value;
                input_2 = inputs[1].querySelector('input').value;
                input_3 = inputs[2].querySelector('input').value;
                window.open("mailto:jong7721@naver.com?subject="+input_1+"님의 연락 요청&body="+input_2+" 또는 "+input_3+" 으로 연락 바랍니다.");
            }
        </script>
    </ul>
</main>
<div>
</div>
<?php get_footer();?>