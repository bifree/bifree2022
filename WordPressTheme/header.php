<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>合同会社Bifree｜あなたらしさを応援したい！</title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&family=Source+Sans+Pro:ital,wght@1,600&display=swap" rel="stylesheet">
    <meta name="description" content="合同会社Bifree,Bifree,相原将希,LGBTQ,SriLanka,ウェブ制作">
    <meta name="keywords" content="合同会社Bifree,Bifree,相原将希,LGBTQ,SriLanka,ウェブ制作">
</head>
<body>
    <header>
        <div class="header _flex _container">
            <!-- ヘッダー内ロゴ -->
            <div class="header__logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bifree_logo_b.svg" alt="ロゴ（横）">
                </a>
            </div>
            
            <!-- ヘッダーグローバルナビゲーション -->
            <!-- <div class="header__nav">
                <?php
                    wp_nav_menu( array(
                        'theme_location'=>'header-nav',
                        'container' => 'nav'
                    ));?>
            </div> -->
            <div class="header__nav_test">
                <ul>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#service">SERVICE</a></li>
                    <li><a href="#article">ARTICLE</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </div>
            <div class="header__nav_lang">
                <ul>
                    <li><a href="https://bifree.jp/">日本語</a></li>
                    <li><a href="https://bifree.jp/en/">English</a></li>
                </ul>
            </div>
            
            <!-- レスポンシブ用ハンバーガーボタン -->
            <div class="navBtn">
                <i></i>
                <i></i>
                <i></i>
                <p class="navBtn_text">MENU</p>
                <p class="navBtn_text">CLOSE</p>
            </div>
        </div>
    </header>