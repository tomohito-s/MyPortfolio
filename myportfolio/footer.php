<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyPortfolio
 */

?>

	<div class="pagetop js-pagetop"><i class="fas fa-angle-up"></i>PAGE TOP</div>

	<footer id="colophon" class="site-footer footer">
		<div class="site-info container">
			<div class="header_links">
				<nav id="site-navigation" class="col-12  main-navigation g-nav">
						<?php
						$args = array(
								'menu' => 'navigation',
								'menu_class' => '',
								'container' => false,
						);
						wp_nav_menu($args);
						?>
				</nav>
			</div>
			<div class="my_copyright">
				<div class="container">
					<small class="col-12 text-center">Copyright - <a href="">Tomohito Sato</a>, 2021 All Rights Reserved.</small>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
