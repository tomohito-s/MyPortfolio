<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>課題テーマ作成</title>
  BootStrap
  <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  自作のCSS
  <link rel="stylesheet" href="assets/css/styles.main.css"> -->
  <?php wp_head(); ?>
</head>
<body>

  <header>
    <nav id="g-nav" class="menubar">
      <h1><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/wordpress-logo.jpg" alt="" id="logo"></a></h1>
      <div class="openbtn"><span></span><span></span><span></span></div><!-- スマホ用メニューボタン -->
      <div class="circle-bg"></div><!-- sp用navボタンクリック時の背景用 -->
      <?php
        $args = array(
          'menu' => 'global-navigation',
          'menu_class' => 'inner',
          'container' => false,
          );
          wp_nav_menu($args);
      ?>
      <!-- <ul class="inner">
        <li><a href="">BUONO! の特徴<span>INFORMATION</span></a></li>
        <li><a href="">選べる 3 つのプラン<span>MENU</span></a></li>
        <li><a href="">対応エリア<span>ACCESS</span></a></li>
        <li><a href="">お問い合わせ<span>CONTACT</span></a></li>
      </ul> -->
    </nav>
    <div class="header-slack">   
      <ul class="slack-img">
        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/jumbotron-1.jpg"></li>
      </ul>
      <div class="header-discription">
        <div class="container">
          <div class="col-12">
            <h2>ケータリング</h2>
            <p>1 人 1,500 円（税抜）～</p>
          </div>
        </div> 
      </div>  
    </div>
  </header>