<?php global $asset_uri;?>
        <footer>
            <ul>
                <li class="area">
                    <span>Area</span>
                    Seoul - Yongsan, Mapo
                </li>
                <li class="day">
                    <span>Every week</span>
                    Saturday,Sunday
                </li>
                <li class="time">
                    <span>Time</span>
                    AM 10 ~ 12
                </li>
            </ul>
            <div class="my">
                <div class="insta" onclick="location.href='https\://instagram.com/max_ketball?igshid=NWRhNmQxMjQ=';"><span>SNS</span><div>Insta<img src="<?php echo $asset_uri;?>/img/insta_logo_blk.svg"><img src="<?php echo $asset_uri;?>/img/icon_footer_link.png"></div></div>
                <div class="email"><span>E-mail</span><div><a href="mailto:kimwc97@gmail.com">kimwc97@gmail.com<img src="<?php echo $asset_uri;?>/img/icon_footer_link.png"></a></div></div>
                <div class="site"><span>Site-by</span>
                    <div><a href="mailto:jonghan721@gmail.com">jonghan721@gmail.com<img src="<?php echo $asset_uri;?>/img/icon_footer_link.png"></a></div>
                    <div><a href="mailto:rlarygus33@gmail.com">rlarygus33@gmail.com<img src="<?php echo $asset_uri;?>/img/icon_footer_link.png"></a></div>
                </div>
            </div>
        </footer>
        <div class="top_btn">
            <a href="#">
                <img class="aside_arrow" src="<?php echo $asset_uri;?>/img/aside_arrow.svg"><img class="aside_img" id="aside_img" src="<?php echo $asset_uri;?>/img/aside.svg">
            </a>
        </div>
    </div>
    <script defer src="<?php echo $asset_uri;?>/js/index.js"></script>
    <script defer src="<?php echo $asset_uri;?>/js/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
		<?php wp_footer(); ?>
</body>
</html>