<div class="swiper-slide c-slider__slide index__slide">
  <a href="<?php the_permalink(); ?>" class="inview">
    <figure class="c-picture__img index__img">
      <picture class="c-picture__img--inner">
        <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('full'); ?>
        <?php else : ?>
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/noimage.jpg" alt="noimage">
        <?php endif; ?>
      </picture>
    </figure>
  </a>
  <h3 class="c-meta__heading">
  <?php the_title(); ?>
  </h3>
  <div class="c-meta">
    <p class="-tag">
    <?php
    $term = get_the_terms($post->ID,'gall');
      echo $term[0]->name;
  ?>
    </p>
    <p class="-date"><?php the_time('Y.m.d') ?></p>
  </div>


</div>
