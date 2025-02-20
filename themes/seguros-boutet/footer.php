<?php wp_footer(); ?>
<div class="container mx-auto px-4 pb-10 pt-10 md:pt-20">
  <div class="grid grid-cols-12 gap-4 items-center">
    <div class="col-span-12 md:col-span-6">
      <?php if (has_custom_logo()): ?>
        <?php the_custom_logo(); ?>
      <?php endif; ?>
    </div>
    <div class="col-span-12 md:col-span-6 text-black font-bold font-lato text-lg md:text-2xl">
      <?php dynamic_sidebar('footer-text'); ?>
    </div>
  </div>
  <div class="grid grid-cols-4 gap-6 mt-5 md:mt-10">
    <div class="col-span-4 md:col-span-2 lg:col-span-1">
      <div class="text-back font-2xl font-bold font-lato">
        <?php dynamic_sidebar('footer-desc'); ?>
      </div>
    </div>
    <div class="col-span-4 md:col-span-2 lg:col-span-1 text-left md:text-right">
      <h3 class="font-bold font-lato text-xl text-black mb-5">Social Media</h3>
      <div class="text-blue-500 flex justify-start md:justify-end">
        <?php dynamic_sidebar('social-networks-1'); ?>
      </div>
    </div>
    <div class="col-span-4 md:col-span-2 lg:col-span-1 text-left md:text-right">
      <h3 class="font-bold font-lato text-xl text-black mb-5">Sitemap</h3>
      <?php dynamic_sidebar('footer-sitemap'); ?>
    </div>
    <div class="col-span-4 md:col-span-2 lg:col-span-1 text-left md:text-right">
      <h3 class="font-bold font-lato text-xl text-black mb-5">Contacto</h3>
      <div class="footer-contact">
        <?php dynamic_sidebar('footer-contact'); ?>
      </div>
    </div>
  </div>
</div>
<footer class="bg-blue-500 mt-4">
  <div class="container mx-auto px-4">
    <div class="flex flex-col md:flex-row gap-4 justify-between py-3 text-white font-lato">
      <?php dynamic_sidebar('footer'); ?>
    </div>
  </div>
</footer>
</body>

</html>