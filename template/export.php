<?php /* Template Name: Export */ ?>

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
        <section id="export" class="section-padding bg-background">
            <div class="fade-in-section ast-container visible">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-primary mb-4 text-center">Egyptian Limestone Export Process</h2>
                <p class="font-body text-foreground/70 text-center max-w-2xl mx-auto mb-12">We have streamlined the entire Egypt limestone export process to ensure a smooth, transparent experience for international buyers — from initial quarry extraction to final delivery at your project site.</p>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="relative bg-card p-6 rounded-lg border border-border"><span class="absolute top-4 right-4 font-display text-4xl font-bold text-muted/80">01</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pickaxe w-10 h-10 text-secondary mb-4">
                            <path d="M14.531 12.469 6.619 20.38a1 1 0 1 1-3-3l7.912-7.912"></path>
                            <path d="M15.686 4.314A12.5 12.5 0 0 0 5.461 2.958 1 1 0 0 0 5.58 4.71a22 22 0 0 1 6.318 3.393"></path>
                            <path d="M17.7 3.7a1 1 0 0 0-1.4 0l-4.6 4.6a1 1 0 0 0 0 1.4l2.6 2.6a1 1 0 0 0 1.4 0l4.6-4.6a1 1 0 0 0 0-1.4z"></path>
                            <path d="M19.686 8.314a12.501 12.501 0 0 1 1.356 10.225 1 1 0 0 1-1.751-.119 22 22 0 0 0-3.393-6.319"></path>
                        </svg>
                        <h3 class="font-display text-lg font-semibold text-primary mb-2">Quarry Extraction</h3>
                        <p class="font-body text-foreground/70 text-sm leading-relaxed">Our Egyptian limestone quarry operations utilize advanced diamond wire cutting and controlled blasting techniques to extract large blocks of raw limestone from the quarry face. This ensures maximum yield with minimal waste and preserves the stone's structural integrity.</p>
                    </div>
                    <div class="relative bg-card p-6 rounded-lg border border-border"><span class="absolute top-4 right-4 font-display text-4xl font-bold text-muted/80">02</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scissors w-10 h-10 text-secondary mb-4">
                            <circle cx="6" cy="6" r="3"></circle>
                            <path d="M8.12 8.12 12 12"></path>
                            <path d="M20 4 8.12 15.88"></path>
                            <circle cx="6" cy="18" r="3"></circle>
                            <path d="M14.8 14.8 20 20"></path>
                        </svg>
                        <h3 class="font-display text-lg font-semibold text-primary mb-2">Stone Cutting &amp; Processing</h3>
                        <p class="font-body text-foreground/70 text-sm leading-relaxed">Raw blocks are transported to our processing facilities where state-of-the-art gang saws, CNC bridge saws, and calibration machines cut the limestone into precise Egyptian limestone tiles, slabs, and custom formats according to project specifications.</p>
                    </div>
                    <div class="relative bg-card p-6 rounded-lg border border-border"><span class="absolute top-4 right-4 font-display text-4xl font-bold text-muted/80">03</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check w-10 h-10 text-secondary mb-4">
                            <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                        <h3 class="font-display text-lg font-semibold text-primary mb-2">Quality Control</h3>
                        <p class="font-body text-foreground/70 text-sm leading-relaxed">Every batch undergoes rigorous quality inspection including dimensional accuracy checks, visual grading, water absorption testing, and compressive strength verification. Our QC process ensures that only premium-grade Egyptian natural stone leaves our facilities.</p>
                    </div>
                    <div class="relative bg-card p-6 rounded-lg border border-border"><span class="absolute top-4 right-4 font-display text-4xl font-bold text-muted/80">04</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package w-10 h-10 text-secondary mb-4">
                            <path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"></path>
                            <path d="M12 22V12"></path>
                            <path d="m3.3 7 7.703 4.734a2 2 0 0 0 1.994 0L20.7 7"></path>
                            <path d="m7.5 4.27 9 5.15"></path>
                        </svg>
                        <h3 class="font-display text-lg font-semibold text-primary mb-2">Packaging</h3>
                        <p class="font-body text-foreground/70 text-sm leading-relaxed">Finished products are carefully packaged in fumigated wooden crates with foam dividers, protective corner pieces, and moisture barriers. Our packaging meets international shipping standards and ensures your Egyptian limestone arrives in perfect condition.</p>
                    </div>
                    <div class="relative bg-card p-6 rounded-lg border border-border"><span class="absolute top-4 right-4 font-display text-4xl font-bold text-muted/80">05</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ship w-10 h-10 text-secondary mb-4">
                            <path d="M12 10.189V14"></path>
                            <path d="M12 2v3"></path>
                            <path d="M19 13V7a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v6"></path>
                            <path d="M19.38 20A11.6 11.6 0 0 0 21 14l-8.188-3.639a2 2 0 0 0-1.624 0L3 14a11.6 11.6 0 0 0 2.81 7.76"></path>
                            <path d="M2 21c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1s1.2 1 2.5 1c2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"></path>
                        </svg>
                        <h3 class="font-display text-lg font-semibold text-primary mb-2">Shipping</h3>
                        <p class="font-body text-foreground/70 text-sm leading-relaxed">We coordinate shipping through Egypt's major ports including Alexandria, Sokhna, and Damietta, with established relationships with leading international freight carriers. Full container loads (FCL) and less-than-container loads (LCL) are available to suit order volumes.</p>
                    </div>
                    <div class="relative bg-card p-6 rounded-lg border border-border"><span class="absolute top-4 right-4 font-display text-4xl font-bold text-muted/80">06</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text w-10 h-10 text-secondary mb-4">
                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                            <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                            <path d="M10 9H8"></path>
                            <path d="M16 13H8"></path>
                            <path d="M16 17H8"></path>
                        </svg>
                        <h3 class="font-display text-lg font-semibold text-primary mb-2">Export Documentation</h3>
                        <p class="font-body text-foreground/70 text-sm leading-relaxed">Our experienced export team handles all documentation including certificates of origin, phytosanitary certificates, commercial invoices, packing lists, and bills of lading. We ensure full compliance with import regulations in your destination country.</p>
                    </div>
                </div>
            </div>
        </section>
        <?php
        set_query_var('title', 'Ready to Import Egyptian Limestone?');
        set_query_var('desc', "Our export team handles all logistics and documentation for a smooth delivery.");

        get_template_part('/template/components/sections/cta');
        ?>
    </main>




</div><!-- #primary -->


<?php get_footer(); ?>