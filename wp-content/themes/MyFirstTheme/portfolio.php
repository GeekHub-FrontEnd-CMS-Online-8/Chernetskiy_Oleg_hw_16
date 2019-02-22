<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeWork16_portfolio</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>

<header class="header">
    <div class="header_wrapper">
        <input class="header_checkbox" type="checkbox" id="check-menu">
        <label class="header_label" for="check-menu"></label>
        <div class="burger-line first"></div>
        <div class="burger-line second"></div>
        <div class="burger-line third"></div>
        <div class="burger-line fourth"></div>
        <nav class="main-menu header_links">
            <a href="<?php echo home_url(); ?>">home</a>
            <a href="portfolio.html">portfolio</a>
            <a href="blog.html">blog</a>
            <a href="post.html">post</a>
        </nav>
    </div>
    <div class="header_middle-logo">
        <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url') ?>/img/index/square_logo.png" alt="" class="test_logoo"></a>
    </div>
    <div class="header_social-links">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fas fa-camera-retro"></i></a>
        <a href="#"><i class="fab fa-flickr"></i></a>
        <a href="#"><i class="fab fa-google-plus-g"></i></a>
        <a href="#"><i class="fas fa-envelope"></i></a>
    </div>
</header>
<section>
    <div class="portfolio_main-block">
        <div class="portfolio_main-block_text-box">
            <div>
                <h2 class="portfolio_main-block_title">portfolio</h2>
                <p class="portfolio_main-block_sub-title">gallery three</p>
            </div>
        </div>
        <div class="portfolio_main-block_item">
            <img src="<?php bloginfo('template_url') ?>/img/portfolio/photo_1.png" alt="">
            <div class="portfolio_main-block_item-link">
                <a href="#">
                    <i class="fas fa-search"></i>
                </a>
            </div>
        </div>
        <div class="portfolio_main-block_item">
            <img src="<?php bloginfo('template_url') ?>/img/portfolio/photo_2.png" alt="">
            <div class="portfolio_main-block_item-link">
                <a href="#">
                    <i class="fas fa-search"></i>
                </a>
            </div>
        </div>
        <div class="portfolio_main-block_item">
            <img src="<?php bloginfo('template_url') ?>/img/portfolio/photo_3.png" alt="">
            <div class="portfolio_main-block_item-link">
                <a href="#">
                    <i class="fas fa-search"></i>
                </a>
            </div>
        </div>
        <div class="portfolio_main-block_item">
            <img src="<?php bloginfo('template_url') ?>/img/portfolio/photo_4.png" alt="">
            <div class="portfolio_main-block_item-link">
                <a href="#">
                    <i class="fas fa-search"></i>
                </a>
            </div>
        </div>
        <div class="portfolio_main-block_item">
            <img src="<?php bloginfo('template_url') ?>/img/portfolio/photo_5.png" alt="">
            <div class="portfolio_main-block_item-link">
                <a href="#">
                    <i class="fas fa-search"></i>
                </a>
            </div>
        </div>
        <div class="portfolio_main-block_item">
            <img src="<?php bloginfo('template_url') ?>/img/portfolio/photo_6.png" alt="">
            <div class="portfolio_main-block_item-link">
                <a href="#">
                    <i class="fas fa-search"></i>
                </a>
            </div>
        </div>
        <div class="portfolio_main-block_item">
            <img src="<?php bloginfo('template_url') ?>/img/portfolio/photo_7.png" alt="">
            <div class="portfolio_main-block_item-link">
                <a href="#">
                    <i class="fas fa-search"></i>
                </a>
            </div>
        </div>
        <div class="portfolio_main-block_item">
            <img src="<?php bloginfo('template_url') ?>/img/portfolio/photo_8.png" alt="">
            <div class="portfolio_main-block_item-link">
                <a href="#">
                    <i class="fas fa-search"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="portfolio_button-to-up">
        <a href="#"><i class="fas fa-angle-up"></i></a>
    </div>
</section>
<footer class="footer">
    <p>Created by 2ndself.com, with <i class="fas fa-heart"></i><br>
        exclusive for theuncreativelab.com</p>
    <p class="footer_rights">&copy; 2014 Square. All Rights Reserved.</p>
</footer>
</body>
</html>