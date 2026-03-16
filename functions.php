<?php

/**
 * ArqamWeb Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ArqamWeb
 * @since 1.0.1
 */

/**
 * Define Constants
 */
define('CHILD_THEME_ARQAMWEB_VERSION', '1.1.4');

/**
 * Build cache-busting version from file modification date.
 *
 * @param string $relative_path Relative path from the child theme root.
 * @return string
 */
function egyptian_limestone_asset_version($relative_path)
{
    $absolute_path = get_stylesheet_directory() . '/' . ltrim($relative_path, '/');

    if (file_exists($absolute_path)) {
        return (string) filemtime($absolute_path);
    }

    return CHILD_THEME_ARQAMWEB_VERSION;
}

/**
 * Enqueue styles
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

    wp_enqueue_style(
        'aos-css',
        get_stylesheet_directory_uri() . '/frontend/public/css/aos-css.min.css',
        ['astra-theme-css'],
        egyptian_limestone_asset_version('frontend/public/css/aos-css.min.css'),
        'all'
    );

    wp_enqueue_style(
        'blaze-slider-css',
        get_stylesheet_directory_uri() . '/frontend/public/css/blaze.css',
        ['astra-theme-css'],
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
 * Enqueue scripts.
 */
function my_custom_scripts()
{
    wp_enqueue_script(
        'blaze-slider-js',
        get_stylesheet_directory_uri() . '/frontend/public/js/blaze-slider.min.js',
        [],
        egyptian_limestone_asset_version('frontend/public/js/blaze-slider.min.js'),
        [
            'strategy' => 'defer',
            'in_footer' => false,
        ]
    );

    wp_enqueue_script(
        'aos-js',
        get_stylesheet_directory_uri() . '/frontend/public/js/aos.js',
        [],
        egyptian_limestone_asset_version('frontend/public/js/aos.js'),
        [
            'strategy' => 'defer',
            'in_footer' => false,
        ]
    );

    wp_enqueue_script(
        'flowbite-js',
        get_stylesheet_directory_uri() . '/frontend/public/js/flowbite.min.js',
        [],
        egyptian_limestone_asset_version('frontend/public/js/flowbite.min.js'),
        [
            'strategy' => 'defer',
            'in_footer' => false,
        ]
    );

    wp_enqueue_script(
        'main-js',
        get_stylesheet_directory_uri() . '/frontend/public/js/main.js',
        [],
        egyptian_limestone_asset_version('frontend/public/js/main.js'),
        [
            'strategy' => 'defer',
            'in_footer' => true,
        ]
    );

    wp_add_inline_script(
        'main-js',
        'document.addEventListener("DOMContentLoaded",function(){const progressBar=document.getElementById("scroll-progress");if(!progressBar){return;}let ticking=false;function updateProgress(){const scrollTop=document.documentElement.scrollTop;const scrollHeight=document.documentElement.scrollHeight-window.innerHeight;const percent=scrollHeight>0?(scrollTop/scrollHeight)*100:0;progressBar.style.width=percent+"%";ticking=false;}window.addEventListener("scroll",function(){if(!ticking){requestAnimationFrame(updateProgress);ticking=true;}});updateProgress();});',
        'after'
    );
}
add_action('wp_enqueue_scripts', 'my_custom_scripts');

require_once get_stylesheet_directory() . '/inc/features.php';
require_once get_stylesheet_directory() . '/inc/core/config.php';
require_once get_stylesheet_directory() . '/inc/updates/updater.php';

new MyTheme_GitHub_Updater();
