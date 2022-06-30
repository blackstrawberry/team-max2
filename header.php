<?php global $asset_uri; ?>
<?php $asset_uri = get_theme_file_uri('assets'); ?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $asset_uri;?>/css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link href="<?php echo $asset_uri?>/img/max_logo_white.svg" rel="shortcut icon" type="image">
    <title>Team-Max</title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="body_wrap">
        <header id="header">
            <div class="logo" onclick="location.href='/';"><img src="<?php echo $asset_uri;?>/img/max_logo_white.svg"></div>
            <div class="menu" id="menu">MENU</div>
            <div class="nav" id="nav">
                <div onclick="location.href='/';">Home</div>
                <div onclick="location.href='/aboutus';">about us</div>
                <div onclick="location.href='/photo';">photo</div>
                <div onclick="location.href='https://instagram.com/max_ketball?igshid=NWRhNmQxMjQ=';">video</div>
            </div>
        </header>