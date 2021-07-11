<?php get_header(); ?>
  
  <main>
    <section id="content_1" class="sec">
      <div class="container">
        <h2 class="title">BUONO!Cataring<span>3 つの特徴</span></h2>
        <div class="row">
          <?php  
            $args = array(
              'post_type' => 'feature',
              'posts_per_page' => 3,
            );
            $feature_query = new WP_Query($args);
          ?>
          <?php if($feature_query->have_posts() ) : ?>
            <?php while($feature_query->have_posts() ) : $feature_query->the_post(); ?>
              <div class="col-lg-4">
                <article class="news">
                  <div class="news_pic">
                    <a href="<?php the_permalink(); ?>">
                      <?php if ( has_post_thumbnail() ): ?>
                        <?php the_post_thumbnail('large'); ?>
                      <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimg/noimage_600x400.png" alt="">
                      <?php endif; ?>
                    </a>
                  </div>
                  <h2 class="news_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <div class="news_desc">
                    <?php the_excerpt() ?>
                    <p><a href="<?php the_title(); ?>">[続きを読む]</a></p>
                  </div>
                </article>
              </div>
            <?php endwhile; ?>        
          <?php endif; ?>        
        </div>
        <p class="sec_btn">
          <a href="#" class="btn btn-default">特徴の一覧</a>
        </p>
      </div>    
    </section>

    <section id="content_2" class="sec">
      <div class="container">
        <h2 class="title">選べる 3 つのプラン<span>お料理や飲み物、演出などはどのプランでもカスタマイズ可能です。<br>まずはお気軽にご相談ください。</span></h2>
        <div>
          <?php
            $args = array(
              'post_type' => 'post',
              'category_name' => 'feature',
              'posts_per_page' => 3,
            );
            $plan_query = new WP_Query($args);
          ?>
          <?php if( $plan_query->have_posts() ): ?>        
            <?php while( $plan_query->have_posts() ) : $plan_query->the_post(); ?>        
              <article class="row content_2-plan">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-sx-12">
                  <a href="<?php the_permalink(); ?>">
                    <?php if( has_post_thumbnail() ): ?>
                      <?php the_post_thumbnail('large'); ?>
                    <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimg/noimage_600x400.png" alt="">
                    <?php endif; ?>
                  </a>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-sx-12 content_2_discription">
                  <h2 class="news_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <div class="news_desc">
                    <?php the_excerpt(); ?>
                    <p><a href="<?php the_permalink(); ?>">[続きを読む]</a></p>
                  </div>
                </div>  
              </article>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <p class="sec_btn">
          <a href="" class="btn btn-default">プランの一覧</a>
        </p>
      </div>    
    </section>

    <section id="content_3" class="sec">
      <div class="container">
        <h2 class="title">対応エリア</h2>
        <div class="row">
          <div class="col-lg-6">
            <div class="content_3_erea">
              <div class="">
                <h3>大阪府</h3>
                <p>
                  大阪市（旭区、阿倍野区、生野区、北区、此花区、城東区、住之江区、住吉区、大正区、中央区、鶴見区、天王寺区、浪速区、西区、西成区、西淀川区、東住吉区、東成区、東淀川区、平野区、福島区、港区、都島区、淀川区） 池田市、茨木市、大阪狭山市、柏原市、門真市、堺市（北区、堺区、中区、東区、美原区）、吹田市
                </p>
              </div>
              <div class="">
                <h3>兵庫県</h3>
                <p>
                  芦屋市、尼崎市、宝塚市、西宮市
                </p>
              </div>
              <div class="">
                <p>大阪府、兵庫県内で上記に記載がない地域は要相談。</p>
              </div>
            </div>  
          </div>
          <div class="col-lg-6">
            <div class="erea_map"></div>
          </div>
        </div>
      </div>    
    </section>

    <section id="content_4" class="sec">
      <div class="container">
        <h2 class="title">お問い合わせ</h2>
        <form class="Form">
          <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>会社名</p>
            <input type="text" class="Form-Item-Input" placeholder="例）株式会社令和">
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>氏名</p>
            <input type="text" class="Form-Item-Input" placeholder="例）山田太郎">
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
            <input type="text" class="Form-Item-Input" placeholder="例）000-0000-0000">
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
            <input type="email" class="Form-Item-Input" placeholder="例）example@gmail.com">
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
            <textarea class="Form-Item-Textarea"></textarea>
          </div>
          <input type="submit" class="Form-Btn" value="送信する">
        </form>
      </div>
    </section>

    <div class="pagetop js-pagetop">PAGE TOP</div>

  </main>

<?php get_footer(); ?>