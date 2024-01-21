<?php

function theme_style()
{
    // https://codingoblin.com/install-tailwindcss-in-wordpress-theme/
    wp_enqueue_style('output-tailwind', get_template_directory_uri() . '/dist/output.css', array(), null);
    // wp_enqueue_style('z-theme-style', get_template_directory_uri() . "/style.css", array("z-theme-main-css"), "all");
}

function theme_script()
{
    wp_enqueue_script('wpa-main-js', get_theme_file_uri('src/script.js'), [], null, true);
}

function remove_file_version($src)
{
    return preg_replace("/\?ver=[0-9.]+/", "", $src);
}

// add_filter('style_loader_src', 'remove_file_version', 1000);
// add_filter('script_loader_src', 'remove_file_version', 10000);
add_action('wp_enqueue_scripts', 'theme_script');
add_action('wp_enqueue_scripts', 'theme_style');
