<?php

function srv_theme_styles() {
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('revolution_slider', get_template_directory_uri() . '/css/revolution-slider.css');
    wp_enqueue_style('owl_css', get_template_directory_uri() . '/css/owl.css');
    wp_enqueue_style('main_css', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('responsive_css', get_template_directory_uri() . '/css/responsive.css');
}

add_action('wp_enqueue_scripts', 'srv_theme_styles');


function srv_theme_scripts()
{
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery'], true);
    wp_enqueue_script('revolution_js', get_template_directory_uri() . '/js/revolution.min.js', '', true);
    wp_enqueue_script('bxslider_js', get_template_directory_uri() . '/js/bxslider.js', '', true);
    wp_enqueue_script('owl_js', get_template_directory_uri() . '/js/owl.carousel.min.js', '', true);
    wp_enqueue_script('fancybox_js', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', '', true);
    wp_enqueue_script('wow_js', get_template_directory_uri() . '/js/wow.js', '', true);
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/script.js', '', true);
}

add_action('wp_enqueue_scripts', 'srv_theme_scripts');
