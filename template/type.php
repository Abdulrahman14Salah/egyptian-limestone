<?php /* Template Name: Type */ ?>

<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<div>

    <?php get_template_part('/template/components/headers/page/style', '1'); ?>

    <main>
        <section class="section-padding bg-background">
            <div class="fade-in-section ast-container visible">
                <p class="font-body text-foreground/70 text-center max-w-2xl mx-auto mb-12">Explore our complete range of premium Egyptian limestone varieties. Each type offers unique characteristics perfect for different architectural applications.</p>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-card rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-border group">
                        <div class="overflow-hidden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/sinai-pearl.jpg" alt="Sinai Pearl limestone slab" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy"></div>
                        <div class="p-5">
                            <h2 class="font-display text-lg font-semibold text-primary mb-2">Sinai Pearl Limestone</h2>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed mb-4">Light cream to pearl-white coloring with distinctive fossilized shell inclusions. Ideal for luxury hotel lobbies, high-end residential flooring, and premium commercial facades.</p><a class="font-body text-sm font-semibold text-secondary hover:text-primary transition-colors" href="/request-quote">Request Quote →</a>
                        </div>
                    </div>
                    <div class="bg-card rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-border group">
                        <div class="overflow-hidden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/sunny-limestone.jpg" alt="Sunny limestone slab" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy"></div>
                        <div class="p-5">
                            <h2 class="font-display text-lg font-semibold text-primary mb-2">Sunny Limestone</h2>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed mb-4">Warm golden-beige tones quarried in the Menia region. Popular for exterior cladding, outdoor paving, and building facades in Mediterranean and tropical climates.</p><a class="font-body text-sm font-semibold text-secondary hover:text-primary transition-colors" href="/request-quote">Request Quote →</a>
                        </div>
                    </div>
                    <div class="bg-card rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-border group">
                        <div class="overflow-hidden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/galala-limestone.jpg" alt="Galala Classic limestone slab" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy"></div>
                        <div class="p-5">
                            <h2 class="font-display text-lg font-semibold text-primary mb-2">Galala Classic Limestone</h2>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed mb-4">Refined cream appearance with elegant veining. Often compared to marble. Widely specified for high-profile commercial projects and luxury residences.</p><a class="font-body text-sm font-semibold text-secondary hover:text-primary transition-colors" href="/request-quote">Request Quote →</a>
                        </div>
                    </div>
                    <div class="bg-card rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-border group">
                        <div class="overflow-hidden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/galala-limestone.jpg" alt="Galala Extra limestone slab" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy"></div>
                        <div class="p-5">
                            <h2 class="font-display text-lg font-semibold text-primary mb-2">Galala Extra Limestone</h2>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed mb-4">Beige variant of Galala with richer tonal depth and more pronounced veining patterns. Excellent for feature walls and statement flooring.</p><a class="font-body text-sm font-semibold text-secondary hover:text-primary transition-colors" href="/request-quote">Request Quote →</a>
                        </div>
                    </div>
                    <div class="bg-card rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-border group">
                        <div class="overflow-hidden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/samaha-limestone.jpg" alt="Samaha limestone slab" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy"></div>
                        <div class="p-5">
                            <h2 class="font-display text-lg font-semibold text-primary mb-2">Samaha Limestone</h2>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed mb-4">Rich brown and dark beige tones with striking natural patterns. Perfect for creating dramatic contrast in contemporary and traditional settings.</p><a class="font-body text-sm font-semibold text-secondary hover:text-primary transition-colors" href="/request-quote">Request Quote →</a>
                        </div>
                    </div>
                    <div class="bg-card rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-border group">
                        <div class="overflow-hidden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/sunny-limestone.jpg" alt="Triesta limestone slab" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy"></div>
                        <div class="p-5">
                            <h2 class="font-display text-lg font-semibold text-primary mb-2">Triesta Limestone</h2>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed mb-4">A warm beige limestone with consistent color and minimal veining. Excellent for large-scale commercial projects requiring uniform appearance.</p><a class="font-body text-sm font-semibold text-secondary hover:text-primary transition-colors" href="/request-quote">Request Quote →</a>
                        </div>
                    </div>
                    <div class="bg-card rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-border group">
                        <div class="overflow-hidden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/sinai-pearl.jpg" alt="Golden Sinai limestone slab" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy"></div>
                        <div class="p-5">
                            <h2 class="font-display text-lg font-semibold text-primary mb-2">Golden Sinai Limestone</h2>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed mb-4">A golden-toned variant from the Sinai Peninsula. Brings warmth and character to both interior and exterior applications.</p><a class="font-body text-sm font-semibold text-secondary hover:text-primary transition-colors" href="/request-quote">Request Quote →</a>
                        </div>
                    </div>
                    <div class="bg-card rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-border group">
                        <div class="overflow-hidden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/samaha-limestone.jpg" alt="Catrina limestone slab" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy"></div>
                        <div class="p-5">
                            <h2 class="font-display text-lg font-semibold text-primary mb-2">Catrina Limestone</h2>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed mb-4">Medium beige to brown tones with unique fossil patterns. Popular for Mediterranean-style architecture and heritage projects.</p><a class="font-body text-sm font-semibold text-secondary hover:text-primary transition-colors" href="/request-quote">Request Quote →</a>
                        </div>
                    </div>
                    <div class="bg-card rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-border group">
                        <div class="overflow-hidden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/samaha-limestone.jpg" alt="Milly Brown limestone slab" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy"></div>
                        <div class="p-5">
                            <h2 class="font-display text-lg font-semibold text-primary mb-2">Milly Brown Limestone</h2>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed mb-4">Rich chocolate-brown limestone ideal for accent walls, feature panels, and creating bold contrast in luxury interiors.</p><a class="font-body text-sm font-semibold text-secondary hover:text-primary transition-colors" href="/request-quote">Request Quote →</a>
                        </div>
                    </div>
                    <div class="bg-card rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-border group">
                        <div class="overflow-hidden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/samaha-limestone.jpg" alt="Emperador limestone slab" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy"></div>
                        <div class="p-5">
                            <h2 class="font-display text-lg font-semibold text-primary mb-2">Emperador Limestone</h2>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed mb-4">Deep brown tones with dramatic veining patterns. A premium choice for high-end commercial lobbies and upscale residential projects.</p><a class="font-body text-sm font-semibold text-secondary hover:text-primary transition-colors" href="/request-quote">Request Quote →</a>
                        </div>
                    </div>
                    <div class="bg-card rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-border group">
                        <div class="overflow-hidden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/galala-limestone.jpg" alt="Crema Nova limestone slab" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy"></div>
                        <div class="p-5">
                            <h2 class="font-display text-lg font-semibold text-primary mb-2">Crema Nova Limestone</h2>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed mb-4">Soft cream with subtle warm undertones. Versatile stone suitable for both contemporary minimalist and classic architectural designs.</p><a class="font-body text-sm font-semibold text-secondary hover:text-primary transition-colors" href="/request-quote">Request Quote →</a>
                        </div>
                    </div>
                    <div class="bg-card rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-border group">
                        <div class="overflow-hidden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/sunny-limestone.jpg" alt="Felfel limestone slab" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy"></div>
                        <div class="p-5">
                            <h2 class="font-display text-lg font-semibold text-primary mb-2">Felfel Limestone</h2>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed mb-4">Distinctive speckled pattern with warm beige base. Adds visual interest and texture to flooring, wall cladding, and outdoor applications.</p><a class="font-body text-sm font-semibold text-secondary hover:text-primary transition-colors" href="/request-quote">Request Quote →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        set_query_var('title', 'Ready to Source Premium Egyptian Limestone?');
        set_query_var('desc', 'Get competitive pricing, custom sizes, and reliable worldwide delivery. Request your free quote today.');

        get_template_part('/template/components/sections/cta');
        ?>
    </main>




</div><!-- #primary -->


<?php get_footer(); ?>