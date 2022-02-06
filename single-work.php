<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header'); ?>


  <main class="l-main">


    <section class="single">
      <div class="single__inner">

        <article class="single__post">

          <div class="single__head">

            <figure class="c-picture__img single__img--top">
              <picture class="c-picture__img--inner">
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full'); ?>
                <?php else : ?>
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/noimage.jpg" alt="noimage">
                <?php endif; ?>
              </picture>
            </figure>

            <h1 class="single__heading">
              <strong>
                <?php the_title(); ?>
              </strong>
            </h1>

            <div class="single__meta">

              <p class="-date">
                投稿日：<?php the_time('Y年m月d日');?>
              </p>

            </div>

            <div class="single__gallery">
              <figure>
                <?php
              $pic = get_field('pic');
              $pic_url = $pic['url'];
              ?>

                <img src="<?php echo $pic_url; ?>" alt="">
              </figure>
            </div>



            <div class="single__detail">

              <dl class="single__list--detail">
                <dt>開発環境</dt>
                <dd>
                  <?php echo get_post_meta($post->ID, 'develop', true); ?>
                </dd>
              </dl>

              <dl class="single__list--detail">
                <dt>種別</dt>
                <dd>
                  <?php echo get_post_meta($post->ID, 'type', true); ?>
                </dd>
              </dl>

              <dl class="single__list--detail">
                <dt>仕様</dt>
                <dd>
                  <?php echo get_post_meta($post->ID, 'spec', true); ?>
                </dd>
              </dl>
              <dl class="single__list--detail">
                <dt>デザイン</dt>
                <dd>
                  <?php echo get_post_meta($post->ID, 'design', true); ?>
                </dd>
              </dl>
              <dl class="single__list--detail">
                <dt>ブラウザ</dt>
                <dd>
                  <?php echo get_post_meta($post->ID, 'browser', true); ?>
                </dd>
              </dl>
              <dl class="single__list--detail">
                <dt>制作期間</dt>
                <dd>
                  <?php echo get_post_meta($post->ID, 'period', true); ?>
                </dd>
              </dl>
              <dl class="single__list--detail">
                <dt>GITHUB</dt>
                <dd>
                  <a href="<?php echo get_post_meta($post->ID, 'github', true); ?>">リンク</a>
                </dd>
              </dl>
            </div>

            <p class="single__btn--demoLink">
              <a href="<?php echo get_post_meta($post->ID, 'pageLink', true); ?>">
                <span>デモページ</span>
              </a>
            </p>


          </div>
          <div class="single__body">
            <div class="single__entry">


              <?php the_content(); ?>


            </div>
          </div>

          <div class="row items-center">

            <div class="col-3__sm">
              <p class="single__btn">
              <?php next_post_link('%link','次のページ') ?>

              </p>
            </div>

            <div class="col-6__sm">
              <p class="single__btn">
                <a href="/work">制作物一覧</a>
              </p>
            </div>

            <div class="col-3__sm">

              <p class="single__btn">
              <?php previous_post_link('%link','前のページ') ?>

              </p>
            </div>


          </div>

        </article>
      </div>
    </section>

    <?php get_template_part('includes/footer'); ?>
  <?php get_footer(); ?>

  </main>




</body>

</html>
