<section class="relative py-20 md:py-28 overflow-hidden">

    <?php if (has_post_thumbnail()): ?>

        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" class="absolute inset-0 w-full h-full object-cover" loading="eager">

    <?php else: ?>

        <img src="https://placehold.co/1900x400" alt="" class="absolute inset-0 w-full h-full object-cover" loading="eager">

    <?php endif; ?>
    <div class="absolute inset-0 bg-primary/80"></div>
    <div class="relative z-10 ast-container text-center">
        <h1 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-primary-foreground mb-4"><?php the_title(); ?></h1>
        <?php if (function_exists("rank_math_the_breadcrumbs")) rank_math_the_breadcrumbs(); ?>
    </div>
</section>