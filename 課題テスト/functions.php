<?php

// <title>タグを出力
add_theme_support('title-tag');

// titleタグのテキスト変更
add_filter('document_title_parts', 'my_document_title_parts');
function my_document_title_parts($title){
    if (is_home()) {
        unset($title['tagline']); // タグラインを削除
        $title['title'] = '課題テーマ作成'; //テキストを変更
    }
    return $title;
}

//css読み込み 
function challenge_scripts(){
    wp_enqueue_style('bootstrap_css',get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap_grid',get_template_directory_uri() . '/assets/css/bootstrap-grid.css');
    wp_enqueue_style('main_style',get_template_directory_uri() . '/assets/css/styles.main.css'); 
}

// css呼び出し
add_action('wp_enqueue_scripts', 'challenge_scripts');

// 外観「メニュー」の表示（カスタマイズ）
add_theme_support( 'menus' );

// アイキャッチ画像を使用可能にする
add_theme_support('post-thumbnails');