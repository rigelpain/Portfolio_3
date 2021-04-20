<?php get_header();?>
<?php $uri = get_template_directory_uri(); ?>
    <div class="main">
      <a href="<?= $uri ?>/products"  class="header-inner__list-item">
      <div class="main-contents-tittle">
        <p class="main-contents-tittle-en">PRODUCTS</p>
        <p class="main-contents-tittle-ja">過去の作品</p>
      </div>
    </a>
      <ul class="main-contents-list-wrap">
        <li class="main-contents-list">
        <div class="main-contents-item">
        <?php
          $query_products = new WP_Query(
            array(
              'post_type' => 'products',
              'posts_per_page' => 8,
            )
          );
          if ($query_products->have_posts()) {
            while ($query_products->have_posts()) { ?>
              <?php $query_products->the_post(); ?>
              <a href="<?php echo get_permalink() ?>" class="blogCard" style="background-image: url(<?php the_field('products_thumb') ?>)"><span class="blogCard__date"><?php echo get_post_time('Y.m.d') ?></span></a>
          <?php
            }
          }
        ?>
        </div>
          <!-- <div class="main-contents-item products-1">
            <a href="./products/atamakaji/index.html">
              <div class="main-contents-item__description-wrap">
                <div class="main-contents-item__description">
                  <p class="main-contents-item__description-tittle">頭鍛冶</p>
                  <p class="main-contents-item__description-tittle-type">- Unity / ESP32 / illust -</p>
                  <p class="main-contents-item__description-tittle-sub">両手を失った職人による</br>魂の鍛冶</p>
                </div>
              </div>
            </a>
          </div> -->
        </li>
        <li class="main-contents-list">
          <div class="main-contents-item products-2">
            <a href="<?= $uri ?>/products/cheers/index.html">
              <div class="main-contents-item__description-wrap">
                <div class="main-contents-item__description">
                  <p class="main-contents-item__description-tittle">Cheers</p>
                  <p class="main-contents-item__description-tittle-type">- React / ESP32 / Firebase -</p>
                  <p class="main-contents-item__description-tittle-sub">\\ 会場投票賞獲得 //<br>乾杯をもっと楽しく！<br>パーティー会場を彩るデバイス</p>
                </div>
              </div>
            </a>
          </div>
        </li>
        <li class="main-contents-list">
          <div class="main-contents-item products-3">
            <a href="<?= $uri ?>/products/bravers/index.html">
              <div class="main-contents-item__description-wrap">
                <div class="main-contents-item__description">
                  <p class="main-contents-item__description-tittle">BRAVERS</p>
                  <p class="main-contents-item__description-tittle-type">- twitter / ESP32 -</p>
                  <p class="main-contents-item__description-tittle-sub">フォロワーを賭けろ(ガチ)</br>現実に侵食してくる恐怖に打ち勝て</p>
                </div>
              </div>
            </a>
          </div>
        </li>
        <li class="main-contents-list">
          <div class="main-contents-item products-4">
            <a href="<?= $uri ?>/products/enoki/index.html">
              <div class="main-contents-item__description-wrap">
                <div class="main-contents-item__description">
                  <p class="main-contents-item__description-tittle">Enok!<br>デコレータ</p>
                  <p class="main-contents-item__description-tittle-type">- python / word2vec -</p>
                  <p class="main-contents-item__description-tittle-sub">\\ 優秀賞獲得 //<br>SimejiのようなEnok!</p>
                </div>
              </div>
            </a>
          </div>
        </li>
        <li class="main-contents-list">
          <div class="main-contents-item products-5">
            <a href="<?= $uri ?>/products/bokudodo/index.html">
              <div class="main-contents-item__description-wrap">
                <div class="main-contents-item__description">
                  <p class="main-contents-item__description-tittle">ぼくドド</p>
                  <p class="main-contents-item__description-tittle-type">- Android / GPS -</p>
                  <p class="main-contents-item__description-tittle-sub">\\ 初めての開発 //</br>函館山は俺らに任せろ</br>ハンズフリーナビアプリ</p>
                </div>
              </div>
            </a>
          </div>
        </li>
      </ul>
<!--
      <div class="main-contents-tittle">
        <p class="main-contents-tittle-en">EVENTS</p>
        <p class="main-contents-tittle-ja">参加したイベント</p>
      </div>
      <ul class="main-contents-list-wrap">
        <li class="main-contents-list">
          <div class="main-contents-item events-1">
            <div class="main-contents-item__description-wrap">
              <div class="main-contents-item__description">
                <p class="main-contents-item__description-tittle">HackU<br>2019<br>SENDAI</p>
                <p class="main-contents-item__description-tittle-type">- ハッカソン -</p>
                <p class="main-contents-item__description-tittle-sub">『 Cheers 』</br>乾杯をもっと楽しくするアプリ&デバイス</p>
              </div>
            </div>
          </div>
          <li class="main-contents-list">
            <div class="main-contents-item events-1">
              <div class="main-contents-item__description-wrap">
                <div class="main-contents-item__description">
                  <p class="main-contents-item__description-tittle">HackU<br>2019<br>SENDAI</p>
                  <p class="main-contents-item__description-tittle-type">- ハッカソン -</p>
                  <p class="main-contents-item__description-tittle-sub">『 Cheers 』</br>乾杯をもっと楽しくするアプリ&デバイス</p>
                </div>
              </div>
            </div>
          </li>
          <li class="main-contents-list">
            <div class="main-contents-item events-1">
              <div class="main-contents-item__description-wrap">
                <div class="main-contents-item__description">
                  <p class="main-contents-item__description-tittle">HackU<br>2019<br>SENDAI</p>
                  <p class="main-contents-item__description-tittle-type">- ハッカソン -</p>
                  <p class="main-contents-item__description-tittle-sub">『 Cheers 』</br>乾杯をもっと楽しくするアプリ&デバイス</p>
                </div>
              </div>
            </div>
          </li>
          <li class="main-contents-list">
            <div class="main-contents-item events-1">
              <div class="main-contents-item__description-wrap">
                <div class="main-contents-item__description">
                  <p class="main-contents-item__description-tittle">HackU<br>2019<br>SENDAI</p>
                  <p class="main-contents-item__description-tittle-type">- ハッカソン -</p>
                  <p class="main-contents-item__description-tittle-sub">『 Cheers 』</br>乾杯をもっと楽しくするアプリ&デバイス</p>
                </div>
              </div>
            </div>
          </li>
      </ul>

      <div class="main-contents-tittle">
        <p class="main-contents-tittle-en">JOB</p>
        <p class="main-contents-tittle-ja">実務経験</p>
      </div>
      <ul class="main-contents-list-wrap">
        <li class="main-contents-list">
          <div class="main-contents-item events-1">
            <div class="main-contents-job-wrap">
              <div class="main-contents-item__description">
                <p class="main-contents-item__description-tittle">HackU<br>2019<br>SENDAI</p>
                <p class="main-contents-item__description-tittle-type">- ハッカソン -</p>
                <p class="main-contents-item__description-tittle-sub">『 Cheers 』</br>乾杯をもっと楽しくするアプリ&デバイス</p>
              </div>
            </div>
          </div>
        </li>
      </ul>

      <div class="main-contents-tittle">
        <p class="main-contents-tittle-en">BLOG</p>
        <p class="main-contents-tittle-ja">ブログ</p>
      </div>
      <ul class="main-contents-list-wrap">
        <li class="main-contents-list">
          <div class="main-contents-item blog-1">
            <div class="main-contents-item__description-wrap">
              <div class="main-contents-item__description">
                <p class="main-contents-item__description-tittle">Sass って？</p>
                <p class="main-contents-item__description-tittle-type">- HTML / CSS / SCSS -</p>
                <p class="main-contents-item__description-tittle-sub">CSSをもっと便利に、書きやすくする方法</p>
              </div>
            </div>
          </div>
        </li>
        <li class="main-contents-list">
          <div class="main-contents-item blog-1">
            <div class="main-contents-item__description-wrap">
              <div class="main-contents-item__description">
                <p class="main-contents-item__description-tittle">Sass って？</p>
                <p class="main-contents-item__description-tittle-type">- HTML / CSS / SCSS -</p>
                <p class="main-contents-item__description-tittle-sub">CSSをもっと便利に、書きやすくする方法</p>
              </div>
            </div>
          </div>
        </li>
        <li class="main-contents-list">
          <div class="main-contents-item blog-1">
            <div class="main-contents-item__description-wrap">
              <div class="main-contents-item__description">
                <p class="main-contents-item__description-tittle">Sass って？</p>
                <p class="main-contents-item__description-tittle-type">- HTML / CSS / SCSS -</p>
                <p class="main-contents-item__description-tittle-sub">CSSをもっと便利に、書きやすくする方法</p>
              </div>
            </div>
          </div>
        </li>
        <li class="main-contents-list">
          <div class="main-contents-item blog-1">
            <div class="main-contents-item__description-wrap">
              <div class="main-contents-item__description">
                <p class="main-contents-item__description-tittle">Sass って？</p>
                <p class="main-contents-item__description-tittle-type">- HTML / CSS / SCSS -</p>
                <p class="main-contents-item__description-tittle-sub">CSSをもっと便利に、書きやすくする方法</p>
              </div>
            </div>
          </div>
        </li>
      </ul>
        -->
    </div>

    <?php get_footer(); ?>
  </body>
</html>
