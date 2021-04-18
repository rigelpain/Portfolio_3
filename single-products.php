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
                <li class="article__thumbnail-list"><div class="article__thumbnail-products -thum-5-1"></div></li>
                <li class="article__thumbnail-list"><div class="article__thumbnail-products -thum-5-2"></div></li>
                <li class="article__thumbnail-list"><div class="article__thumbnail-products -thum-5-4"></div></li>
                <li class="article__thumbnail-list"><div class="article__thumbnail-products -thum-5-5"></div></li>
                <li class="article__thumbnail-list"><div class="article__thumbnail-products -thum-5-6"></div></li>
              </ul>
              <div class="article__property">
                <div class="article__property-tittle">
                  <p class="article__property-tittle-main">『 <?php echo get_field('production_title'); ?> 』</p>
                  <p class="article__property-tittle-sub">- <?php echo get_field('production_subtitle'); ?> -</p>
                </div>
                <div class="article__property-description">
                  <p class="article__property-description-content">
                    ・テーマ<br>
                  　「 <?php echo get_field('production_theme'); ?> 」</p>
                  <p class="article__property-description-content">・ツール　言語<br>　<span class="article__property-description-content-notmyjob">Unity</span> / <span class="article__property-description-content-notmyjob">ESP32</span> / <span class="article__property-description-content-myjob">illust</span></p>
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
              <p class="article__date"><?php echo get_field('production_time_start'); ?> ~ <?php echo get_field('production_time_end'); ?></p>
              <p class="article__tittle"><?php the_title(); ?></p>
              <p class="article__content">
              <?php echo get_the_content(); ?>
              </p>
            </div>
          </div>
        <?php 
        endwhile;
      endif;
    wp_reset_postdata(); ?>
<?php get_footer(); ?>