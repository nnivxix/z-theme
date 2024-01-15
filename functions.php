<?php

function cg_your_theme_scripts()
{
    // https://codingoblin.com/install-tailwindcss-in-wordpress-theme/
    wp_enqueue_style('output-tailwind', get_template_directory_uri() . '/dist/output.css', array());
}
add_action('wp_enqueue_scripts', 'cg_your_theme_scripts');
