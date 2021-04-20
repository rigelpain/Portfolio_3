<?php $uri = get_template_directory_uri(); ?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="stylesheet" href="<?= $uri ?>/slick/slick.css" />
  <link rel="stylesheet" href="<?= $uri ?>/slick/slick-theme.css" />
  <link rel="stylesheet" href="<?= $uri ?>/css/common.css" />
  <link
    href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c|Varela+Round&display=swap"
    rel="stylesheet"
  />
  <link
    href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
    rel="stylesheet"
  />
  <title>Rigel paiN</title>

  <header class="header-wrap">
      <a href="http://rigelpain.s1008.xrea.com/x/portfolio/3" class="header-logo">
      </a>
      <div class="header-inner">
        <ol class="header-inner__list-wrap">
          <li class="header-inner__list">
            <a href="http://rigelpain.s1008.xrea.com/x/portfolio/3/products"  class="header-inner__list-item">
              <p class="header-inner__list-item-large">PRODUCTS</p>
              <p class="header-inner__list-item-small">過去の製作物</p>
            </a>
            <!-- <div class="header-inner__list-item">
              <p class="header-inner__list-item-large">EVENTS</p>
              <p class="header-inner__list-item-small">参加したイベント</p>
            </div>
            <div class="header-inner__list-item">
              <p class="header-inner__list-item-large">Blog</p>
              <p class="header-inner__list-item-small">ブログ</p>
            </div> -->
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
  <?php wp_head(); ?>
</head>
<body>