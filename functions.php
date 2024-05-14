<?php 
   function custom_get_header() {
      get_template_part( 'parts/header' );
   }

   function custom_get_footer() {
      get_template_part( 'parts/footer' );
   }

   function easypick_files() {
      wp_enqueue_style('tailwind-styles', get_stylesheet_uri());
      // wp_enqueue_style('header-styles', get_theme_file_uri('/css/header.css'));
      // wp_enqueue_style('app-styles', get_theme_file_uri('/css/app.css'));
      // wp_enqueue_style('skelet-styles', get_theme_file_uri('/css/skelet.css'));
      // wp_enqueue_style('skelet-min-styles', get_theme_file_uri('/css/skelet.min.css'));
   }

   add_action( 'wp_enqueue_scripts', 'easypick_files');

   function easypick_features() {
      add_theme_support('title-tag');
      register_nav_menu('headerMenuLocation', 'Navigation Menu');
   }

   add_action('after_setup_theme', 'easypick_features');
?>