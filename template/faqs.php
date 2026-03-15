<?php /* Template Name: FAQs */ ?>

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

    <main>

        <?php get_template_part('/template/components/headers/page/style', '1'); ?>

        <section class="section-padding bg-background">
            <div class="ast-container">
                <div class="max-w-3xl mx-auto">
                    <div class="space-y-3" data-orientation="vertical">

                        <?php

                        $faqs = [
                            [
                                "q" => "Which service is right for me?",
                                "a" => "That depends on your objective, documentation profile, and long-term strategy. A consultation clarifies the appropriate route."
                            ],
                            [
                                "q" => "Do you guarantee approvals?",
                                "a" => "No. Approvals are determined solely by official authorities. My role is to strengthen eligibility positioning and documentation readiness."
                            ],
                            [
                                "q" => "Can I start remotely?",
                                "a" => "In many cases, yes. Some jurisdictions require physical presence depending on regulations."
                            ],
                            [
                                "q" => "What determines eligibility?",
                                "a" => "Income profile, documentation quality, background review, regulatory requirements, and due diligence standards."
                            ],
                        ];

                        ?>



                        <?php foreach ($faqs as $i => $faq):
                            $id = $i + 1;
                        ?>

                            <div id="accordion-collapse-<?php echo $id; ?>" data-accordion="collapse" class="rounded-base overflow-hidden shadow-xs">
                                <div class="border border-solid border-border rounded-xl px-6 data-[state=open]:border-primary/50">
                                    <h2 id="accordion-heading-<?php echo $id; ?>" style="margin-bottom:0;">
                                        <button type="button" class="accordion-button w-full flex flex-1 items-center justify-between transition-all [&[data-state=open]>svg]:rotate-180 text-left font-semibold text-foreground hover:text-primary py-5 hover:no-underline bg-transparent hover:bg-transparent focus:bg-transparent text-black" data-accordion-target="#accordion-body-<?php echo $id; ?>" aria-expanded="false" aria-controls="accordion-body-<?php echo $id; ?>">

                                            <span class="font-semibold text-black pr-4 text-base"><?php echo esc_html($faq['q']); ?></span>

                                            <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    d="m5 15 7-7 7 7" />
                                            </svg>
                                        </button>
                                    </h2>

                                    <div id="accordion-body-<?php echo $id; ?>" class="hidden" aria-labelledby="accordion-heading-<?php echo $id; ?>">
                                        <p class="font-body text-muted-foreground leading-relaxed py-5 text-base mb-0">
                                            <?php echo esc_html($faq['a']); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>


                        <?php endforeach; ?>

                    </div>

                </div>
            </div>
        </section>
    </main>

</div><!-- #primary -->


<?php get_footer(); ?>