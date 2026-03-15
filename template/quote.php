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
                <div class="bg-card p-6 md:p-8 rounded-lg border border-border space-y-5">
                    <?php echo do_shortcode('[contact-form-7 id="62fcb67" title="Quote"]'); ?>
                </div>
            </div>
        </section>
    </main>


</div><!-- #primary -->


<?php get_footer(); ?>