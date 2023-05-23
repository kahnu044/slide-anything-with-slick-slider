<?php

/**
 * Plugin Name: Slide Anything With Slick Slider
 * Plugin URI: https://github.com/kahnu044/slide-anything-with-slick-slider
 * Description: It allows you to easily make a div to sliders using the popular Slick Slider library.
 * Version: 1.0.0
 * Author: Kahnu Charan Swain
 * Author URI: https://github.com/kahnu044/
 */


//disallow direct access of the file
defined('ABSPATH') || die("Permission Denied");

define('SAWSS_PLUGIN_URL', plugin_dir_url(__FILE__));
define('SAWSS_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('SAWSS_PLUGIN_VERSION', '1.0.0');

/**
 * Enqueues necessary scripts and styles for Slide Anything with Slick Slider plugin.
 *
 * This function is hooked to the 'wp_enqueue_scripts' action.
 * It enqueues the Slick Slider CSS and JS files, as well as the custom main script.
 *
 * @since 1.0.0
 */

add_action('wp_enqueue_scripts', 'sawss_enqueue_scripts');

// Enqueue necessary scripts and styles
function sawss_enqueue_scripts()
{
    // Enqueue Slick Slider CSS
    wp_enqueue_style('slick-slider-min', SAWSS_PLUGIN_URL . 'assets/css/slick.min.css', array(), SAWSS_PLUGIN_VERSION);
    wp_enqueue_style('slick-slider-theme-css', SAWSS_PLUGIN_URL . 'assets/css/slick-theme.css', array(), SAWSS_PLUGIN_VERSION);

    // Enqueue Slick Slider JS
    wp_enqueue_script('slick-slider-js', SAWSS_PLUGIN_URL . 'assets/js/slick.min.js', array('jquery'), SAWSS_PLUGIN_VERSION, true);

    // Enqueue custom main script
    wp_enqueue_script('slick-slider-main', SAWSS_PLUGIN_URL . 'assets/js/sawss-slider-main.js', array('jquery'), SAWSS_PLUGIN_VERSION);
}
