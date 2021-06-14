<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sample</title>
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-grid.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/slick.css"> -->
    <!-- MyCSS Data-->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.ico">
    <?php wp_head();?>
  </head>
  <body>
    <header id="header">
      <h1>Logo</h1>
      <div class="openbtn1"><span></span><span></span><span></span></div>
      <nav id="g-nav">
        <ul>
          <li><a href="<?php echo home_url();?>">Top</a></li>
          <li class="has-child"><a href="#">About</a>
            <ul>
              <li><a href="#"><dl><dt><img src="<?php echo get_template_directory_uri() ?>/assets/img/information.jpg" alt=""></dt><dd>Information</dd></dl></a></li>
              <li><a href="#"><dl><dt><img src="<?php echo get_template_directory_uri() ?>/assets/img/staff.jpg" alt=""></dt><dd>Staff</dd></dl></a></li>
              <li><a href="#hair"><dl><dt><img src="<?php echo get_template_directory_uri() ?>/assets/img/style.jpg" alt=""></dt><dd>Style</dd></dl></a></li>
              <li><a href="#"><dl><dt><img src="<?php echo get_template_directory_uri() ?>/assets/img/gallery.jpg" alt=""></dt><dd>HairGallery</dd></dl></a></li>
              <li><a href="#access"><dl><dt><img src="<?php echo get_template_directory_uri() ?>/assets/img/access.jpg" alt=""></dt><dd>Access</dd></dl></a></li>
            </ul>
          </li>
          <li class="has-child"><a href="#">Service</a>
            <ul>
              <li><a href="<?php echo home_url();?>/menu/"><dl><dt><img src="<?php echo get_template_directory_uri() ?>/assets/img/menu.jpg" alt=""></dt><dd>Menu</dd></dl></a></li>
              <li><a href="#"><dl><dt><img src="<?php echo get_template_directory_uri() ?>/assets/img/reserv.jpg" alt=""></dt><dd>Reservation</dd></dl></a></li>
              <li><a href="<?php echo home_url();?>/item/"><dl><dt><img src="<?php echo get_template_directory_uri() ?>/assets/img/items.jpg" alt=""></dt><dd>Item</dd></dl></a></li>
              <!-- <li><a href="#"><dl><dt><img src="" alt=""></dt><dd>Service-3</dd></dl></a></li>
              <li><a href="#"><dl><dt><img src="" alt=""></dt><dd>Service-4</dd></dl></a></li> -->
            </ul>
          </li>
          <li><a href="#">Blog</a></li>
        </ul>
      </nav>
    </header>