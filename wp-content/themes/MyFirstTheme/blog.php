<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeWork16_blog</title>
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
    <div class="blog_container">
        <div class="blog_item">
            <img src="<?php bloginfo('template_url') ?>/img/blog/your_photo_1.png">
            <div class="blog_text-container blog_color1">
                <div>
                    <h2 class="blog_text-container_title">Daniel Jackson Shoots
                        New Yorkers for i-D</h2>
                    <p class="blog_text-container_text">Photography Daniel Jackson,  styling by Alastair McKimm, hair by Shon  and Esther Langham, make-up by Yadim,  Francelle and Hannah Murray,
                        casting by AM casting. Production  by Nikki Stromberg and Matthew Youmans at M.A.P New York.
                    </p>
                </div>
                <div class="blog_text-container_button">
                    <a href="#">read more</a>
                </div>
                <div class="blog_text-container_date">
                    <p><i class="far fa-calendar"></i> 25.08.2014</p>
                    <p><i class="fas fa-comment"></i> 24</p>
                </div>
            </div>
        </div>
        <div class="blog_item">
            <img src="<?php bloginfo('template_url') ?>/img/blog/your_photo_2.png">
            <div class="blog_text-container blog_color2">
                <div>
                    <h2 class="blog_text-container_title">Derek Henderson Shoots Karen Walker / ITC Ethical
                        Fashion Initiative Visible 2014 Campaignts Karen</h2>
                    <p class="blog_text-container_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie, purus id mollis pharetra, lacus turpis dapibus magna, eget aliquam diam erat at velit. Suspendisse in diam sit amet erat blandit efficitur at eget lorem. Aenean elementum lobortis tellus, sit amet mollis tortor rhoncus id.
                    </p>
                </div>
                <div class="blog_text-container_button">
                    <a href="#">read more</a>
                </div>
                <div class="blog_text-container_date">
                    <p><i class="far fa-calendar"></i> 15.08.2014</p>
                    <p><i class="fas fa-comment"></i> 14</p>
                </div>
            </div>
        </div>
        <div class="blog_item">
            <img src="<?php bloginfo('template_url') ?>/img/blog/your_photo_3.png">
            <div class="blog_text-container blog_color1">
                <div>
                    <h2 class="blog_text-container_title">Anne & jack</h2>
                    <p class="blog_text-container_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie, purus id mollis pharetra, lacus turpis dapibus magna, eget aliquam diam erat at velit. Suspendisse in diam sit amet erat blandit efficitur at eget lorem. Aenean elementum lobortis tellus, sit amet mollis tortor rhoncus id.
                    </p>
                </div>
                <div class="blog_text-container_button">
                    <a href="#">read more</a>
                </div>
                <div class="blog_text-container_date">
                    <p><i class="far fa-calendar"></i> 13.08.2014</p>
                    <p><i class="fas fa-comment"></i> 44</p>
                </div>
            </div>
        </div>
        <div class="blog_item">
            <img src="<?php bloginfo('template_url') ?>/img/blog/your_photo_4.png">
            <div class="blog_text-container blog_color2">
                <div>
                    <h2 class="blog_text-container_title">Amy Troost Shoots SS14
                        Collections for The Last
                        Magazine</h2>
                    <p class="blog_text-container_text">Photography Daniel Jackson,  styling by Alastair McKimm, hair by Shon  and Esther Langham, make-up by Yadim,  Francelle and Hannah Murray,
                        casting by AM casting. Production  by Nikki Stromberg and Matthew Youmans at M.A.P New York.
                    </p>
                </div>
                <div class="blog_text-container_button">
                    <a href="#">read more</a>
                </div>
                <div class="blog_text-container_date">
                    <p><i class="far fa-calendar"></i> 22.08.2014</p>
                    <p><i class="fas fa-comment"></i> 20</p>
                </div>
            </div>
        </div>
        <div class="blog_item">
            <img src="<?php bloginfo('template_url') ?>/img/blog/your_photo_5.png">
            <div class="blog_text-container blog_color1">
                <div>
                    <h2 class="blog_text-container_title">Paul Wetherell Shoots
                        Meadham Kirchhoff SS14
                        Collection for i-D Walker.</h2>
                    <p class="blog_text-container_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie, purus id mollis pharetra, lacus turpis dapibus magna, eget aliquam diam erat at velit. Suspendisse in diam sit amet erat blandit efficitur at eget lorem. Aenean elementum lobortis tellus, sit amet mollis tortor rhoncus id.
                    </p>
                </div>
                <div class="blog_text-container_button">
                    <a href="#">read more</a>
                </div>
                <div class="blog_text-container_date">
                    <p><i class="far fa-calendar"></i> 29.07.2014</p>
                    <p><i class="fas fa-comment"></i> 102</p>
                </div>
            </div>
        </div>
        <div class="blog_item">
            <img src="<?php bloginfo('template_url') ?>/img/blog/your_photo_6.png">
            <div class="blog_text-container blog_color2">
                <div>
                    <h2 class="blog_text-container_title">Will Davidson Shoots Jennifer
                        Connelly for The Edit Ethical.</h2>
                    <p class="blog_text-container_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie, purus id mollis pharetra, lacus turpis dapibus magna, eget aliquam diam erat at velit. Suspendisse in diam sit amet erat blandit efficitur at eget lorem. Aenean elementum lobortis tellus, sit amet mollis tortor rhoncus id.
                    </p>
                </div>
                <div class="blog_text-container_button">
                    <a href="#">read more</a>
                </div>
                <div class="blog_text-container_date">
                    <p><i class="far fa-calendar"></i> 15.07.2014</p>
                    <p><i class="fas fa-comment"></i> 44</p>
                </div>
            </div>
        </div>
    </div>
    <div class="blog_bottom-buttons_box">
        <div class="blog_bottom-buttons_item">
            <a href="#">Prev</a>
        </div>
        <div class="blog_bottom-buttons_items">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">7</a>
            <a href="#">8</a>
            <a href="#">...</a>
            <a href="#">21</a>
        </div>
        <div class="blog_bottom-buttons_item">
            <a href="#">Next</a>
        </div>
    </div>
    <div class="blog_button-to-up">
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