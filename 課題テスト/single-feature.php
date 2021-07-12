<?php get_header(); ?>

	<h2 class="pageTitle">カスタム投稿用の詳細ページの紹介<span>single-type.php</span></h2>

	<main class="main">
		<div class="container">
			<div class="row">
				<div class="col-12">
          <?php if( have_posts() ) : ?>
            <?php while( have_posts() ) : the_post();  ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class('article') ?>>
                <header class="article_header">
                  <h2 class="article_title"><?php the_title(); ?></h2>
                </header>

                <div class="article_image">
                  <div class="content">
                    <?php
                      $image = get_field('image');
                      $image_url = $image['sizes']['large'];
                    ?>
                    <img src="<?php echo $image_url ?>" alt="">
                  </div>
                </div>

                <div class="article_body">
                  <div class="content">
                    <?php the_content(); ?>
                  </div>
                </div>

                <div class="postLinks">
                  <div class="postLink postLink-prev"><?php previous_post_link(); ?></div>
                  <div class="postLink postLink-next"><?php next_post_link(); ?></div>
                </div>
              </article>
            <?php endwhile; ?>
          <?php endif; ?>
				</div>

			</div>
		</div>
	</main>

<?php get_footer(); ?>