<?php

/**
 * ArqamWeb Theme functions and definitions
 *
 * @package ArqamWeb
 * @since 1.0.1
 */

define('CHILD_THEME_ARQAMWEB_VERSION', '1.1.4');

function egyptian_limestone_asset_version($relative_path)
{
    $absolute_path = get_stylesheet_directory() . '/' . ltrim($relative_path, '/');
    if (file_exists($absolute_path)) {
        return (string) filemtime($absolute_path);
    }
    return CHILD_THEME_ARQAMWEB_VERSION;
}

/**
 * Enqueue styles — defer non-critical CSS via media trick
 */
function child_enqueue_styles()
{
    wp_enqueue_style(
        'arqamweb-theme-css',
        get_stylesheet_directory_uri() . '/style.css',
        ['astra-theme-css'],
        egyptian_limestone_asset_version('style.css'),
        'all'
    );

    // AOS CSS — only needed after page load, load async
    wp_enqueue_style(
        'aos-css',
        get_stylesheet_directory_uri() . '/frontend/public/css/aos-css.min.css',
        [],
        egyptian_limestone_asset_version('frontend/public/css/aos-css.min.css'),
        'all'
    );

    wp_enqueue_style(
        'blaze-slider-css',
        get_stylesheet_directory_uri() . '/frontend/public/css/blaze.css',
        [],
        egyptian_limestone_asset_version('frontend/public/css/blaze.css'),
        'all'
    );

    wp_enqueue_style(
        'style-css',
        get_stylesheet_directory_uri() . '/frontend/public/style.min.css',
        ['arqamweb-theme-css'],
        egyptian_limestone_asset_version('frontend/public/style.min.css'),
        'all'
    );
}
add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);

/**
 * Enqueue scripts — all deferred, jQuery removed where possible
 */
function my_custom_scripts()
{
    // Blaze slider — defer, in footer
    wp_enqueue_script(
        'blaze-slider-js',
        get_stylesheet_directory_uri() . '/frontend/public/js/blaze-slider.min.js',
        [],
        egyptian_limestone_asset_version('frontend/public/js/blaze-slider.min.js'),
        ['strategy' => 'defer', 'in_footer' => true]
    );

    // AOS — defer, in footer (animations don't need to block render)
    wp_enqueue_script(
        'aos-js',
        get_stylesheet_directory_uri() . '/frontend/public/js/aos.js',
        [],
        egyptian_limestone_asset_version('frontend/public/js/aos.js'),
        ['strategy' => 'defer', 'in_footer' => true]
    );

    // Flowbite — defer, in footer
    wp_enqueue_script(
        'flowbite-js',
        get_stylesheet_directory_uri() . '/frontend/public/js/flowbite.min.js',
        [],
        egyptian_limestone_asset_version('frontend/public/js/flowbite.min.js'),
        ['strategy' => 'defer', 'in_footer' => true]
    );

    // Main JS — defer, in footer
    wp_enqueue_script(
        'main-js',
        get_stylesheet_directory_uri() . '/frontend/public/js/main.js',
        [],
        egyptian_limestone_asset_version('frontend/public/js/main.js'),
        ['strategy' => 'defer', 'in_footer' => true]
    );

    wp_add_inline_script(
        'main-js',
        'document.addEventListener("DOMContentLoaded",function(){const progressBar=document.getElementById("scroll-progress");if(!progressBar){return;}let ticking=false;function updateProgress(){const scrollTop=document.documentElement.scrollTop;const scrollHeight=document.documentElement.scrollHeight-window.innerHeight;const percent=scrollHeight>0?(scrollTop/scrollHeight)*100:0;progressBar.style.width=percent+"%";ticking=false;}window.addEventListener("scroll",function(){if(!ticking){requestAnimationFrame(updateProgress);ticking=true;}});updateProgress();});',
        'after'
    );
}
add_action('wp_enqueue_scripts', 'my_custom_scripts');

/**
 * Defer non-critical CSS by converting render-blocking stylesheets
 * to use media="print" onload trick for anything below the fold.
 */
function egyptian_limestone_defer_css($tag, $handle, $href, $media)
{
    $defer_handles = ['aos-css', 'blaze-slider-css'];

    if (in_array($handle, $defer_handles, true)) {
        return '<link rel="preload" as="style" href="' . esc_url($href) . '" crossorigin onload="this.onload=null;this.rel=\'stylesheet\'">'
            . '<noscript><link rel="stylesheet" href="' . esc_url($href) . '"></noscript>' . "\n";
    }

    return $tag;
}
add_filter('style_loader_tag', 'egyptian_limestone_defer_css', 10, 4);

/**
 * Add meta description fallback for SEO (PageSpeed flagged missing meta description).
 * This only fires if no SEO plugin has already set one.
 */
function egyptian_limestone_meta_description()
{
    if (is_front_page()) {
        $desc = 'Premium Egyptian limestone supplier and exporter. Direct quarry supply of limestone tiles, slabs, and blocks to 40+ countries. Get competitive FOB &amp; CIF pricing.';
        echo '<meta name="description" content="' . esc_attr($desc) . '">' . "\n";
    }
}
// Only add if Rank Math / Yoast isn't active
if (!defined('RANK_MATH_VERSION') && !defined('WPSEO_VERSION')) {
    add_action('wp_head', 'egyptian_limestone_meta_description', 2);
}

require_once get_stylesheet_directory() . '/inc/features.php';
require_once get_stylesheet_directory() . '/inc/core/config.php';
require_once get_stylesheet_directory() . '/inc/updates/updater.php';

new MyTheme_GitHub_Updater();
