<?php /* Template Name: Contact Us */ ?>

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
            <div class="ast-container">
                <p class="font-body text-foreground/70 text-center max-w-2xl mx-auto mb-12">Get in touch with our team. We're here to help with your Egyptian limestone requirements.</p>
                <div class="grid md:grid-cols-2 gap-12 lg:gap-16">
                    <div>
                        <h2 class="font-display text-xl font-semibold text-primary mb-6">Send Us a Message</h2>
                        <form class="space-y-4">
                            <div class="grid sm:grid-cols-2 gap-4">
                                <div><label class="font-body text-sm font-medium text-foreground mb-1 block">Full Name *</label><input required="" type="text" class="w-full px-4 py-3 rounded-lg border border-border bg-card font-body text-sm focus:ring-2 focus:ring-secondary focus:border-secondary outline-none transition"></div>
                                <div><label class="font-body text-sm font-medium text-foreground mb-1 block">Email *</label><input required="" type="email" class="w-full px-4 py-3 rounded-lg border border-border bg-card font-body text-sm focus:ring-2 focus:ring-secondary focus:border-secondary outline-none transition"></div>
                            </div>
                            <div class="grid sm:grid-cols-2 gap-4">
                                <div><label class="font-body text-sm font-medium text-foreground mb-1 block">Company</label><input type="text" class="w-full px-4 py-3 rounded-lg border border-border bg-card font-body text-sm focus:ring-2 focus:ring-secondary focus:border-secondary outline-none transition"></div>
                                <div><label class="font-body text-sm font-medium text-foreground mb-1 block">Country</label><input type="text" class="w-full px-4 py-3 rounded-lg border border-border bg-card font-body text-sm focus:ring-2 focus:ring-secondary focus:border-secondary outline-none transition"></div>
                            </div>
                            <div><label class="font-body text-sm font-medium text-foreground mb-1 block">Subject *</label><input required="" type="text" class="w-full px-4 py-3 rounded-lg border border-border bg-card font-body text-sm focus:ring-2 focus:ring-secondary focus:border-secondary outline-none transition"></div>
                            <div><label class="font-body text-sm font-medium text-foreground mb-1 block">Message *</label><textarea required="" rows="5" class="w-full px-4 py-3 rounded-lg border border-border bg-card font-body text-sm focus:ring-2 focus:ring-secondary focus:border-secondary outline-none transition resize-none"></textarea></div><button type="submit" class="btn-primary w-full sm:w-auto">Send Message</button>
                        </form>
                    </div>
                    <div class="space-y-6">
                        <h2 class="font-display text-xl font-semibold text-primary mb-6">Contact Information</h2>
                        <div class="flex gap-4 items-start"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-6 h-6 text-secondary flex-shrink-0 mt-1">
                                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                            </svg>
                            <div>
                                <p class="font-body font-medium text-foreground">Email</p><a href="mailto:info@egyptian-limestone.com" class="font-body text-sm text-foreground/70 hover:text-primary transition-colors">info@egyptian-limestone.com</a>
                            </div>
                        </div>
                        <div class="flex gap-4 items-start"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-6 h-6 text-secondary flex-shrink-0 mt-1">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            <div>
                                <p class="font-body font-medium text-foreground">Phone</p>
                                <p class="font-body text-sm text-foreground/70">Available upon request</p>
                            </div>
                        </div>
                        <div class="flex gap-4 items-start"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin w-6 h-6 text-secondary flex-shrink-0 mt-1">
                                <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <div>
                                <p class="font-body font-medium text-foreground">Location</p>
                                <p class="font-body text-sm text-foreground/70">Cairo, Egypt</p>
                            </div>
                        </div>
                        <div class="bg-card p-6 rounded-lg border border-border mt-8">
                            <h3 class="font-display text-lg font-semibold text-primary mb-3">Why Choose Us?</h3>
                            <ul class="space-y-2 font-body text-sm text-foreground/70">
                                <li>✓ Direct quarry owner — no middlemen</li>
                                <li>✓ Export to 40+ countries</li>
                                <li>✓ Custom sizes and finishes</li>
                                <li>✓ Competitive FOB &amp; CIF pricing</li>
                                <li>✓ Fast production: 2-3 weeks</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


</div><!-- #primary -->


<?php get_footer(); ?>