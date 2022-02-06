<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>

<div class="flex justify-between">

  <?php get_template_part('includes/header'); ?>

  <?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>
  <main class="l-main">

    <div class="c-heading inview">
      <h1 class="c-heading__main inview js-scroll--fadeUp">
        <span class="-en"><?php the_title() ?></span>
        <span class="-ja">私について</span>
      </h1>
    </div>

    <section class="p-about">
      <div class="p-about__inner">
        <div class="p-about__wrap">
          <div class="p-about__head">
            <figure class="p-about__bg inview"
              style="background-image: url('<?php echo get_template_directory_uri() ?>/dist/assets/images/profile_01.jpg');">
            </figure>
            <h2 class="p-about__heading--name">名前：タナベ</h2>
            <p class="p-about__txt--self">
              28歳、フリーター、焦燥感が強みです。<br />
              趣味でWEB制作とかデザインの勉強してます。インディーズゲームとか好きです。将来作ってみたい。
            </p>
            <!-- <ul class="p-about__list">
              <li class="p-about__item--sns">
                <a href="#">
                  <svg>
                    <use
                      xlink:href="<?php echo get_template_directory_uri() ?>/dist/assets/images/sprite.svg#icon-twitter">
                    </use>
                  </svg>
                </a>
              </li>
              <li class="p-about__item--sns">
                <a href="#">
                  <svg>
                    <use
                      xlink:href="<?php echo get_template_directory_uri() ?>/dist/assets/images/sprite.svg#icon-instagram">
                    </use>
                  </svg>
                </a>
              </li>
            </ul> -->
          </div>
          <div class="p-about__body">

            <ul class="p-about__list">
              <li class="p-about__item--menu js-tab--trigger is-active" data-tab="tab-content01">
                <span>できること</span>
              </li>
              <li class="p-about__item--menu js-tab--trigger" data-tab="tab-content02">
                <span>プロフィール</span>
              </li>
            </ul>

            <div class="p-about__content">
              <div id="tab-content01" class="p-about__box js-tab--content is-active">

                <ul class="p-about__list--content">
                  <li class="p-about__item--content">
                    <div class="p-about__icon">
                      <svg>
                        <use
                          xlink:href="<?php echo get_template_directory_uri() ?>/dist/assets/images/sprite.svg#icon-html5">
                        </use>
                      </svg>
                    </div>

                    <div class="p-about__box--txt">
                      <h3 class="p-about__heading--content">
                        コーディング
                      </h3>
                      <p class="p-about__txt--content">
                        実務でLPページのコーディングを行った経験があります。<br class="u-dp-pc" />開発環境はSass, Ejs、Gulpを使用しています。
                      </p>
                    </div>
                  </li>
                  <li class="p-about__item--content">


                    <div class="p-about__icon">
                      <svg>
                        <use
                          xlink:href="<?php echo get_template_directory_uri() ?>/dist/assets/images/sprite.svg#icon-javascript">
                        </use>
                      </svg>
                    </div>

                    <div class="p-about__box--txt">

                      <h3 class="p-about__heading--content">
                        フロントエンド
                      </h3>
                      <p class="p-about__txt--content">
                        ES6, Jqueryによる動的パーツやスクロールアニメーションの実装が可能です。<br
                          class="u-dp-pc" />Swiper、InterSectionObserverをよく使用します。
                      </p>

                    </div>

                  </li>
                  <li class="p-about__item--content">


                    <div class="p-about__icon">
                      <svg>
                        <use
                          xlink:href="<?php echo get_template_directory_uri() ?>/dist/assets/images/sprite.svg#icon-wordpress">
                        </use>
                      </svg>
                    </div>

                    <div class="p-about__box--txt">


                      <h3 class="p-about__heading--content">
                        ワードプレス
                      </h3>
                      <p class="p-about__txt--content">
                        既存サイトのCMS化、オリジナルテーマの作成、カスタムフィールドの設定、<br / class="u-dp-pc">サーバ移管等ができます。
                      </p>

                    </div>
                  </li>
                  <li class="p-about__item--content">


                    <div class="p-about__icon">
                      <svg>
                        <use
                          xlink:href="<?php echo get_template_directory_uri() ?>/dist/assets/images/sprite.svg#icon-adobephotoshop">
                        </use>
                      </svg>
                    </div>


                    <div class="p-about__box--txt">

                      <h3 class="p-about__heading--content">
                        フォトショップ
                      </h3>
                      <p class="p-about__txt--content">
                        画像の書き出し、リサイズといった基本操作ができます。<br class="u-dp-pc" />画像の切抜き、色域指定による細かい箇所の色味調整、レタッチ、簡単な合成ができます。
                      </p>


                    </div>

                  </li>
                </ul>

              </div>

              <div id="tab-content02" class="p-about__box js-tab--content">
                <ul class="p-about__list--content">
                  <li class="p-about__item--content">
                    <p class="p-about__txt--content">
                      名前 ： S.TANABE
                    </p>
                  </li>
                  <li class="p-about__item--content">
                    <p class="p-about__txt--content">
                      年齢 ： 28歳
                    </p>
                  </li>
                  <li class="p-about__item--content">
                    <p class="p-about__txt--content">
                      生年月日 ： 1993.12.01
                    </p>
                  </li>
                  <li class="p-about__item--content">
                    <p class="p-about__txt--content">
                      所在地 ： 東京 - 北千住
                    </p>
                  </li>
                  <li class="p-about__item--content">
                    <p class="p-about__txt--content">
                      趣味 ： NETFLIX
                    </p>
                  </li>
                </ul>
              </div>

            </div>

          </div>

        </div>

      </div>
    </section>



    <?php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>

  </main>
  <?php endwhile; ?>
  <?php endif; ?>

  </div>


</body>

</html>
