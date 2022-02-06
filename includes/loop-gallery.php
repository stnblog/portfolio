<li class="p-work__item col-6__sm col-4__md col-3__lg <?php
    $term = get_the_terms($post->ID,'gall');
      echo $term[0]->name;
  ?> js-filter-items js-modal-open">
  <div class="">
  <div class="c-meta">
        <p class="-tag">
          <?php
    $term = get_the_terms($post->ID,'gall');
      echo $term[0]->name;
  ?>
        </p>
        <p class="-date"><?php the_time('Y.m.d') ?></p>
      </div>
    <figure class="c-picture__img p-work__img">
      <picture class="c-picture__img--inner">
        <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('full'); ?>
        <?php else : ?>
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/404.jpg" alt="noimage">
        <?php endif; ?>
      </picture>
      <div class="p-gallery__btn--modal">
        <svg>
          <use xlink:href="<?php echo get_template_directory_uri() ?>/dist/assets/images/sprite.svg#icon-zoom-in"></use>
        </svg>
      </div>
    </figure>
    <h3 class="c-meta__heading p-work__heading">
        <?php the_title(); ?>
      </h3>
  </div>
</li>
