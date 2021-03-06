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

 <?php
$kinds = get_terms(array('taxonomy' => 'kind'));
if ( !empty($kinds) ):
?>
<div class="pageNav">
    <ul>
        <?php foreach ($kinds as $kind): ?>
            <li><a href="<?php echo get_term_link($kind); ?>"><?php echo $kind->name ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

 <!-- Items -->
  <div class="items">
    <div class="footer_row">
      <div class="row">
        <div class="col-lg-12">
          <p class="title">メニュー覧</p>

          <?php $kinds = get_terms(array('taxonomy' => 'kind')); if ( !empty($kinds) ): ?>
          <?php foreach ($kinds as $kind): ?>

          <div class="items_container">
            <div class="title-taxonomy">
              <h2 class=""><?php echo $kind->name; ?></h2>
              <p class=""><?php echo strtoupper($kind->slug); ?></p>
            </div>  
            <div class="row items_row">
              <!--  Item -->
              <?php
                // メニューの投稿タイプ
                $args = array(
                    'post_type' => 'menu',
                    'posts_per_page' => -1,
                );
                // メニューの種類で絞り込む
                $taxquerysp = array('relation' => 'AND');
                $taxquerysp[] = array(
                  'taxonomy' => 'kind',
                  'terms' => $kind->slug,
                  'field' => 'slug',
                );
                $args['tax_query'] = $taxquerysp;
                $the_query =  new WP_Query($args);
                if ( $the_query->have_posts() ) :
                ?>
                  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-lg-12 item_col">
                      <div class="item">
                        <div class="item_image">
                          <div class="item_body">
                            <div class="item_text">
                              <p><?php echo get_field('menu-text'); ?></p>
                              <p><?php echo get_field('menu-price'); ?></p>
                            </div>
                          </div>  
                        </div>
                      </div>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
          <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
 <?php get_footer(); ?>