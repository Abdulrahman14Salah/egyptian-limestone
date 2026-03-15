<?php /* Template Name: Blog */ ?>

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
            <div class="ast-container text-center">
                <h2 class="font-display text-2xl md:text-3xl font-bold text-primary mb-4">Coming Soon</h2>
                <p class="font-body text-muted-foreground max-w-xl mx-auto">We're working on insightful articles about Egyptian limestone, architecture trends, and stone industry news. Stay tuned!</p>
            </div>
        </section>
    </main>


</div><!-- #primary -->


<?php get_footer(); ?>