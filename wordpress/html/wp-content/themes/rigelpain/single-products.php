<?php get_header(); ?>
<?php $uri = get_template_directory_uri(); ?>
<?php
$category = get_the_terms($post->ID, 'products_cat');
$tags = get_the_terms($post->ID, 'products_tag');
$link = get_field('products_link');
if ($link) {
  $link_url = $link['url'];
  $link_title = $link['title'];
  $link_target = $link['target'] ? $link['target'] : '_self';
}
?>


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
                  <p class="article__property-description-content">
                    ・技術タグ<br>
                    <?php
                    if ($tags) {
                      foreach ($tags as $tag) {
                        echo $tag->name . ' / ';
                      }
                    }
                    ?>
                  </p>
                  <p class="article__property-description-content">・関連リンク<br>
                    <?php
                      if ($link) { ?>
                        <a href="<?= esc_url($link_url) ?>" class="article__property-description-content-link" target="<?= esc_attr($link_target) ?>"><?= esc_url($link_title) ?></a>
                      <?php
                      }
                    ?>
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