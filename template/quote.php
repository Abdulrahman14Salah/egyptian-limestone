<?php /* Template Name: Quote */ ?>

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
            <div class="ast-container max-w-3xl">
                <p class="font-body text-foreground/70 text-center max-w-xl mx-auto mb-12">Fill out the form below and we'll send you a detailed quotation within 24 hours. Get competitive FOB and CIF pricing direct from our quarries.</p>
                <form class="bg-card p-6 md:p-8 rounded-lg border border-border space-y-5">
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div><label class="font-body text-sm font-medium text-foreground mb-1 block">Full Name *</label><input required="" type="text" class="w-full px-4 py-3 rounded-lg border border-border bg-background font-body text-sm focus:ring-2 focus:ring-secondary focus:border-secondary outline-none transition"></div>
                        <div><label class="font-body text-sm font-medium text-foreground mb-1 block">Email *</label><input required="" type="email" class="w-full px-4 py-3 rounded-lg border border-border bg-background font-body text-sm focus:ring-2 focus:ring-secondary focus:border-secondary outline-none transition"></div>
                    </div>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div><label class="font-body text-sm font-medium text-foreground mb-1 block">Company</label><input type="text" class="w-full px-4 py-3 rounded-lg border border-border bg-background font-body text-sm focus:ring-2 focus:ring-secondary focus:border-secondary outline-none transition"></div>
                        <div><label class="font-body text-sm font-medium text-foreground mb-1 block">Country *</label><input required="" type="text" class="w-full px-4 py-3 rounded-lg border border-border bg-background font-body text-sm focus:ring-2 focus:ring-secondary focus:border-secondary outline-none transition"></div>
                    </div>
                    <div><label class="font-body text-sm font-medium text-foreground mb-1 block">Limestone Type *</label><select required="" class="w-full px-4 py-3 rounded-lg border border-border bg-background font-body text-sm focus:ring-2 focus:ring-secondary focus:border-secondary outline-none transition">
                            <option value="">Select stone type...</option>
                            <option value="Sinai Pearl Limestone">Sinai Pearl Limestone</option>
                            <option value="Sunny Limestone">Sunny Limestone</option>
                            <option value="Galala Classic Limestone">Galala Classic Limestone</option>
                            <option value="Galala Extra Limestone">Galala Extra Limestone</option>
                            <option value="Samaha Limestone">Samaha Limestone</option>
                            <option value="Triesta Limestone">Triesta Limestone</option>
                            <option value="Golden Sinai Limestone">Golden Sinai Limestone</option>
                            <option value="Catrina Limestone">Catrina Limestone</option>
                            <option value="Milly Brown Limestone">Milly Brown Limestone</option>
                            <option value="Emperador Limestone">Emperador Limestone</option>
                            <option value="Crema Nova Limestone">Crema Nova Limestone</option>
                            <option value="Felfel Limestone">Felfel Limestone</option>
                            <option value="Other / Multiple Types">Other / Multiple Types</option>
                        </select></div>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div><label class="font-body text-sm font-medium text-foreground mb-1 block">Preferred Finish</label><select class="w-full px-4 py-3 rounded-lg border border-border bg-background font-body text-sm focus:ring-2 focus:ring-secondary focus:border-secondary outline-none transition">
                                <option value="">Select finish...</option>
                                <option value="Honed">Honed</option>
                                <option value="Polished">Polished</option>
                                <option value="Brushed">Brushed</option>
                                <option value="Tumbled">Tumbled</option>
                                <option value="Sandblasted">Sandblasted</option>
                                <option value="Bush-Hammered">Bush-Hammered</option>
                            </select></div>
                        <div><label class="font-body text-sm font-medium text-foreground mb-1 block">Quantity (m²)</label><input type="text" placeholder="e.g. 500 m²" class="w-full px-4 py-3 rounded-lg border border-border bg-background font-body text-sm focus:ring-2 focus:ring-secondary focus:border-secondary outline-none transition"></div>
                    </div>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div><label class="font-body text-sm font-medium text-foreground mb-1 block">Dimensions</label><input type="text" placeholder="e.g. 60x40 cm" class="w-full px-4 py-3 rounded-lg border border-border bg-background font-body text-sm focus:ring-2 focus:ring-secondary focus:border-secondary outline-none transition"></div>
                        <div><label class="font-body text-sm font-medium text-foreground mb-1 block">Thickness</label><input type="text" placeholder="e.g. 2 cm" class="w-full px-4 py-3 rounded-lg border border-border bg-background font-body text-sm focus:ring-2 focus:ring-secondary focus:border-secondary outline-none transition"></div>
                    </div>
                    <div><label class="font-body text-sm font-medium text-foreground mb-1 block">Project Details</label><textarea rows="4" placeholder="Tell us about your project, timeline, and any special requirements..." class="w-full px-4 py-3 rounded-lg border border-border bg-background font-body text-sm focus:ring-2 focus:ring-secondary focus:border-secondary outline-none transition resize-none"></textarea></div><button type="submit" class="btn-primary w-full flex items-center justify-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-send w-4 h-4">
                            <path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z"></path>
                            <path d="m21.854 2.147-10.94 10.939"></path>
                        </svg>Submit Quote Request</button>
                </form>
            </div>
        </section>
    </main>


</div><!-- #primary -->


<?php get_footer(); ?>