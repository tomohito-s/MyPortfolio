<aside class="archive">
    <h2 class="archive_title">最新記事</h2>
    <ul class="archive_list">
        <?php
          $args = array(
              'posts_per_page' => 3
          );
          $posts = get_posts( $args );
          foreach ( $posts as $post ):
          setup_postdata( $post );
        ?>
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php 
          endforeach;
          wp_reset_postdata();
        ?>

    </ul>
</aside>