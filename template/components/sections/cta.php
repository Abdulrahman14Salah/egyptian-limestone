<?php

$title = get_query_var('title', 'Ready to Source Premium Egyptian Limestone?');
$description = get_query_var('desc', 'Get competitive pricing, custom sizes, and reliable worldwide delivery. Request your free quote today.');

?>


<section class="cta-animated-bg py-12 md:py-16 relative overflow-hidden bg-primary"><canvas class="absolute inset-0 w-full h-full pointer-events-none" width="2850" style="mix-blend-mode: screen;" height="680"></canvas>
    <div class="fade-in-section ast-container text-center relative z-10 visible">
        <div class="flex items-center justify-center gap-2 mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-4 h-4 text-secondary animate-pulse">
                <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                <path d="M20 3v4"></path>
                <path d="M22 5h-4"></path>
                <path d="M4 17v2"></path>
                <path d="M5 18H3"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-4 h-4 text-secondary animate-pulse">
                <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                <path d="M20 3v4"></path>
                <path d="M22 5h-4"></path>
                <path d="M4 17v2"></path>
                <path d="M5 18H3"></path>
            </svg>
        </div>
        <h3 class="font-display text-2xl md:text-3xl font-bold text-primary-foreground mb-4"><?php echo $title; ?></h3>
        <p class="font-body text-primary-foreground/80 max-w-xl mx-auto mb-6"><?php echo $description; ?></p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a class="inline-flex items-center justify-center px-8 py-4 bg-card text-primary hover:text-primary font-body font-semibold rounded transition-all duration-300 hover:shadow-lg hover:scale-105" href="/request-quote">Request a Quote</a>
            <a class="inline-flex items-center justify-center px-8 py-4 border-2 border-solid border-primary-foreground text-primary-foreground font-body font-semibold rounded transition-all duration-300 hover:bg-primary-foreground hover:text-primary hover:scale-105" href="/contact">Contact Us</a>
        </div>
    </div>
</section>