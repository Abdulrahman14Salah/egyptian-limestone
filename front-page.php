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
	exit(); // Exit if accessed directly.
} ?>
<?php get_header(); ?>

<div>
	<main>

		<?php get_template_part('/template/frontpage/frontpage', 'slider'); ?>

		<?php get_template_part('/template/frontpage/frontpage', 'about'); ?>

		<?php get_template_part('/template/frontpage/frontpage', 'types'); ?>

		<section class="py-12 md:py-16 relative overflow-hidden bg-primary cta-animated-bg">
			<canvas class="miniSparkleCanvas absolute inset-0 w-full h-full pointer-events-none"></canvas>
			<div class="ast-container text-center relative z-10">
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
				<h3 class="font-display text-2xl md:text-3xl font-bold text-primary-foreground mb-4">Need Bulk Limestone Supply?</h3>
				<p class="font-body text-primary-foreground/80 max-w-xl mx-auto mb-6">Get competitive FOB &amp; CIF pricing direct from our quarries in Egypt. Custom sizes available.</p>
				<div class="flex flex-col sm:flex-row items-center justify-center gap-4">
					<a class="inline-flex items-center justify-center px-8 py-4 bg-card text-primary hover:text-primary font-body font-semibold rounded transition-all duration-300 hover:shadow-lg hover:scale-105" href="/request-quote">Request a Quote</a>
					<a class="inline-flex items-center justify-center px-8 py-4 border-2 border-solid border-primary-foreground text-primary-foreground font-body font-semibold rounded transition-all duration-300 hover:bg-primary-foreground hover:text-primary hover:scale-105" href="/contact">Contact Us</a>
				</div>
			</div>
		</section>

		<?php get_template_part('/template/frontpage/frontpage', 'applications'); ?>

		<?php get_template_part('/template/frontpage/frontpage', 'why-choose'); ?>

		<?php get_template_part('/template/frontpage/frontpage', 'specifications'); ?>

		<?php get_template_part('/template/frontpage/frontpage', 'finishes'); ?>

		<section class="py-12 md:py-16 relative overflow-hidden cta-animated-bg">
			<canvas class="miniSparkleCanvas absolute inset-0 w-full h-full pointer-events-none"></canvas>
			<div class="ast-container text-center relative z-10">
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
				<h3 class="font-display text-2xl md:text-3xl font-bold text-primary-foreground mb-4">Order Samples Today</h3>
				<p class="font-body text-primary-foreground/80 max-w-xl mx-auto mb-6">Request free stone samples to see and feel the quality of our Egyptian limestone before ordering.</p>
				<div class="flex flex-col sm:flex-row items-center justify-center gap-4">
					<a class="inline-flex items-center justify-center px-8 py-4 bg-card text-primary hover:text-primary font-body font-semibold rounded transition-all duration-300 hover:shadow-lg hover:scale-105" href="/request-quote">Request a Quote</a>
					<a class="inline-flex items-center justify-center px-8 py-4 border-2 border-solid border-primary-foreground text-primary-foreground font-body font-semibold rounded transition-all duration-300 hover:bg-primary-foreground hover:text-primary hover:scale-105" href="/contact">Contact Us</a>
				</div>
			</div>
		</section>

		<?php get_template_part('/template/frontpage/frontpage', 'export'); ?>

		<?php get_template_part('/template/frontpage/frontpage', 'pricing'); ?>

		<section class="section-padding bg-background">
			<div class="ast-container">
				<h2 class="font-display text-3xl md:text-4xl font-bold text-primary mb-4 text-center">What Our Clients Say</h2>
				<p class="font-body text-foreground/70 text-center max-w-2xl mx-auto mb-12">Trusted by architects, developers, and stone distributors worldwide.</p>
				<div class="relative max-w-3xl mx-auto testimonial-slider">

					<div class="overflow-hidden rounded-2xl">

						<div class="flex transition-transform duration-700 ease-in-out testimonial-track">


							<div class="min-w-full px-4">
								<div class="bg-card p-8 md:p-12 rounded-2xl border border-border shadow-lg">

									<p class="font-body text-foreground/80 leading-relaxed mb-6 italic text-lg">
										"We sourced Galala limestone for a luxury hotel project in Italy. The quality was outstanding, delivery was on time, and pricing was 40% less than European alternatives."
									</p>

									<div>
										<p class="font-semibold text-primary">Marco Benedetti</p>
										<p class="text-sm text-foreground/60">Architect, Milan</p>
									</div>

								</div>
							</div>


							<div class="min-w-full px-4">
								<div class="bg-card p-8 md:p-12 rounded-2xl border border-border shadow-lg">

									<p class="font-body text-foreground/80 leading-relaxed mb-6 italic text-lg">
										"Our firm has been importing Egyptian limestone for over 3 years. The consistency in quality and custom cutting precision make them our go-to supplier."
									</p>

									<div>
										<p class="font-semibold text-primary">Sarah Mitchell</p>
										<p class="text-sm text-foreground/60">Project Manager, London</p>
									</div>

								</div>
							</div>


							<div class="min-w-full px-4">
								<div class="bg-card p-8 md:p-12 rounded-2xl border border-border shadow-lg">

									<p class="font-body text-foreground/80 leading-relaxed mb-6 italic text-lg">
										"We used Sinai Pearl limestone for the exterior cladding of our commercial tower. The finish quality exceeded expectations."
									</p>

									<div>
										<p class="font-semibold text-primary">Ahmed Al-Rashid</p>
										<p class="text-sm text-foreground/60">Developer, Dubai</p>
									</div>

								</div>
							</div>


							<div class="min-w-full px-4">
								<div class="bg-card p-8 md:p-12 rounded-2xl border border-border shadow-lg">

									<p class="font-body text-foreground/80 leading-relaxed mb-6 italic text-lg">
										"The brushed Sunny limestone transformed our client's villa. Beautiful tones and perfect dimensions."
									</p>

									<div>
										<p class="font-semibold text-primary">Elena Kowalski</p>
										<p class="text-sm text-foreground/60">Interior Designer, Berlin</p>
									</div>

								</div>
							</div>

						</div>
					</div>

					<!-- arrows -->
					<button class="testimonial-prev flex absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 bg-card border border-border rounded-full p-2 text-primary hover:text-primary-foreground hover:bg-primary">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left w-5 h-5">
							<path d="m15 18-6-6 6-6"></path>
						</svg>
					</button>

					<button class="testimonial-next flex absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 bg-card border border-border rounded-full p-2 text-primary hover:text-primary-foreground hover:bg-primary">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-5 h-5">
							<path d="m9 18 6-6-6-6"></path>
						</svg>
					</button>

					<!-- dots -->
					<div class="flex justify-center gap-3 mt-8 testimonial-dots">

						<button class="dot w-8 h-3 bg-secondary rounded-full hover:bg-secondary p-0"></button>
						<button class="dot w-3 h-3 bg-border rounded-full hover:bg-secondary p-0"></button>
						<button class="dot w-3 h-3 bg-border rounded-full hover:bg-secondary p-0"></button>
						<button class="dot w-3 h-3 bg-border rounded-full hover:bg-secondary p-0"></button>

					</div>


					<script>
						document.querySelectorAll(".testimonial-slider").forEach((slider) => {

							const track = slider.querySelector(".testimonial-track")
							const slides = slider.querySelectorAll(".testimonial-track > div")

							const nextBtn = slider.querySelector(".testimonial-next")
							const prevBtn = slider.querySelector(".testimonial-prev")

							const dots = slider.querySelectorAll(".dot")

							let current = 0
							let autoPlay = true
							let interval

							function update() {

								track.style.transform = `translateX(-${current * 100}%)`

								dots.forEach((dot, i) => {

									dot.classList.remove("w-8", "bg-secondary")
									dot.classList.add("w-3", "bg-border")

									if (i === current) {
										dot.classList.remove("w-3", "bg-border")
										dot.classList.add("w-8", "bg-secondary")
									}

								})

							}

							function next() {

								current = (current + 1) % slides.length
								update()

							}

							function prev() {

								current = (current - 1 + slides.length) % slides.length
								update()

							}

							function startAuto() {

								interval = setInterval(() => {

									if (autoPlay) {
										next()
									}

								}, 5000)

							}

							function pauseAuto() {

								autoPlay = false

								setTimeout(() => {
									autoPlay = true
								}, 10000)

							}

							nextBtn.addEventListener("click", () => {

								pauseAuto()
								next()

							})

							prevBtn.addEventListener("click", () => {

								pauseAuto()
								prev()

							})

							dots.forEach((dot, i) => {

								dot.addEventListener("click", () => {

									pauseAuto()

									current = i
									update()

								})

							})

							startAuto()

						})
					</script>
				</div>
			</div>
		</section>

		<?php get_template_part('/template/frontpage/frontpage', 'gallery'); ?>

		<?php get_template_part('/template/frontpage/frontpage', 'faq'); ?>

		<section class="section-padding relative overflow-hidden bg-primary">
			<canvas class="miniSparkleCanvas absolute inset-0 w-full h-full pointer-events-none"></canvas>
			<div class="absolute inset-0 cta-animated-bg opacity-80"></div>
			<div class="ast-container text-center relative z-10">
				<div class="flex items-center justify-center gap-2 mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-5 h-5 text-secondary animate-pulse">
						<path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
						<path d="M20 3v4"></path>
						<path d="M22 5h-4"></path>
						<path d="M4 17v2"></path>
						<path d="M5 18H3"></path>
					</svg><span class="font-body text-xs uppercase tracking-widest text-primary-foreground/60">Premium Quality Guaranteed</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-5 h-5 text-secondary animate-pulse">
						<path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
						<path d="M20 3v4"></path>
						<path d="M22 5h-4"></path>
						<path d="M4 17v2"></path>
						<path d="M5 18H3"></path>
					</svg></div>
				<h2 class="font-display text-3xl md:text-4xl font-bold text-primary-foreground mb-6">Work with a Trusted Egyptian Limestone Supplier</h2>
				<p class="font-body text-primary-foreground/80 max-w-2xl mx-auto mb-8 leading-relaxed">Whether you are a construction company, architect, stone distributor, or developer — we are your trusted partner for Egyptian limestone supply. Contact us today to discuss your requirements and receive a personalized quotation.</p>
				<div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-8"><a class="inline-flex items-center justify-center px-8 py-4 bg-card text-primary hover:text-primary font-body font-semibold rounded transition-all duration-300 hover:shadow-lg hover:scale-105" href="/request-quote">Request a Quote</a><a class="inline-flex items-center justify-center px-8 py-4 border-2 border-solid border-primary-foreground text-primary-foreground font-body font-semibold rounded transition-all duration-300 hover:bg-primary-foreground hover:text-primary hover:scale-105" href="/contact">Contact Us</a></div>
				<div class="inline-flex items-center gap-3 border-2 border-solid border-primary-foreground/40 rounded-lg px-6 py-3 backdrop-blur-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-5 h-5 text-primary-foreground/80">
						<rect width="20" height="16" x="2" y="4" rx="2"></rect>
						<path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
					</svg><a href="mailto:info@egyptian-limestone.com" class="font-body text-sm text-primary-foreground hover:text-primary-foreground/90 transition-colors">info@egyptian-limestone.com</a></div>
			</div>
		</section>
	</main>
</div><!-- #primary -->

<?php get_footer(); ?>