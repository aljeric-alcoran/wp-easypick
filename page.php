<?php 
   custom_get_header();

   while(have_posts()) {
      the_post(); ?>
      <?php the_content() ?>
   <?php }
   custom_get_footer();
?>