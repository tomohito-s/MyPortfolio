<?php get_header(); ?>
 <div class="home">
  <div class="breadcrumbs_container">
    <div class="menu_header">
      <div class="header_info">
        <div>Menu</div>
        <div>メニュー</div>
      </div>
    </div>
  </div>
 </div>

 <!-- Items -->
  <div class="items">
    <div class="footer_row">
      <div class="row">
        <div class="col-lg-12">
          <p class="title">メニュー覧</p>
          <div class="items_container">
            <div class="row items_row">
              <!--  Item -->

                  <div class="col-lg-12 item_col">
                    <div class="item">
                      <div class="item_image">
                        <div class="item_image">
                          <!-- <img src="img/" alt="" /> -->
                          <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="item_body">
                          <h3 class="item_title"><?php single_term_title(''); ?></h3>
                            <div class="item_text" style="display: flex;justify-content: space-between;border-bottom: double;padding: 0 20px;">
                              <p><?php echo get_field('cut'); ?></p>
                              <p><?php echo get_field('cut-price'); ?></p>
                            </div>
                          </div>
                        </div>
                        <div class="item_footer">
                          <div class="item_footer_content d-flex flex-row align-items-center justify-content-start">
                            <!-- <div class="item_price ml-auto">詳細を見る</div> -->
                            <div class="item_price ml-auto">一言コメント覧</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
 <?php get_footer(); ?>