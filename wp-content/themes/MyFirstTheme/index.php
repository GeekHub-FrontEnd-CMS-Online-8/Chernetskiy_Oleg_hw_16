<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
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
<section class="main">
    <div class="sl">
        <div class="sl_slide">
            <img src="<?php bloginfo('template_url') ?>/img/index/Mor_Free.png" alt="" class="sl_img">
            <div class="sl_text">
                <h3 class="sl_name">morgan freeman</h3>
                <p class="sl_job">actor</p>
                <p class="sl_desc">Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                    Quisque fringilla mi orci, ac
                    venenatis ante venenatis eget.
                </p>
                <div class="sl_link">
                    <a href="#"><i class="fas fa-heart"></i></a>
                    <a href="#"><i class="fas fa-share"></i></a>
                    <a href="#"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
        <div class="sl_slide">
            <img src="<?php bloginfo('template_url') ?>/img/index/Mor_Free.png" alt="" class="sl_img">
            <div class="sl_text">
                <h3 class="sl_name">morgan freeman</h3>
                <p class="sl_job">actor</p>
                <p class="sl_desc">Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                    Quisque fringilla mi orci, ac
                    venenatis ante venenatis eget.
                </p>
                <div class="sl_link">
                    <a href="#"><i class="fas fa-heart"></i></a>
                    <a href="#"><i class="fas fa-share"></i></a>
                    <a href="#"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
        <div class="sl_slide">
            <img src="<?php bloginfo('template_url') ?>/img/index/Mor_Free.png" alt="" class="sl_img">
            <div class="sl_text">
                <h3 class="sl_name">morgan freeman</h3>
                <p class="sl_job">actor</p>
                <p class="sl_desc">Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                    Quisque fringilla mi orci, ac
                    venenatis ante venenatis eget.
                </p>
                <div class="sl_link">
                    <a href="#"><i class="fas fa-heart"></i></a>
                    <a href="#"><i class="fas fa-share"></i></a>
                    <a href="#"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bot_navigation_index">
    <div class="bot_navigation_poster">
        <img src="<?php bloginfo('template_url') ?>/img/index/photo_1.png" alt="">
        <div class="bot_navigation_poster-text">
            <p class="bot_navigation_poster-text_name">fashion workshop</p>
            <p class="bot_navigation_poster-text_date">NOV 21-23</p>
            <p class="bot_navigation_poster-text_time">9:00am - 4:00pm</p>
            <div class="bot_navigation_poster-text_logo">
                <p>rsvp</p>
            </div>
        </div>
    </div>
    <div class="bot_navigation_post-box">
        <h3 class="bot_navigation_main-title">Recent post</h3>
        <div class="bot_navigation_posts">
            <div class="bot_navigation_posts_item">
                <img src="<?php bloginfo('template_url') ?>/img/index/thumb_1.png" alt="">
                <div class="bot_navigation_posts_text">
                    <h4 class="bot_navigation_sub-title">New Gallery Set</h4>
                    <p class="bot_navigation_date">09.12.2014</p>
                    <p class="bot_navigation_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla mi orci, ac venenatis ante venenatis eget.
                        <a href="#">Read more</a>
                    </p>
                </div>
            </div>
            <div class="bot_navigation_posts_item">
                <img src="<?php bloginfo('template_url') ?>/img/index/thumb_2.png" alt="">
                <div class="bot_navigation_posts_text">
                    <h4 class="bot_navigation_sub-title">wedding workshop</h4>
                    <p class="bot_navigation_date">09.12.2014</p>
                    <p class="bot_navigation_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla mi orci, ac venenatis ante venenatis eget.
                        <a href="#">Read more</a>
                    </p>
                </div>
            </div>
            <div class="bot_navigation_posts_item">
                <img src="<?php bloginfo('template_url') ?>/img/index/thumb_3.png" alt="">
                <div class="bot_navigation_posts_text">
                    <h4 class="bot_navigation_sub-title">Personal Project</h4>
                    <p class="bot_navigation_date">09.12.2014</p>
                    <p class="bot_navigation_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla mi orci, ac venenatis ante venenatis eget.
                        <a href="#">Read more</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="bot_social-box">
        <div class="bot_social-box_sup">
            <img src="<?php bloginfo('template_url') ?>/img/index/logo_black.png">
            <div class="bot_social-box_sup-item">
                <div class="bot_social-box_sup_contacts phone-number">
                    <p><i class="fas fa-phone-square mirrorX"></i>+ 00 123 456 7890</p>
                </div>
                <div class="bot_social-box_sup_contacts">
                    <p><i class="fas fa-envelope"></i>info@square.com</p>
                </div>
                <div class="bot_social-box_sup_links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fas fa-camera-retro"></i></a>
                    <a href="#"><i class="fas fa-wallet"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                </div>
            </div>
        </div>
        <div class="bot_social-box_sub">
            <p><i class="fab fa-twitter"></i></p>
            <p class="bot_social-box_sub_massage">Unerdwear cookie liquorice. Cake donut cupcake
                lollipop soufflé candy. Chocolate oat cake
                <a href="#">@cheesecake</a> tootsie roll.
            </p>
        </div>
    </div>
</section>
<section class="partners">
    <div class="partners_box">
        <a href="#"><img src="<?php bloginfo('template_url') ?>/img/index/phaseone_logo.png" alt=""></a>
        <a href="#"><img src="<?php bloginfo('template_url') ?>/img/index/manfrotto_logo.png" alt=""></a>
        <a href="#"><img src="<?php bloginfo('template_url') ?>/img/index/hasselblad.png" alt=""></a>
        <a href="#"><img src="<?php bloginfo('template_url') ?>/img/index/broncolor_logo.png" alt=""></a>
    </div>
</section>
<footer class="footer">
    <p>Created by 2ndself.com, with <i class="fas fa-heart"></i><br>
        exclusive for theuncreativelab.com</p>
    <p class="footer_rights">&copy; 2014 Square. All Rights Reserved.</p>
</footer>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script src="js/js.js"></script>
</body>
</html>