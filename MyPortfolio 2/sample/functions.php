<?php

function register_css()
{//管理画面でないなら
    if(!is_admin()){
        wp_enqueue_style('bootstrap_css',get_template_directory_uri() . '/assets/css/bootstrap.min.css');
        wp_enqueue_style('bootstrap_grid',get_template_directory_uri() . '/assets/css/bootstrap-grid.css');
        wp_enqueue_style('slick',get_template_directory_uri() . '/assets/css/slick.css');
        wp_enqueue_style('main_style',get_template_directory_uri() . '/assets/css/style.css');
    }
}

// 登録済みのjQueryを解除して、登録し直す
function remove_default_jquery()
{
    // 管理画面でないなら
    if (!is_admin()) {
        //WordPressのデフォルトのjQueryを解除する関数
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), 3.4, true);
        wp_enqueue_script('slick_js', get_template_directory_uri() . '/assets/js/slick.min.js', array(), 1.8, true);
        wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);

    }
}

add_action('wp_enqueue_scripts', 'register_css');

add_action('wp_enqueue_scripts', 'remove_default_jquery');

add_theme_support('post-thumbnails');
