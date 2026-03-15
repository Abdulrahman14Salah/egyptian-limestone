<?php /* Template Name: Finishes */ ?>

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
        <section id="finishes" class="section-padding section-alt">
            <div class="fade-in-section ast-container visible">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-primary mb-4 text-center">Available Finishes</h2>
                <p class="font-body text-foreground/70 text-center max-w-2xl mx-auto mb-12">Our processing facilities offer a comprehensive range of surface finishes to meet diverse architectural requirements.</p>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-card rounded-lg overflow-hidden border border-border hover:shadow-xl hover:-translate-y-2 transition-all duration-500 group cursor-pointer">
                        <div class="overflow-hidden relative"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/finish-honed.jpg" alt="Honed Egyptian limestone surface with smooth matte finish" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                            <div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-300"></div>
                        </div>
                        <div class="p-5 group-hover:bg-muted transition-colors duration-300">
                            <h3 class="font-display text-lg font-semibold text-primary mb-2">Honed</h3>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed">Smooth, matte surface with a subtle, natural feel. Most popular for flooring and wall applications.</p>
                        </div>
                    </div>
                    <div class="bg-card rounded-lg overflow-hidden border border-border hover:shadow-xl hover:-translate-y-2 transition-all duration-500 group cursor-pointer">
                        <div class="overflow-hidden relative"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/finish-polished.jpg" alt="Polished Egyptian limestone surface with glossy reflective finish" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                            <div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-300"></div>
                        </div>
                        <div class="p-5 group-hover:bg-muted transition-colors duration-300">
                            <h3 class="font-display text-lg font-semibold text-primary mb-2">Polished</h3>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed">Glossy, reflective surface that highlights natural color depth. Gives a marble-like appearance.</p>
                        </div>
                    </div>
                    <div class="bg-card rounded-lg overflow-hidden border border-border hover:shadow-xl hover:-translate-y-2 transition-all duration-500 group cursor-pointer">
                        <div class="overflow-hidden relative"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/finish-brushed.jpg" alt="Brushed Egyptian limestone surface with textured linear marks" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                            <div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-300"></div>
                        </div>
                        <div class="p-5 group-hover:bg-muted transition-colors duration-300">
                            <h3 class="font-display text-lg font-semibold text-primary mb-2">Brushed</h3>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed">Lightly textured surface with a distinctive antique character and sophisticated aged appearance.</p>
                        </div>
                    </div>
                    <div class="bg-card rounded-lg overflow-hidden border border-border hover:shadow-xl hover:-translate-y-2 transition-all duration-500 group cursor-pointer">
                        <div class="overflow-hidden relative"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/finish-tumbled.jpg" alt="Tumbled Egyptian limestone surface with rounded edges" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                            <div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-300"></div>
                        </div>
                        <div class="p-5 group-hover:bg-muted transition-colors duration-300">
                            <h3 class="font-display text-lg font-semibold text-primary mb-2">Tumbled</h3>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed">Naturally weathered, rustic appearance with softened edges. Perfect for outdoor and heritage projects.</p>
                        </div>
                    </div>
                    <div class="bg-card rounded-lg overflow-hidden border border-border hover:shadow-xl hover:-translate-y-2 transition-all duration-500 group cursor-pointer">
                        <div class="overflow-hidden relative"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/finish-sandblasted.jpg" alt="Sandblasted Egyptian limestone surface with rough texture" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                            <div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-300"></div>
                        </div>
                        <div class="p-5 group-hover:bg-muted transition-colors duration-300">
                            <h3 class="font-display text-lg font-semibold text-primary mb-2">Sandblasted</h3>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed">Uniformly rough, textured surface providing excellent slip resistance for outdoor applications.</p>
                        </div>
                    </div>
                    <div class="bg-card rounded-lg overflow-hidden border border-border hover:shadow-xl hover:-translate-y-2 transition-all duration-500 group cursor-pointer">
                        <div class="overflow-hidden relative"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/finish-bush-hammered.jpg" alt="Bush-hammered Egyptian limestone surface with crater-like texture" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                            <div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-300"></div>
                        </div>
                        <div class="p-5 group-hover:bg-muted transition-colors duration-300">
                            <h3 class="font-display text-lg font-semibold text-primary mb-2">Bush-Hammered</h3>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed">Heavy textured surface ideal for exterior cladding and high-traffic commercial areas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        set_query_var('title', 'Need a Custom Finish?');
        set_query_var('desc', "We can accommodate virtually any finish specification for your project.");

        get_template_part('/template/components/sections/cta');
        ?>
    </main>




</div><!-- #primary -->


<?php get_footer(); ?>