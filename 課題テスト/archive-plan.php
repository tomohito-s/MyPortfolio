<?php get_header(); ?>

<h2 class="pageTitle">一覧ページ(カスタム投稿)<span>archive-type.php</span></h2>

<main class="main">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="main_title"><?php wp_title(''); ?></h2>
        <div class="row">
          <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <div class="col-md-4">
                <article id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
                  <div class="news_pic">
                    <a href="<?php the_permalink(); ?>">
                      <?php if ( has_post_thumbnail() ): ?>
                        <?php the_post_thumbnail('large'); ?>
                      <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimg/noimage_600x400.png" alt="">
                      <?php endif; ?>
                    </a>
                  </div>
                  <div class="news_meta">
                    <?php the_category(); ?>
                    <time class="news_time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                  </div>

                  <div class="page_taxonomy">
                    <?php
                      $plankinds = get_terms(array('taxonomy' => 'plankind'));
                      if ( !empty($plankinds) ):
                    ?>
                      <ul class="taxonomy_kinds">
                        <?php foreach ($plankinds as $plankind): ?>
                          <li><a href="<?php echo get_term_link($plankind); ?>"><?php echo $plankind->name ?></a></li>
                        <?php endforeach; ?>
                      </ul>    
                    <?php endif; ?>
                  </div>

                  <div class="info">
                    <ul>
                      <li class="info_list">
                        <p>
                          <?php
                            $dishes = the_field('dishes');
                          ?>
                        </p>
                        <p>
                          <?php
                            $peoples = get_field('peoples');
                            foreach ($peoples as $key => $people){
                              echo $people;
                            }
                          ?>
                        </p>
                        <p class="price">
                          <?php
                            $price = get_field('price');
                            $taxRate = 0.08;
                            $tax_included = $price +($price * $taxRate);
                              echo round($tax_included)."円(税込)";
                          ?>
                        </p>
                      </li>
                    </ul>
                  </div>

                  <h2 class="news_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <div class="news_desc">
                    <?php the_excerpt(); ?>
                    <p><a href="<?php the_permalink(); ?>">[続きを読む]</a></p>
                  </div>
                </article>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>