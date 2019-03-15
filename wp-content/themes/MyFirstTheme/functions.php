<?php

//scripts
//function my_scripts() {
//  Стили
 //   wp_enqueue_style('reset_style', get_template_directory_uri() . 'css/reset.css' );
  //  wp_enqueue_style('main_style', set_stylesheet_uri());
  //  wp_enqueue_style('slick_style', get_template_directory_uri() . 'slick/slick.css' );
  //  wp_enqueue_style('slick-theme_style', get_template_directory_uri() . 'slick/slick-theme.css' );
//  Скрипты
 //   wp_enqueue_script('slick-min-js', get_template_directory_uri() . 'slick/slick.min.js', array('jquery'), null, true);
  //  wp_enqueue_script('main-js', get_template_directory_uri() . 'js/js.js', array('jquery'), null, true);
//}

//Миниатюра
add_theme_support( 'post-thumbnails' );

//header menu
register_nav_menu('menu', 'Меню в шапке');

function wp_corenavi() {
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1;
    $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $a['total'] = $max;
    $a['current'] = $current;

    $total = 0; //1 - выводить текст "Страница N из N", 0 - не выводить
    $a['mid_size'] = 1; //сколько ссылок показывать слева и справа от текущей
    $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
    $a['prev_text'] = ''; //текст ссылки "Предыдущая страница"
    $a['next_text'] = ''; //текст ссылки "Следующая страница"

    if ($max > 1) echo '<nav class="navigation">';
    if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
    echo $pages . paginate_links($a);
    if ($max > 1) echo '</nav>';
}
?>