<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MyPortfolio
 */

get_header();
?>

	<main id="primary" class="site-main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
			<h2 class="entry-title"><?php the_title(); ?><span><?php echo strtoupper($post->post_name); ?></h2>
			</header><!-- .entry-header -->

			<?php myportfolio_post_thumbnail(); ?>

			<div class="container entry-content">
				<div class="row">
						<?php
						the_content();

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'myportfolio' ),
								'after'  => '</div>',
							)
						);
						?>
				</div>
			</div><!-- .entry-content -->

		</article><!-- #post-<?php the_ID(); ?> -->
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
