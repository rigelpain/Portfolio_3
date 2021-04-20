<!DOCTYPE html>
<html>
<?php get_header(); ?>
  <body>
    <header class="header-wrap">
      <a href="<?= $uri ?>" class="header-logo">
      </a>
      <div class="header-inner">
        <ol class="header-inner__list-wrap">
          <li class="header-inner__list">
            <a href="<?= $uri ?>/products"  class="header-inner__list-item">
              <p class="header-inner__list-item-large">PRODUCTS</p>
              <p class="header-inner__list-item-small">過去の製作物</p>
            </a>
            <div class="header-inner__list-item">
              <p class="header-inner__list-item-large">EVENTS</p>
              <p class="header-inner__list-item-small">参加したイベント</p>
            </div>
            <div class="header-inner__list-item">
              <p class="header-inner__list-item-large">Blog</p>
              <p class="header-inner__list-item-small">ブログ</p>
            </div>
            <div class="header-inner__list-item">
              <p class="header-inner__list-item-large">CONTACT</p>
              <div class="header-inner__list-item__sns">
                <a href="https://twitter.com/rigelpain" class="header-inner__list-item__sns-twitter"></a>
                <a href="https://github.com/rigelpain" class="header-inner__list-item__sns-github"></a>
              </div>
            </div><!--
            <div class="header-inner__list-item">
              <span class="header-inner__list-item-large">THEMES</span>
              <div class="header-inner__list-item-themes">
                <div class="header-inner__list-item-vanilla"></div>
                <div class="header-inner__list-item-banana"></div>
                <div class="header-inner__list-item-sky"></div>
              </div>
            </div>-->
          </li>
          <li class="header-inner__list">
            <div class="header-inner__list-item">
              <div class="header-inner__list-item-profile"></div>
              <p class="header-inner__list-item-large">小林 陽昭</p>
              <p class="header-inner__list-item-small">Kobayashi</br>Haruaki</p>
            </div>
          </li>
          <li class="header-inner__list">
            <div class="header-inner__list-item">
              <p class="header-inner__list-item-small">はこだて未来大学</br>情報デザインコース(F) 2年</p>
              <p class="header-inner__list-item-small">函館高専 情報コース 卒</p>
            </div>
          </li>
        </ol>
      </div>
    </header>

    <div class="products">

      <div class="main-contents-tittle">
        <p class="main-contents-tittle-en">PRODUCTS</p>
        <p class="main-contents-tittle-ja">過去の作品</p>
      </div>
      <ul class="main-contents-list-wrap">
        <li class="main-contents-list">
          <div class="main-contents-item products-1">
            <a href="../products/atamakaji/index.html">
              <div class="main-contents-item__description-wrap">
                <div class="main-contents-item__description">
                  <p class="main-contents-item__description-tittle">頭鍛冶</p>
                  <p class="main-contents-item__description-tittle-type">- Unity / ESP32 / illust -</p>
                  <p class="main-contents-item__description-tittle-sub">両手を失った職人による</br>魂の鍛冶</p>
                </div>
              </div>
            </a>
          </div>
        </li>
        <li class="main-contents-list">
          <div class="main-contents-item products-2">
            <a href="../products/cheers/index.html">
              <div class="main-contents-item__description-wrap">
                <div class="main-contents-item__description">
                  <p class="main-contents-item__description-tittle">Cheers</p>
                  <p class="main-contents-item__description-tittle-type">- React / ESP32 / Firebase -</p>
                  <p class="main-contents-item__description-tittle-sub">\\ 優秀賞獲得 //<br>乾杯をもっと楽しく！<br>パーティー会場を彩るデバイス</p>
                </div>
              </div>
            </a>
          </div>
        </li>
        <li class="main-contents-list">
          <div class="main-contents-item products-3">
            <a href="../products/bravers/index.html">
              <div class="main-contents-item__description-wrap">
                <div class="main-contents-item__description">
                  <p class="main-contents-item__description-tittle">BRAVERS</p>
                  <p class="main-contents-item__description-tittle-type">- twitter / ESP32 -</p>
                  <p class="main-contents-item__description-tittle-sub">フォロワーを賭けろ(ガチ)</br>現実に侵食してくるクソゲー</p>
                </div>
              </div>
            </a>
          </div>
        </li>
        <li class="main-contents-list">
          <div class="main-contents-item products-4">
            <a href="../products/enoki/index.html">
              <div class="main-contents-item__description-wrap">
                <div class="main-contents-item__description">
                  <p class="main-contents-item__description-tittle">Enok! デコレータ</p>
                  <p class="main-contents-item__description-tittle-type">- python / word2vec -</p>
                  <p class="main-contents-item__description-tittle-sub">テキストコミュニケーションは難しい</br>SimejiのようなEnok!</p>
                </div>
              </div>
            </a>
          </div>
        </li>
        <li class="main-contents-list">
          <div class="main-contents-item products-5">
            <a href="../products/bokudodo/index.html">
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
    </div>
    <?php get_footer(); ?>
  </body>
</html>
