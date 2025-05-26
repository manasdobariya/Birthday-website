<footer class="bg-white border-t mt-10">
  <div class="max-w-6xl mx-auto px-4 py-8 text-center text-gray-600 text-sm">

    <?php
    wp_nav_menu([
        'theme_location' => 'footer-menu',
        'container' => false,
        'menu_class' => 'flex justify-center space-x-6 mb-4', // 🟢 Horizontal layout
        'fallback_cb' => false,
    ]);
    ?>

    <p class="mt-4 text-gray-500">
      &copy; <?php echo date('Y'); ?> Famous Birthdays Clone. All rights reserved.
    </p>
    
  </div>
</footer>



<?php wp_footer(); ?>
</body>
</html>
hero