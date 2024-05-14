<!DOCTYPE html>
<html>
   <head>
      <?php wp_head()?>
   </head>
   <body>
   <div class="bg-stone-800 text-sm text-white p-5">
      <div class="flex justify-center items-center relative z-30">
         <nav class="main-navigation">
            <div>
               <a id="main-logo" href="<?php echo site_url() ?>">
                  <img id="header-logo" class="-mt-2" src="<?php echo get_theme_file_uri('/assets/images/logo_inline.png')?>" alt="Easypick Logo" style="height:2rem;" />
               </a>
            </div>
            
            <div class="flex items-center justify-center gap-10">
               <div class="main_navigation-menu">
                  <?php 
                     wp_nav_menu(array(
                        'theme_location' => 'headerMenuLocation'
                     ))
                  ?>
               </div>
               <div class="nav_button-container capitalize">
                  <div class="nav_login-btn">Login</div>
                  <div class="nav_signup-btn">Sign Up</div>
               </div>
            </div>
         </nav>
      </div>
   </div>