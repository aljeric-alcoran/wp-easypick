   <footer class="w-full overflow-hidden bg-[#323333] text-white">
      <div class="m-auto py-[5vh] px-[10vh] grid grid-cols-4 max-w-[1220px]">
         <div>
            <img class="h-24 mb-2" src="<?php echo get_theme_file_uri('/assets/images/logo.svg') ?>" alt="Easypick logo" />
            <ul class="flex flex-col gap-4 p-0 list-none uppercase text-sm">
               <li>Klostergata 6, 1532 MOSS</li>
            </ul>
            <div class="flex gap-3 mt-4">
               <a href="https://www.facebook.com/goeasypick" target="_blank">
                  <img class="h-8" src="<?php echo get_theme_file_uri('/assets/images/fb-icon.svg') ?>" alt="Follow Easypick on Facebook" />
               </a>
               <a href="https://www.youtube.com/channel/UC8I8fZz7Vzld48V5W-elrPg" target="_blank">
                  <img class="h-8" src="<?php echo get_theme_file_uri('/assets/images/yt-icon.svg') ?>" alt="Follow Easypick on YouTube" />
               </a>
            </div>
         </div>

         <div>
            <p class="uppercase text-lg font-medium">Our Service</p>
            <ul class="flex flex-col gap-3 p-0 list-none uppercase text-sm mt-4">
               <li><a id="howitwork" href="#">How it works</a></li>
               <li><a id="easypickapp" href="#">The Easypick app</a></li>
               <li><a id="pricing" href="<?php echo site_url('/pricing') ?>">Pricing</a></li>
            </ul>
         </div>
         
         <div>
            <p class="uppercase text-lg font-medium">Office Hours</p>
            <div class="grid grid-cols-1 gap-4 mt-4">
               <div class="uppercase text-sm">
                  <p id="day">Monday - Friday</p>
                  <p id="time" style="color: #C1BBA0;">09:00 - 15:00</p>
               </div>
               <div class="uppercase text-sm">
                  <p id="day">Saturday - Sunday</p>
                  <p id="time" style="color: #C1BBA0;">CLOSED</p>
               </div>
            </div>
         </div>

         <div>
            <p class="uppercase text-lg font-medium">Phone Support</p>
            <div class="text-base pr-3 mt-4">
               <div class="flex items-center gap-1" style="color: #C1BBA0;">
                  <img src="<?php echo get_theme_file_uri('/assets/images/phone_icon.svg') ?>" width="20"/>
                  <span>+47 23 65 33 01</span>
               </div>
               <a href="mailto:sales@easypick.no" class="flex items-center gap-2" style="color: #F37C20;">
                  <img src="<?php echo get_theme_file_uri('/assets/images/email_icon.svg') ?>" width="20"/>
                  support@easypick.no
               </a>
               <p class="mt-3 text-sm" style="color: #C1BBA0;">24/7 phone support. <br>Call us for inquiries.</p>
            </div>
         </div>
      </div>

      <div class="py-[3vh] px-[10vh] border-t-[1px] border-footer-vl">
         <div class="m-auto flex gap-3 justify-between items-center max-w-[1220px]">
            <div class="flex gap-2">
               <a href="https://apps.apple.com/us/app/easypick/id1215465630" target="_blank" style="padding:0">
                  <img src="<?php echo get_theme_file_uri('/assets/images/appstore-badge.svg') ?>" class="img-src" alt="Download on the App Store" style="height: 35px;" />
               </a>
               <a href="https://play.google.com/store/apps/details?id=com.easypick.main" target="_blank">
                  <img src="<?php echo get_theme_file_uri('/assets/images/googleplay-badge.svg') ?>" class="img-src" alt="Get it on Google Play" style="height: 35px;" />
               </a>
            </div>

            <div class="flex gap-3 uppercase text-sm" style="color: #C1BBA0;">
               <a href="https://www.easypick.no/privacy" target="_blank">Privacy Policy </a>
               <span>|</span>
               <a href="https://www.easypick.no/tos" target="_blank">Terms of Service</a>
            </div>

            <div class="flex gap-5 uppercase text-sm" style="color: #C1BBA0;">
               <div>&copy; <span id="year">2022</span> Easypick</div>
               <div class="text-white flex gap-2">
                  Back To Top 
                  <img src="<?php echo get_theme_file_uri('/assets/images/arrow_up.svg') ?>" class="mb-[1px]" width="14"/>
               </div>
            </div>
         </div>
      </div>
   </footer>

   <?php wp_footer() ?>
   </body>
</html>