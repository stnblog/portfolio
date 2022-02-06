<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="flex justify-between">

    <?php get_template_part('includes/header'); ?>

    <main class="l-main inview">

      <section>
        <div class="index__inner index__inner--about">
          <div class="container p-intro__wrap">
            <div class="row items-center justify-center">

              <!-- <div class="p-intro__head u-dp-pc">
                <figure class="c-picture__img p-intro__img inview">
                  <picture class="c-picture__img--inner">
                    <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/profile_01.jpg" alt="">
                  </picture>
                </figure>
              </div> -->

              <div class="p-intro__body">
                <h2 class="p-intro__heading">
                  <span class="-en animate-heading">当サイトについて</span>
                  <span class="-ja animate-heading">tnblog</span>
                </h2>
                <div class="inview js-scroll--fadeUp">

                  <div class="u-dp-sp">
                    <figure class="c-picture__img p-intro__img inview">
                      <picture class="c-picture__img--inner">
                        <img src="https://i.imgur.com/XpVGETW.png" alt="">
                      </picture>
                    </figure>
                  </div>
                  <div class="p-intro__txt">
                    <p class="-intro">
                      当サイトは、モチベーション維持・学習後の成果物の掲載を目的としたポートフォリオサイトです。<br>アドバイス、ご指摘等ございましたら最下部のメールアイコンよりご連絡ください。
                    </p>
                    <p class="p-intro__btn">
                      <a class="c-button c-button--border" href="/about">read more</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="index__inner">
          <h2 class="index__heading inview">
            <span class="-en">my works</span>
            <span class="-ja">WEBサイトのデザイン、コーディング制作物です。</span>
          </h2>
          <div class="inview js-scroll--slideLeft">
            <div class="swiper-container c-slider index__slider js-index-slider">
              <div class="swiper-wrapper c-slider__wrap index__slideWrap">
                <?php
            $args = array(
              'post_type' => 'work',
              // 'category_name' => 'portfolio',
              'posts_per_page' => 8
              );
              $the_query = new WP_Query( $args );
              if ( $the_query->have_posts() ) :
            ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php get_template_part('includes/loop', 'indexWork'); ?>
                <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="container index__foot">
            <div class="row justify-center">
              <div class="col-6__sm">
                <a href="/work">
                  <span class="flex items-center justify-center">
                    <span class="-btn"></span>
                    READ MORE
                  </span>
                </a>
              </div>
              <div class="col-6__sm index__column--slidebtn">
                <div class="swiper-button-prev index__btn--slider index__btn--sliderPrev js-slider-btnPrev"></div>
                <div class="swiper-button-next index__btn--slider index__btn--sliderNext js-slider-btnNext"></div>
              </div>
            </div>
          </div>







        </div>
      </section>

      <section>
        <div class="index__inner">
          <h2 class="index__heading text-left inview">
            <span class="-en">design</span>
            <span class="-ja">バナー、名刺、チラシ等の制作物です。</span>
          </h2>
          <div class="inview js-scroll--slideLeft">
            <div class="swiper-container c-slider index__slider js-index-slider">
              <div class="swiper-wrapper c-slider__wrap index__slideWrap">



                <?php
            $args = array(
              'post_type' => 'gallery',
              // 'category_name' => 'portfolio',
              'posts_per_page' => 8
              );
              $the_query = new WP_Query( $args );
              if ( $the_query->have_posts() ) :
            ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php get_template_part('includes/loop', 'indexGallery'); ?>
                <?php endwhile; ?>
                <?php endif; ?>





              </div>
            </div>
          </div>

          <div class="container index__foot">
            <div class="row justify-center">
              <div class="col-6__sm">
                <a href="/gallery">
                  <span class="flex items-center justify-center">
                    <span class="-btn"></span>
                    read more
                  </span>
                </a>
              </div>
              <div class="col-6__sm index__column--slidebtn">
                <div class="swiper-button-prev index__btn--slider index__btn--sliderPrev js-slider-btnPrev"></div>
                <div class="swiper-button-next index__btn--slider index__btn--sliderNext js-slider-btnNext"></div>
              </div>
            </div>
          </div>

        </div>
      </section>

      <section>
        <div class="index__inner">
          <h2 class="index__heading inview">
            <span class="-en">memo</span>
            <span class="-ja">外部ブログサービスを利用した作業時のメモです。</span>
          </h2>
          <div class="inview js-scroll--slideLeft">
            <?php
          include_once( ABSPATH . WPINC . '/feed.php' );
          $rss = fetch_feed( 'https://note.com/stnb1201/rss' );
          if ( !is_wp_error( $rss ) ) {
          $maxitems = $rss->get_item_quantity( 8 );
          $rss_items = $rss->get_items( 0, $maxitems );
          }
          ?>
            <?php if ( !empty( $maxitems ) ) : ?>
            <div class="swiper-container c-slider index__slider js-index-slider">
              <div class="swiper-wrapper c-slider__wrap index__slideWrap">
                <?php if ($maxitems == 0) echo '<li>RSSデータがありません</li>';
          else
          foreach ( $rss_items as $item ) : ?>
                <div class="swiper-slide c-slider__slide index__slide">
                  <a href="<?php echo $item->get_permalink(); ?>">
                    <?php
                $first_img = '';
                if ( isset( $item->data["child"]["http://search.yahoo.com/mrss/"]["thumbnail"][0]["data"] ) ) {
                $first_img = $item->data["child"]["http://search.yahoo.com/mrss/"]["thumbnail"][0]["data"];
                }
                ?>
                    <?php if ( !empty( $first_img ) ) : ?>
                    <figure class="c-picture__img index__img">
                      <picture class="c-picture__img--inner">
                        <img src="<?php echo esc_attr( $first_img ); ?>" alt="">
                      </picture>
                    </figure>
                    <?php else : ?>
                    <figure class="c-picture__img index__img">
                      <picture class="c-picture__img--inner">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/404.jpg" alt="">
                      </picture>
                    </figure>
                    <?php endif; ?>
                  </a>
                  <h3 class="c-meta__heading">
                    <?php echo mb_substr(strip_tags($item->get_title()), 0, 34); ?>
                  </h3>
                  <div class="c-meta">
                    <p class="-tag">NOTE記事</p>
                    <p class="-date"><?php echo $item->get_date('Y.m.d') ?></p>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
            <?php endif; ?>
          </div>
          <div class="container index__foot">
            <div class="row justify-center">
              <div class="col-6__sm">
                <a href="https://note.com/stnb1201">
                  <span class="flex items-center justify-center">
                    <span class="-btn"></span>
                    READ MORE
                  </span>
                </a>
              </div>
              <div class="col-6__sm index__column--slidebtn">
                <div class="swiper-button-prev index__btn--slider index__btn--sliderPrev js-slider-btnPrev"></div>
                <div class="swiper-button-next index__btn--slider index__btn--sliderNext js-slider-btnNext"></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php get_template_part('includes/footer'); ?>
      <?php get_footer(); ?>

    </main>


  </div>
</body>

</html>
