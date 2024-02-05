<navbar class="flex max-w-7xl mx-auto justify-between items-center my-2 px-3 font-serif border-b-2 pb-1 relative">
  <a href="<?php echo home_url() ?>">
    <h1 class="text-2xl font-semibold"> <?php echo get_bloginfo('name'); ?> </h1>
  </a>
  <button id="toggle-menu" class="p-3 block md:hidden ">
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
    </svg>
  </button>
  <?php
  wp_nav_menu(
    array(
      'menu' => 'primary',
      'menu_class' => 'menu-mobile',
      'theme_location' => 'primary',
      'menu_id' => 'menu-mobile',
      'container' => 'div',
      'items_wrap' => '<ul id="" class="flex text-sm-center text-md-left">%3$s</ul>',
      // 'items_wrap'           => '<ul style="display:flex;"  class="nav your_custom_class">%3$s</ul>',
    )
  )
  ?>

  <?php
  wp_nav_menu(
    array(
      'menu' => 'primary',
      'menu_class' => 'menu',
      'theme_location' => 'primary',
      'container' => 'div',
      'items_wrap' => '<ul id="" class="flex text-sm-center text-md-left">%3$s</ul>',
      // 'items_wrap'           => '<ul style="display:flex;"  class="nav your_custom_class">%3$s</ul>',
    )
  )
  ?>


</navbar>