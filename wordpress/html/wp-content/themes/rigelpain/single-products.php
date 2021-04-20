<?php get_header(); ?>

  <div class="article-wrap">
    <div class="article-category">
      <span class="article-category-en">PRODUCTS </span>
      <span class="article-category-ja">過去の作品</span>
    </div>
    <?php set_query_var( 'taxonomy', 'products_cat'); ?>

    <?php
      if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
          <div class="article">
            <div class="article__left">
              <ul class="article__thumbnail">
              <?php
                $taxonomy = 'products_slide'; // register_taxonomyで指定したタクソノミー名を指定
                for ($j = 1; $j <= 10; $j++) {
                  $img = get_field( $taxonomy . '_' . $j );
                  if(!empty($img)) {?>
                    <li class="article__thumbnail-list"><div class="article__thumbnail-products" style="background-image:url(<?= $img ?>)"></div></li>
                  <?php
                  }
                }
              ?>
                <!-- <li class="article__thumbnail-list"><div class="article__thumbnail-products" style="background-image:url(<?php echo get_field('products_thumb'); ?>)"></div></li>
                <li class="article__thumbnail-list"><div class="article__thumbnail-products -thum-5-2"></div></li>
                <li class="article__thumbnail-list"><div class="article__thumbnail-products -thum-5-4"></div></li>
                <li class="article__thumbnail-list"><div class="article__thumbnail-products -thum-5-5"></div></li>
                <li class="article__thumbnail-list"><div class="article__thumbnail-products -thum-5-6"></div></li> -->
              </ul>
              <div class="article__property">
                <div class="article__property-tittle">
                  <p class="article__property-tittle-main">『 <?php echo get_field('products_name'); ?> 』</p>
                  <p class="article__property-tittle-sub">- <?php echo get_field('products_at'); ?> -</p>
                </div>
                <div class="article__property-description">
                  <p class="article__property-description-content">
                    ・テーマ<br>
                  　「 <?php echo get_field('products_theme'); ?> 」</p>
                  <p class="article__property-description-content">・ツール　言語<br>　<?php echo get_field('products_tech'); ?></p>
                  <p class="article__property-description-content">・関連リンク<br>　
                    <a href="https://twitter.com/The_KESNON"  class="article__property-description-content-link" target="blank">けすのん</a> /
                    <a href="https://twitter.com/D_kab_D"  class="article__property-description-content-link" target="blank">カブ</a> / <br>
                  　<a href="https://globalgamejam.org/2020/jam-sites/globalgamejam-2020-hakodate"  class="article__property-description-content-link" target="blank"> GGJ Hakodate</a> /
                    <a href="https://twitter.com/takumin_kosen"  class="article__property-description-content-link" target="blank">たくみ</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="article__right">
              <p class="article__date"><?php echo get_field('products_start'); ?> ~ <?php echo get_field('products_comp'); ?></p>
              <p class="article__tittle"><?php the_title(); ?></p>
              <div class="article__content">
                <?php echo get_the_content(); ?>
                <?php echo get_field('products_member'); ?>
              </div>
            </div>
          </div>
        <?php
        endwhile;
      endif;
    wp_reset_postdata(); ?>
<?php get_footer(); ?>