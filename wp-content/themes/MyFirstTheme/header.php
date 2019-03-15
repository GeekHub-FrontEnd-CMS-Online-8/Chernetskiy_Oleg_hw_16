<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/reset.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/slick/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <?php wp_head(); ?>
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
   <!-- <?php wp_nav_menu(array('theme_location'=>'menu', 'menu_class'=>'main-menu', 'container'=>'false')); ?> -->
    <nav class="main-menu header_links">
        <?php
        $massiv_vhodnih_parametrov = array(
            'container' => false,
            'echo' => false,
            'items_wrap' => '%3$s',
            'depth' => 0,
            );
        print strip_tags( wp_nav_menu($massiv_vhodnih_parametrov), '<a>');
        ?>
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