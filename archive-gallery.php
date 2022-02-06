<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>


  <div class="l-modal">
    <div class="l-modal__bg js-modal-close"></div>
    <div class="l-modal__inner">
      <div class="l-modal__area">
        <div class="l-modal__inner--area">
          <div class="c-modal js-modal">
            <div class="swiper-container p-gallery__slider js-modal-slider">
              <div class="swiper-wrapper p-gallery__slideWrap">


                <?php
                    $args = array(
                      'post_type' => 'gallery',
                      // 'category_name' => 'portfolio',
                      'posts_per_page' => 12
                      );
                      $the_query = new WP_Query( $args );
                      if ( $the_query->have_posts() ) :
                    ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


                <div class="swiper-slide p-gallery__slide">
                  <div class="c-modal__inner">
                    <div class="p-gallery__box--img">
                      <figure class="c-picture__img p-gallery__img--modal">
                        <picture class="c-picture__img--inner">
                          <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail('full'); ?>
                          <?php else : ?>
                          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/404.jpg"
                            alt="noimage">
                          <?php endif; ?>
                        </picture>
                      </figure>
                    </div>
                    <div class="p-gallery__box--detail">


                      <p class="p-gallery__btn--more">
                        <a href="<?php the_permalink(); ?>" class="c-button c-button--cross">詳細はこちら</a>
                      </p>


                      <button class="c-modal__btn--close js-modal-close">
                        <span></span>
                        <span></span>
                      </button>


                    </div>
                  </div>

                </div>

                <?php endwhile; ?>
                <?php endif; ?>
              </div>
              <div class="swiper-button-prev c-modal__btn--prev js-modal--btnPrev"></div>
              <div class="swiper-button-next c-modal__btn--next js-modal--btnNext"></div>
              <div class="swiper-pagination js-modal--pagi c-modal__pagi"></div>
            </div>




          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="flex justify-between">


    <?php get_template_part('includes/header'); ?>

    <main class="l-main">

      <div class="c-heading inview">
        <h1 class="c-heading__main inview js-scroll--fadeUp">
          <span class="-en">Graphic</span>
          <span class="-ja">バナー、名刺、チラシ等の制作物一覧です。</span>
        </h1>
      </div>

      <section class="p-work">

        <div class="p-work__inner">

          <div class="container p-work__wrap">

            <div class="js-filtering c-filter justify-center">

              <ul class="filter c-filter__list">
                <li class="c-filter__item--tab is-active" data-filter='*'>
                  <span>全て</span>
                </li>
                <li class="c-filter__item--tab" data-filter='.banner'>
                  <span>バナー</span>
                </li>
                <li class="c-filter__item--tab" data-filter='.businessCard'>
                  <span>名刺</span>
                </li>
                <li class="c-filter__item--tab" data-filter='.isometric'>
                  <span>アイソメトリック</span>
                </li>
              </ul>

            </div>


            <ul class="row p-work__list js-gallery">

              <?php
            $args = array(
              'post_type' => 'gallery',
              // 'category_name' => 'portfolio',
              'posts_per_page' => 9
              );
              $the_query = new WP_Query( $args );
              if ( $the_query->have_posts() ) :
            ?>
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <?php get_template_part('includes/loop', 'gallery'); ?>
              <?php endwhile; ?>
              <?php endif; ?>

            </ul>


          </div>

        </div>
      </section>

      <?php get_template_part('includes/footer'); ?>
      <?php get_footer(); ?>


    </main>

  </div>



</body>

</html>
