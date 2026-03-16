<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
</div> <!-- container -->
</div><!-- #content -->

<footer class="bg-foreground py-10">
	<div class="ast-container">
		<div class="grid grid-cols-2 md:grid-cols-5 gap-8 mb-8">
			<div class="col-span-2 md:col-span-1">
				<h3 class="font-display text-lg font-bold text-primary-foreground mb-3">Egyptian Limestone</h3>
				<p class="font-body text-sm text-primary-foreground/60 leading-relaxed">A leading Egyptian limestone supplier and exporter, delivering premium natural stone to global projects since 2005.</p>
			</div>
			<div>
				<h3 class="font-display text-base font-semibold text-primary-foreground mb-3">Products</h3>
				<ul class="space-y-2">
					<li><a class="inline-flex items-center gap-1.5 font-body text-sm text-primary-foreground/60 hover:text-primary-foreground transition-colors group" href="/types"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3.5 h-3.5 transition-transform group-hover:translate-x-0.5">
								<path d="m9 18 6-6-6-6"></path>
							</svg>Limestone Types</a></li>
					<li><a class="inline-flex items-center gap-1.5 font-body text-sm text-primary-foreground/60 hover:text-primary-foreground transition-colors group" href="/finishes"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3.5 h-3.5 transition-transform group-hover:translate-x-0.5">
								<path d="m9 18 6-6-6-6"></path>
							</svg>Finishes</a></li>
					<li><a class="inline-flex items-center gap-1.5 font-body text-sm text-primary-foreground/60 hover:text-primary-foreground transition-colors group" href="/specifications"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3.5 h-3.5 transition-transform group-hover:translate-x-0.5">
								<path d="m9 18 6-6-6-6"></path>
							</svg>Specifications</a></li>
				</ul>
			</div>
			<div>
				<h3 class="font-display text-base font-semibold text-primary-foreground mb-3">Services</h3>
				<ul class="space-y-2">
					<li><a class="inline-flex items-center gap-1.5 font-body text-sm text-primary-foreground/60 hover:text-primary-foreground transition-colors group" href="/applications"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3.5 h-3.5 transition-transform group-hover:translate-x-0.5">
								<path d="m9 18 6-6-6-6"></path>
							</svg>Applications</a></li>
					<li><a class="inline-flex items-center gap-1.5 font-body text-sm text-primary-foreground/60 hover:text-primary-foreground transition-colors group" href="/export"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3.5 h-3.5 transition-transform group-hover:translate-x-0.5">
								<path d="m9 18 6-6-6-6"></path>
							</svg>Export Process</a></li>
					<li><a class="inline-flex items-center gap-1.5 font-body text-sm text-primary-foreground/60 hover:text-primary-foreground transition-colors group" href="/pricing"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3.5 h-3.5 transition-transform group-hover:translate-x-0.5">
								<path d="m9 18 6-6-6-6"></path>
							</svg>Pricing</a></li>
				</ul>
			</div>
			<div>
				<h3 class="font-display text-base font-semibold text-primary-foreground mb-3">Resources</h3>
				<ul class="space-y-2">
					<li><a class="inline-flex items-center gap-1.5 font-body text-sm text-primary-foreground/60 hover:text-primary-foreground transition-colors group" href="/gallery"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3.5 h-3.5 transition-transform group-hover:translate-x-0.5">
								<path d="m9 18 6-6-6-6"></path>
							</svg>Gallery</a></li>
					<li><a class="inline-flex items-center gap-1.5 font-body text-sm text-primary-foreground/60 hover:text-primary-foreground transition-colors group" href="/faq"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3.5 h-3.5 transition-transform group-hover:translate-x-0.5">
								<path d="m9 18 6-6-6-6"></path>
							</svg>FAQ</a></li>
					<li><a class="inline-flex items-center gap-1.5 font-body text-sm text-primary-foreground/60 hover:text-primary-foreground transition-colors group" href="/request-quote"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3.5 h-3.5 transition-transform group-hover:translate-x-0.5">
								<path d="m9 18 6-6-6-6"></path>
							</svg>Request Quote</a></li>
				</ul>
			</div>
			<div>
				<h3 class="font-display text-base font-semibold text-primary-foreground mb-3">Contact</h3>
				<p class="font-body text-sm text-primary-foreground/60 mb-3"><a href="mailto:info@egyptian-limestone.com" class="text-primary-foreground hover:text-primary-foreground transition-colors">info@egyptian-limestone.com</a></p>
				<div class="flex gap-3"><a href="#" aria-label="Facebook" class="text-primary-foreground/60 hover:text-primary-foreground transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook w-5 h-5">
							<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
						</svg></a><a href="#" aria-label="Instagram" class="text-primary-foreground/60 hover:text-primary-foreground transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram w-5 h-5">
							<rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
							<path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
							<line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
						</svg></a><a href="#" aria-label="LinkedIn" class="text-primary-foreground/60 hover:text-primary-foreground transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin w-5 h-5">
							<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
							<rect width="4" height="12" x="2" y="9"></rect>
							<circle cx="4" cy="4" r="2"></circle>
						</svg></a></div>
			</div>
		</div>
		<div class="border-t border-primary-foreground/10 pt-6 text-center" style="border-top-style: solid;">
			<p class="font-body text-xs text-primary-foreground/40 mb-0">© 2026 Egyptian Limestone. All rights reserved. | Egyptian Limestone Supplier &amp; Exporter</p>
		</div>
	</div>
</footer>

<?php
astra_content_after();

astra_footer_before();

astra_footer();

astra_footer_after();
?>
</div><!-- #page -->
<?php
astra_body_bottom();
wp_footer();
?>
</body>

</html>