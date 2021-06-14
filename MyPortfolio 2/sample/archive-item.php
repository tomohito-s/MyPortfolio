<?php get_header(); ?>
 <div class="home">
  <div class="breadcrumbs_container">
    <div class="image_header">
      <div class="header_info">
        <div>Items</div>
        <div>商品</div>
      </div>
    </div>
  </div>
 </div>

 <!-- Items -->
  <div class="items">
    <div class="footer_row">
      <div class="row">
        <div class="col-lg-12">
          <p class="title">商品紹介</p>
          <div class="items_container">
            <div class="row items_row">
              <!--  Item -->
              <?php if (have_posts()): ?>
                <?php  while(have_posts()): the_post() ?>
                  <div class="col-lg-4 item_col">
                    <div class="item">
                      <div class="item_image">
                        <div class="item_image">
                          <!-- <img src="img/" alt="" /> -->
                          <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="item_body">
                          <h3 class="item_title">
                            <!-- <a href="items_detail.html">シャンプー&トリートメント</a> -->
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                          </h3>
                            <div class="item_text">
                            <!-- <p>当店で使用しているシャンプー&トリートメントです。髪質にあった物をお選びください。</p> -->
                            <p><?php echo get_field('subtitle'); ?></p>
                            </div>
                        </div>
                      </div>
                      <div class="item_footer">
                        <div class="item_footer_content d-flex flex-row align-items-center justify-content-start">
                          <!-- <div class="item_price ml-auto">詳細を見る</div> -->
                          <div class="item_price ml-auto"><a href="<?php the_permalink(); ?>">詳細を見る</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endwhile;?>
              <?php endif;?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
 <?php get_footer(); ?>