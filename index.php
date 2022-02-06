<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header'); ?>

  <main class="l-main">

    <div class="c-heading inview">
      <h1 class="c-heading__main inview js-scroll--fadeUp">
        <span class="-en">PORTFOLIO</span>
        <span class="-ja">制作物一覧</span>
      </h1>
    </div>

    <section class="p-work">

      <div class="p-work__inner">

        <div class="container p-work__wrap">


          <div class="js-filtering c-filter justify-end">

            <p class="c-filter__heading">CATEGORY</p>

            <ul class="filter c-filter__list text-right">
              <li class="c-filter__item--tab is-active" data-filter='*'>
                <span>All</span>
              </li>
              <li class="c-filter__item--tab" data-filter='.web-site'>
                <span>web site</span>
              </li>
              <li class="c-filter__item--tab" data-filter='.web-app'>
                <span>web app</span>
              </li>
            </ul>

          </div>


          <ul class="row p-work__list js-gallery">


            <?php
            $args = array(
              'post_type' => 'post',
              'category_name' => 'portfolio',
              'posts_per_page' => 8
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
  </main>




  <?php get_template_part('includes/footer'); ?>
  <?php get_footer(); ?>
</body>

</html>
