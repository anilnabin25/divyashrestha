<?php

// this code is for loading stylesheet
function load_css()
{
    wp_register_style('vendor_css', get_template_directory_uri() . '/css/vendor.css', array(), false, 'all');
    wp_enqueue_style('vendor_css');
    wp_register_style('setting_css', get_template_directory_uri() . '/css/settings.css', array(), false, 'all');
    wp_enqueue_style('setting_css');
    wp_register_style('custom_css', get_template_directory_uri() . '/css/custom.css', array(), false, 'all');
    wp_enqueue_style('custom_css');
    wp_register_style('justin_red', get_template_directory_uri() . '/css/justin-red.css', array(), false, 'all');
    wp_enqueue_style('justin_red');
}
add_action('wp_enqueue_scripts', 'load_css');

// this code is for loading javascript
function load_js()
{
    wp_register_script('email_decoder_js', get_template_directory_uri() . '/js/email-decode.min.js', array(), false, true);
    wp_enqueue_script('email_decoder_js');
    wp_register_script('vendor_js', get_template_directory_uri() . '/js/vendor.js', array(), false, true);
    wp_enqueue_script('vendor_js');
    wp_register_script('particles_js', get_template_directory_uri() . '/js/particles.min.js', array(), false, true);
    wp_enqueue_script('particles_js');
    wp_register_script('particles_config_js', get_template_directory_uri() . '/js/particlesjs-config-4.js', array(), false, true);
    wp_enqueue_script('particles_config_js');
    wp_register_script('custom_js', get_template_directory_uri() . '/js/custom.js', array(), false, true);
    wp_enqueue_script('custom_js');
}
add_action('wp_enqueue_scripts', 'load_js');

// theme options
add_theme_support('menus');

// register menus
register_nav_menus(
    array(
        'top_menu' => 'Top Menu',
        'mobile_menu' => 'Mobile Menu',
    )
);
