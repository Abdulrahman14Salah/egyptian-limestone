<?php

/**
 * Register Custom Image Sizes for Resources Link Post
 */
add_image_size('client-image', 600, 400, true);



/**
 * Remove Flex in Container
 */
add_filter('astra_apply_flex_based_css', '__return_false');

/**
 * Add Svg To Media Library
 */

add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
    $filetype = wp_check_filetype($filename, $mimes);
    return [
        'ext' => $filetype['ext'],
        'type' => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
}, 10, 4);

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg()
{
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
}
add_action('admin_head', 'fix_svg');



/**
 * top bar 
 * @return bool|string
 */
add_action('astra_body_top', function () {
?>
    <div class="fixed top-0 left-0 right-0 z-[60] h-1">
        <div id="scroll-progress" class="h-full bg-secondary transition-[width] duration-100"></div>
    </div>

    <div class="bg-primary text-primary-foreground py-2 overflow-hidden">
        <div class="animate-marquee whitespace-nowrap flex gap-16"><span class="flex gap-16 text-xs md:text-sm font-body tracking-wide"><span>🏛️ Premium Egyptian Limestone — Direct from Quarry to Your Project</span><span>📦 Exporting to 40+ Countries Worldwide</span><span>💰 Request Bulk Pricing — Save Up to 50% vs European Stone</span><span>🚀 Fast Production: 2-3 Weeks for Standard Orders</span><span>✅ Custom Sizes, Finishes &amp; Packaging Available</span><span>📞 Contact Us: info@egyptian-limestone.com</span></span><span class="flex gap-16 text-xs md:text-sm font-body tracking-wide"><span>🏛️ Premium Egyptian Limestone — Direct from Quarry to Your Project</span><span>📦 Exporting to 40+ Countries Worldwide</span><span>💰 Request Bulk Pricing — Save Up to 50% vs European Stone</span><span>🚀 Fast Production: 2-3 Weeks for Standard Orders</span><span>✅ Custom Sizes, Finishes &amp; Packaging Available</span><span>📞 Contact Us: info@egyptian-limestone.com</span></span></div>
    </div>
<?php
});


/**
 * Preload LCP image on homepage for better performance
 */
function egyptian_limestone_preload_lcp()
{

    if (!is_front_page()) return;

    $hero = get_stylesheet_directory_uri() . '/frontend/assets/hero-quarry.jpg';

    echo '<link rel="preload" as="image" href="' . $hero . '" fetchpriority="high">';
}
add_action('wp_head', 'egyptian_limestone_preload_lcp', 1);

/*
 * Disable Contact Form 7 globally
 */
add_filter('wpcf7_load_css', '__return_false');
add_filter('wpcf7_load_js', '__return_false');


/*
 * Load CF7 only on specific pages
 */
function load_cf7_only_on_needed_pages()
{

    if (is_page(['contact', 'request-quote'])) {

        wpcf7_enqueue_scripts();
        wpcf7_enqueue_styles();
    }
}
add_action('wp_enqueue_scripts', 'load_cf7_only_on_needed_pages');


function remove_jquery_migrate($scripts)
{
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $scripts->registered['jquery']->deps =
            array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
    }
}
add_action('wp_default_scripts', 'remove_jquery_migrate');


add_filter('script_loader_tag', function ($tag, $handle) {

    if ($handle === 'astra-addon-js') {
        return str_replace('<script ', '<script defer ', $tag);
    }

    return $tag;
}, 10, 2);
