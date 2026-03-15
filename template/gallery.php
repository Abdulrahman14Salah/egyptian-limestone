<?php /* Template Name: Gallery */ ?>

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
        <section id="gallery" class="section-padding bg-background">
            <div class="fade-in-section ast-container visible">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-primary mb-4 text-center">Egyptian Limestone Project Gallery</h2>
                <p class="font-body text-foreground/70 text-center max-w-2xl mx-auto mb-12">Explore projects showcasing the versatility and beauty of Egyptian limestone worldwide.</p>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4">
                    <div class="overflow-hidden rounded-lg cursor-pointer group md:col-span-2 md:row-span-2"><img src="/assets/gallery-1-DswO82qk.jpg" alt="Grand mosque exterior built with Egyptian limestone cladding" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 min-h-[150px]" loading="lazy"></div>
                    <div class="overflow-hidden rounded-lg cursor-pointer group "><img src="/assets/gallery-2-AbqjtM3h.jpg" alt="Modern residential villa with Egyptian limestone exterior walls" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 min-h-[150px]" loading="lazy"></div>
                    <div class="overflow-hidden rounded-lg cursor-pointer group "><img src="/assets/application-hotel-D0D9EOwN.jpg" alt="Luxury hotel lobby with Egyptian limestone flooring" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 min-h-[150px]" loading="lazy"></div>
                    <div class="overflow-hidden rounded-lg cursor-pointer group md:col-span-2 md:row-span-2"><img src="/assets/gallery-3-B1sI9me3.jpg" alt="Luxury shopping mall interior with Egyptian limestone flooring" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 min-h-[150px]" loading="lazy"></div>
                    <div class="overflow-hidden rounded-lg cursor-pointer group "><img src="/assets/application-facade-DM9bjDUM.jpg" alt="Commercial building with Egyptian limestone facade" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 min-h-[150px]" loading="lazy"></div>
                    <div class="overflow-hidden rounded-lg cursor-pointer group "><img src="/assets/gallery-4-ASO4F417.jpg" alt="Egyptian limestone blocks stacked at quarry ready for export" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 min-h-[150px]" loading="lazy"></div>
                    <div class="overflow-hidden rounded-lg cursor-pointer group "><img src="/assets/application-outdoor-C0EXgXQZ.jpg" alt="Outdoor terrace with Egyptian limestone paving" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 min-h-[150px]" loading="lazy"></div>
                    <div class="overflow-hidden rounded-lg cursor-pointer group "><img src="/assets/gallery-5-DUmiw5Ae.jpg" alt="Modern office lobby with Egyptian limestone reception desk" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 min-h-[150px]" loading="lazy"></div>
                    <div class="overflow-hidden rounded-lg cursor-pointer group "><img src="/assets/gallery-6-DBiXTNQD.jpg" alt="Luxury villa pool area with Egyptian limestone paving" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 min-h-[150px]" loading="lazy"></div>
                    <div class="overflow-hidden rounded-lg cursor-pointer group "><img src="/assets/gallery-7---dpqzVo.jpg" alt="Museum interior with Egyptian limestone walls" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 min-h-[150px]" loading="lazy"></div>
                </div>
            </div>
        </section>
        <section class="py-12 md:py-16 relative overflow-hidden bg-primary animate-[cta-gradient_3s_ease_infinite]" style="background-size: 400% 400%; animation: 3s ease 0s infinite normal none running cta-gradient;"><canvas class="absolute inset-0 w-full h-full pointer-events-none" width="2850" style="mix-blend-mode: screen;" height="632"></canvas>
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
                <h3 class="font-display text-2xl md:text-3xl font-bold text-primary-foreground mb-4">Want Your Project Featured?</h3>
                <p class="font-body text-primary-foreground/80 max-w-xl mx-auto mb-6">Share your completed Egyptian limestone project with us.</p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4"><a class="inline-flex items-center justify-center px-8 py-4 bg-card text-primary font-body font-semibold rounded transition-all duration-300 hover:shadow-lg hover:scale-105" href="/request-quote">Request a Quote</a><a class="inline-flex items-center justify-center px-8 py-4 border-2 border-primary-foreground text-primary-foreground font-body font-semibold rounded transition-all duration-300 hover:bg-primary-foreground hover:text-primary hover:scale-105" href="/contact">Contact Us</a></div>
            </div>
        </section>
    </main>

</div><!-- #primary -->


<?php get_footer(); ?>