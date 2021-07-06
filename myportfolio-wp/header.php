<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyPortfolio
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tomo Blog</title>
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header header">
		<div class="site-branding">
			<div class="container">
				<div class="row">
					<!-- スマホ用メニューボタン -->
					<div class="openbtn"><span></span><span></span><span></span></div>
					<div class="circle-bg"></div><!-- sp用navボタンクリック時の背景用 -->
					<div class="col-12 col-md-4 header_title">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					</div>
					<div class="col-12 col-md-8 align-self-center header_sub_title">
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a></p>
					</div>
					<div class="col-12">
						<form class="header_search">
							<input type="text" placeholder="キーワードを入力">
							<i class="fas fa-search"></i>
						</form>
					</div>
				</div>
			</div>
		</div><!-- .site-branding -->

		<div class="header_container">
			<div id="g-nav" class="header_links">
				<nav id="site-navigation" class="col-12  main-navigation g-nav">
					<?php
					$args = array(
							'menu' => 'navigation',
							'menu_class' => '',
							'container' => false,
					);
					wp_nav_menu($args);
					?>
				</nav><!-- #site-navigation -->
				<ul class="col-12 header_sns">
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				</ul>
			</div>  
		</div>
	</header><!-- #masthead -->
