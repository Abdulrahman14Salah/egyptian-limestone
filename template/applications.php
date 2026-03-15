<?php /* Template Name: Applications */ ?>

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
                <p class="font-body text-foreground/70 text-center max-w-2xl mx-auto mb-12">Discover the versatile applications of Egyptian limestone in modern architecture and construction.</p>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="group bg-card rounded-lg overflow-hidden border border-border hover:shadow-lg transition-all duration-300">
                        <div class="overflow-hidden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/application-facade.jpg" alt="Building Facades" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy"></div>
                        <div class="p-5">
                            <h2 class="font-display text-lg font-semibold text-primary mb-2">Building Facades</h2>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed">Egyptian limestone is a premier choice for exterior building facades, providing timeless elegance that enhances commercial, institutional, and residential structures.</p>
                        </div>
                    </div>
                    <div class="group bg-card rounded-lg overflow-hidden border border-border hover:shadow-lg transition-all duration-300">
                        <div class="overflow-hidden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/application-flooring.jpg" alt="Interior Flooring" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy"></div>
                        <div class="p-5">
                            <h2 class="font-display text-lg font-semibold text-primary mb-2">Interior Flooring</h2>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed">Create stunning, durable flooring surfaces for high-traffic areas including hotel lobbies, office buildings, retail spaces, and luxury residences.</p>
                        </div>
                    </div>
                    <div class="group bg-card rounded-lg overflow-hidden border border-border hover:shadow-lg transition-all duration-300">
                        <div class="overflow-hidden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/application-wall.jpg" alt="Wall Cladding" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy"></div>
                        <div class="p-5">
                            <h2 class="font-display text-lg font-semibold text-primary mb-2">Wall Cladding</h2>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed">Interior and exterior wall cladding adds depth, texture, and warmth to any space with feature walls and accent panels.</p>
                        </div>
                    </div>
                    <div class="group bg-card rounded-lg overflow-hidden border border-border hover:shadow-lg transition-all duration-300">
                        <div class="overflow-hidden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/application-outdoor.jpg" alt="Outdoor Paving" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy"></div>
                        <div class="p-5">
                            <h2 class="font-display text-lg font-semibold text-primary mb-2">Outdoor Paving</h2>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed">Natural slip resistance and durability make it excellent for outdoor paving, pool surrounds, garden pathways, and terraces.</p>
                        </div>
                    </div>
                    <div class="group bg-card rounded-lg overflow-hidden border border-border hover:shadow-lg transition-all duration-300">
                        <div class="overflow-hidden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/application-hotel.jpg" alt="Hotels &amp; Commercial" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy"></div>
                        <div class="p-5">
                            <h2 class="font-display text-lg font-semibold text-primary mb-2">Hotels &amp; Commercial</h2>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed">Five-star hotels, resorts, shopping centers, and corporate headquarters specify Egyptian limestone for premium aesthetics at competitive prices.</p>
                        </div>
                    </div>
                    <div class="group bg-card rounded-lg overflow-hidden border border-border hover:shadow-lg transition-all duration-300">
                        <div class="overflow-hidden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/application-stairs.jpg" alt="Stairs &amp; Landscaping" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy"></div>
                        <div class="p-5">
                            <h2 class="font-display text-lg font-semibold text-primary mb-2">Stairs &amp; Landscaping</h2>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed">Egyptian limestone creates elegant staircases, garden features, and landscape elements that blend naturally with outdoor environments.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        set_query_var('title', 'Need Limestone for Your Project?');
        set_query_var('desc', "Tell us about your application and we'll recommend the best stone type and finish.");

        get_template_part('/template/components/sections/cta');
        ?>
    </main>





</div><!-- #primary -->


<?php get_footer(); ?>