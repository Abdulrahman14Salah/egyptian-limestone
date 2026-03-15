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
                        <div class="overflow-hidden relative"><img src="/assets/finish-honed-ClNsdrET.jpg" alt="Honed Egyptian limestone surface with smooth matte finish" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                            <div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-300"></div>
                        </div>
                        <div class="p-5 group-hover:bg-muted transition-colors duration-300">
                            <h3 class="font-display text-lg font-semibold text-primary mb-2">Honed</h3>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed">Smooth, matte surface with a subtle, natural feel. Most popular for flooring and wall applications.</p>
                        </div>
                    </div>
                    <div class="bg-card rounded-lg overflow-hidden border border-border hover:shadow-xl hover:-translate-y-2 transition-all duration-500 group cursor-pointer">
                        <div class="overflow-hidden relative"><img src="/assets/finish-polished-BmLmJLAm.jpg" alt="Polished Egyptian limestone surface with glossy reflective finish" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                            <div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-300"></div>
                        </div>
                        <div class="p-5 group-hover:bg-muted transition-colors duration-300">
                            <h3 class="font-display text-lg font-semibold text-primary mb-2">Polished</h3>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed">Glossy, reflective surface that highlights natural color depth. Gives a marble-like appearance.</p>
                        </div>
                    </div>
                    <div class="bg-card rounded-lg overflow-hidden border border-border hover:shadow-xl hover:-translate-y-2 transition-all duration-500 group cursor-pointer">
                        <div class="overflow-hidden relative"><img src="/assets/finish-brushed-D1uRgIiZ.jpg" alt="Brushed Egyptian limestone surface with textured linear marks" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                            <div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-300"></div>
                        </div>
                        <div class="p-5 group-hover:bg-muted transition-colors duration-300">
                            <h3 class="font-display text-lg font-semibold text-primary mb-2">Brushed</h3>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed">Lightly textured surface with a distinctive antique character and sophisticated aged appearance.</p>
                        </div>
                    </div>
                    <div class="bg-card rounded-lg overflow-hidden border border-border hover:shadow-xl hover:-translate-y-2 transition-all duration-500 group cursor-pointer">
                        <div class="overflow-hidden relative"><img src="/assets/finish-tumbled-C4juv3ZE.jpg" alt="Tumbled Egyptian limestone surface with rounded edges" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                            <div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-300"></div>
                        </div>
                        <div class="p-5 group-hover:bg-muted transition-colors duration-300">
                            <h3 class="font-display text-lg font-semibold text-primary mb-2">Tumbled</h3>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed">Naturally weathered, rustic appearance with softened edges. Perfect for outdoor and heritage projects.</p>
                        </div>
                    </div>
                    <div class="bg-card rounded-lg overflow-hidden border border-border hover:shadow-xl hover:-translate-y-2 transition-all duration-500 group cursor-pointer">
                        <div class="overflow-hidden relative"><img src="/assets/finish-sandblasted-Cv5Q6GMl.jpg" alt="Sandblasted Egyptian limestone surface with rough texture" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                            <div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-300"></div>
                        </div>
                        <div class="p-5 group-hover:bg-muted transition-colors duration-300">
                            <h3 class="font-display text-lg font-semibold text-primary mb-2">Sandblasted</h3>
                            <p class="font-body text-foreground/70 text-sm leading-relaxed">Uniformly rough, textured surface providing excellent slip resistance for outdoor applications.</p>
                        </div>
                    </div>
                    <div class="bg-card rounded-lg overflow-hidden border border-border hover:shadow-xl hover:-translate-y-2 transition-all duration-500 group cursor-pointer">
                        <div class="overflow-hidden relative"><img src="/assets/finish-bush-hammered-B53pohIA.jpg" alt="Bush-hammered Egyptian limestone surface with crater-like texture" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
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
        <section class="py-12 md:py-16 relative overflow-hidden bg-primary animate-[cta-gradient_3s_ease_infinite]"><canvas class="absolute inset-0 w-full h-full pointer-events-none" width="2850" style="mix-blend-mode: screen;" height="632"></canvas>
            <div class="fade-in-section ast-container text-center relative z-10 visible">
                <div class="flex items-center justify-center gap-2 mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-4 h-4 text-secondary animate-pulse">
                        <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                        <path d="M20 3v4"></path>
                        <path d="M22 5h-4"></path>
                        <path d="M4 17v2"></path>
                        <path d="M5 18H3"></path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-4 h-4 text-secondary animate-pulse">
                        <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                        <path d="M20 3v4"></path>
                        <path d="M22 5h-4"></path>
                        <path d="M4 17v2"></path>
                        <path d="M5 18H3"></path>
                    </svg></div>
                <h3 class="font-display text-2xl md:text-3xl font-bold text-primary-foreground mb-4">Need a Custom Finish?</h3>
                <p class="font-body text-primary-foreground/80 max-w-xl mx-auto mb-6">We can accommodate virtually any finish specification for your project.</p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4"><a class="inline-flex items-center justify-center px-8 py-4 bg-card text-primary font-body font-semibold rounded transition-all duration-300 hover:shadow-lg hover:scale-105" href="/request-quote">Request a Quote</a><a class="inline-flex items-center justify-center px-8 py-4 border-2 border-primary-foreground text-primary-foreground font-body font-semibold rounded transition-all duration-300 hover:bg-primary-foreground hover:text-primary hover:scale-105" href="/contact">Contact Us</a></div>
            </div>
        </section>
    </main>




</div><!-- #primary -->


<?php get_footer(); ?>