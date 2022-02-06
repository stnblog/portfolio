<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>


<div class="flex justify-between">

  <?php get_template_part('includes/header'); ?>

  <main class="l-main">



    <section class="p-work">

    <div class="c-heading inview">
      <h1 class="c-heading__main inview js-scroll--fadeUp">
        <span class="-en">Coading</span>
        <span class="-ja">WEBサイトのデザイン、コーディング制作物一覧です。</span>
      </h1>
    </div>

      <div class="p-work__inner">

        <div class="container p-work__wrap">


          <div class="js-filtering c-filter justify-center">
            <ul class="filter c-filter__list">
              <li class="c-filter__item--tab is-active" data-filter='*'>
                <span>全て</span>
              </li>
              <li class="c-filter__item--tab" data-filter='.products'>
                <span>プロダクト</span>
              </li>
              <li class="c-filter__item--tab" data-filter='.marketing'>
                <span>マーケティング</span>
              </li>
            </ul>

          </div>


          <ul class="row p-work__list js-gallery">


            <?php
            $args = array(
              'post_type' => 'work',
              // 'category_name' => 'portfolio',
              'posts_per_page' => 9
              );
              $the_query = new WP_Query( $args );
              if ( $the_query->have_posts() ) :
            ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php get_template_part('includes/loop', 'work'); ?>
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
