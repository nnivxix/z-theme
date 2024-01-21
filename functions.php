<?php

function my_theme_scripts()
{
    // https://codingoblin.com/install-tailwindcss-in-wordpress-theme/
    wp_enqueue_style('output-tailwind', get_template_directory_uri() . '/dist/output.css', array());
    wp_enqueue_style('z-theme-style', get_template_directory_uri() . "/style.css", array("z-theme-main-css"), "all");
}
function remove_file_version($src)
{
    return preg_replace("/\?ver=[0-9.]+/", "", $src);
}

add_filter('style_loader_src', 'remove_file_version', 100);
add_filter('script_loader_src', 'remove_file_version', 100);
add_action('wp_enqueue_scripts', 'my_theme_scripts');
