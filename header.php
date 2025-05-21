<!doctype html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> 
</head>

<body>




<header class="bg-gray-100 border-b border-gray-300 px-4 py-2">
  <div class="flex items-center justify-between max-w-7xl mx-auto">

    <!-- Logo -->

    <div class="logo ">
    <div class="w-40 h-auto"> <!-- Tailwind classes for small size -->
        <?php the_custom_logo(); ?>
    </div>
</div>


    <!-- Search Bar -->
    <div class="flex-grow mx-6">
      <div class="relative">
        <input
          type="text"
          placeholder="Search"
          class="w-full rounded-full pl-10 pr-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-pink-500"
        />
        <svg
          class="absolute left-3 top-2.5 w-5 h-5 text-gray-500"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          viewBox="0 0 24 24"
        >
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m1.85-5.65a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
      </div>
    </div>

    <!-- Navigation Menu -->
    <nav>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'flex space-x-6 list-none',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        
      ));
      ?>
    </nav>

  </div>
</header>


</body>
</html>
