<?php

/*update_option('siteurl', 'http://dentdepot.site');
update_option('home', 'http://dentdepot.site');*/

add_theme_support('post-thumbnails'); 

/**
 * custom logo support
 */
add_theme_support('custom-logo');

/**
 * widget support for blog sidebar
 */
function srv_create_widget($name, $id, $desc) 
{
    register_sidebar(array(
        'name' => __($name),
        'id' => $id,
        'description' => __($desc),
        'before_widget' => '<div class="widget latest-updates">',
        'after_widget' => '</div></div>',
        'before_title' => '<div class="sec-title"><h3>',
        'after_title' => '</h3></div><div class="update-box">',
    ));
}

srv_create_widget('Blog Sidebar', 'blog', 'display widgets in the blog sidebar');


/**
 * widget support for footer
 */
function srv_create_footer_widget($name, $id, $desc)
{
    register_sidebar(array(
        'name' => __($name),
        'id' => $id,
        'description' => __($desc),
        'before_widget' => '<div class="col-md-3 col-sm-12 col-xs-12"><div class="footer-widget support-widget">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}

srv_create_footer_widget('Footer Area One', 'footer1', 'display a widget in the footer region');
srv_create_footer_widget('Footer Area Two', 'footer2', 'display a widget in the footer region');
srv_create_footer_widget('Footer Area Three', 'footer3', 'display a widget in the footer region');

/**
 * support for dynamic menu
 */
add_theme_support('menus');

function register_my_menus()
{
    register_nav_menus(
        [
            'header-menu' => __('Header Menu'),
            'extra-menu' => __('Extra Menu')
        ]
    );
}
add_action('init', 'register_my_menus');

/**
 * include styles & scripts
 */
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
    wp_enqueue_script('validate_js', get_template_directory_uri() . '/js/validate.js', '', true);
    wp_enqueue_script('wow_js', get_template_directory_uri() . '/js/wow.js', '', true);
    wp_enqueue_script('gmap_api', 'http://maps.google.com/maps/api/js?key=AIzaSyBkCZecKp8Ab7ah-Un548cU9bHGqAoqe-g', '', true);
    wp_enqueue_script('googlemaps', get_template_directory_uri() . '/js/googlemaps.js', '', true);
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/script.js', '', true);
}

add_action('wp_enqueue_scripts', 'srv_theme_scripts');
