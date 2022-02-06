<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<?php
    wp_enqueue_style('font-roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900');
    wp_enqueue_style('font-notoSans', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700;900');
    wp_enqueue_style('font-poppins', '//fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700');
    wp_enqueue_style('tailwind', '//unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/dist/assets/styles/vendors/swiper-bundle.min.css');
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/dist/assets/styles/main.css');
    wp_enqueue_script('jquery');
    wp_head();
  ?>
