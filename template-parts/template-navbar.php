<navbar class="flex max-w-7xl mx-auto justify-between my-2 px-3 font-serif border-b-2 pb-1">
  <h1 class="text-2xl font-semibold"> <?php echo get_bloginfo('name'); ?> </h1>

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