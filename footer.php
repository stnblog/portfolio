<script>
  var userAgent = window.navigator.userAgent.toLowerCase();

  if (userAgent.indexOf('msie') != -1 || userAgent.indexOf('trident') != -1) {
    window.location.href('https://www.google.com/?hl=ja')
  }
</script>

<!-- vendors -->
<script src="<?php echo get_template_directory_uri(); ?>/dist/assets/scripts/vendors/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/dist/assets/scripts/vendors/isotope.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/dist/assets/scripts/vendors/jquery.matchHeight-min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/dist/assets/scripts/vendors/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/dist/assets/scripts/swiper.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/dist/assets/scripts/main.js"></script>
<?php wp_footer(); ?>
