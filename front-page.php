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
		<section class="relative min-h-[90vh] md:min-h-screen flex items-center justify-center overflow-hidden">
			<div class="absolute inset-0 bg-cover bg-center bg-fixed" style="background-image: url(&quot;<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/hero-quarry.jpg&quot;);"></div>
			<div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/70"></div>
			<div class="relative z-10 ast-container text-center py-24">
				<h1 class="font-display text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-primary-foreground mb-6 leading-tight">Egyptian Limestone Supplier</h1>
				<p class="font-display text-lg sm:text-xl md:text-2xl text-primary-foreground/90 mb-6 max-w-3xl mx-auto italic">Premium Egyptian Limestone for Global Construction and Architecture Projects</p>
				<p class="font-body text-sm sm:text-base text-primary-foreground/80 max-w-2xl mx-auto mb-8 leading-relaxed">Direct quarry-to-project supply of premium Egyptian limestone tiles, slabs, and blocks. Competitive pricing, custom cutting, and reliable export to over 40 countries. Get your free quote today.</p>
				<div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-2xl mx-auto mb-8">
					<div class="relative flex flex-col items-center gap-1 rounded-lg py-3 px-2 overflow-hidden border border-primary-foreground/20">
						<div class="absolute inset-0 trust-card-bg"></div>
						<div class="relative z-10 flex flex-col items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe w-6 h-6 text-secondary">
								<circle cx="12" cy="12" r="10"></circle>
								<path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
								<path d="M2 12h20"></path>
							</svg><span class="font-display text-sm font-bold text-primary-foreground">40+ Countries</span><span class="font-body text-xs text-primary-foreground/70">Worldwide Export</span></div>
					</div>
					<div class="relative flex flex-col items-center gap-1 rounded-lg py-3 px-2 overflow-hidden border border-primary-foreground/20">
						<div class="absolute inset-0 trust-card-bg"></div>
						<div class="relative z-10 flex flex-col items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-6 h-6 text-secondary">
								<path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path>
								<circle cx="12" cy="8" r="6"></circle>
							</svg><span class="font-display text-sm font-bold text-primary-foreground">20+ Years</span><span class="font-body text-xs text-primary-foreground/70">Industry Experience</span></div>
					</div>
					<div class="relative flex flex-col items-center gap-1 rounded-lg py-3 px-2 overflow-hidden border border-primary-foreground/20">
						<div class="absolute inset-0 trust-card-bg"></div>
						<div class="relative z-10 flex flex-col items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check w-6 h-6 text-secondary">
								<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
								<path d="m9 12 2 2 4-4"></path>
							</svg><span class="font-display text-sm font-bold text-primary-foreground">ISO Certified</span><span class="font-body text-xs text-primary-foreground/70">Quality Assured</span></div>
					</div>
					<div class="relative flex flex-col items-center gap-1 rounded-lg py-3 px-2 overflow-hidden border border-primary-foreground/20">
						<div class="absolute inset-0 trust-card-bg"></div>
						<div class="relative z-10 flex flex-col items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-6 h-6 text-secondary">
								<polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
								<polyline points="16 7 22 7 22 13"></polyline>
							</svg><span class="font-display text-sm font-bold text-primary-foreground">500+ Projects</span><span class="font-body text-xs text-primary-foreground/70">Completed Globally</span></div>
					</div>
				</div>
				<div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-8">
					<a class="inline-flex items-center justify-center px-8 py-4 bg-card text-primary hover:text-primary font-body font-bold rounded transition-all duration-300 hover:shadow-lg hover:scale-105 text-base" href="/request-quote">Request a Free Quote</a>
					<a class="inline-flex items-center justify-center px-8 py-4 bg-card text-primary hover:text-primary font-body font-bold rounded transition-all duration-300 hover:shadow-lg hover:scale-105 text-base" href="/types">View Limestone Types</a>
				</div>
				<div class="inline-flex items-center justify-center gap-2 bg-foreground/70 rounded-full px-5 py-2.5 backdrop-blur-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-4 h-4 text-primary-foreground">
						<rect width="20" height="16" x="2" y="4" rx="2"></rect>
						<path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
					</svg><a href="mailto:info@egyptian-limestone.com" class="font-body text-sm text-primary-foreground hover:text-secondary transition-colors">info@egyptian-limestone.com</a></div>
			</div>
		</section>

		<section id="about" class="section-padding bg-background">
			<div class="ast-container">
				<h2 class="font-display text-3xl md:text-4xl font-bold text-primary mb-8 text-center">Introduction to Egyptian Limestone</h2>
				<div class="grid md:grid-cols-2 gap-8 lg:gap-12 mb-8">
					<div class="flex flex-col justify-center">
						<p class="font-body text-foreground/80 leading-relaxed mb-4">Egyptian limestone is one of the world's most sought-after natural building materials, prized for its exceptional durability, timeless beauty, and remarkable versatility. Quarried from the ancient geological formations of Egypt — primarily in the Sinai Peninsula, the Eastern Desert, and the Nile Valley — this natural stone has been a cornerstone of architecture and construction for thousands of years.</p>
						<p class="font-body text-foreground/80 leading-relaxed">The global demand for Egyptian limestone continues to grow steadily as architects, builders, and developers recognize its unique combination of aesthetic appeal and structural integrity. Egyptian limestone quarries produce a remarkable range of colors, from soft creams and warm beiges to rich golden tones, making it an incredibly flexible material for both interior and exterior applications.</p>
					</div>
					<div class="relative h-full min-h-[300px] rounded-lg overflow-hidden group" data-slider>

						<img data-slide src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/gallery-4.jpg" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-100" loading="eager">

						<img data-slide src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/gallery-1.jpg" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-0" loading="lazy">

						<img data-slide src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/gallery-2.jpg" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-0" loading="lazy">


						<button class="slider-prev flex absolute left-3 top-1/2 -translate-y-1/2 bg-card/80 hover:bg-card text-primary hover:text-primary rounded-full p-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left w-5 h-5">
								<path d="m15 18-6-6 6-6"></path>
							</svg>
						</button>

						<button class="slider-next flex absolute right-3 top-1/2 -translate-y-1/2 bg-card/80 hover:bg-card text-primary hover:text-primary rounded-full p-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-5 h-5">
								<path d="m9 18 6-6-6-6"></path>
							</svg>
						</button>

						<div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-2 slider-dots">
							<button class="w-2.5 h-2.5 rounded-full bg-card scale-125 p-0"></button>
							<button class="w-2.5 h-2.5 rounded-full bg-card/50 p-0"></button>
							<button class="w-2.5 h-2.5 rounded-full bg-card/50 p-0"></button>
						</div>

						<script>
							document.querySelectorAll("[data-slider]").forEach((slider) => {

								const slides = slider.querySelectorAll("[data-slide]");
								const nextBtn = slider.querySelector(".slider-next");
								const prevBtn = slider.querySelector(".slider-prev");
								const dots = slider.querySelectorAll(".slider-dots button");

								let current = 0;
								let interval;

								function showSlide(index) {

									slides.forEach((slide, i) => {
										slide.classList.remove("opacity-100");
										slide.classList.add("opacity-0");

										dots[i].classList.remove("scale-125", "bg-card");
										dots[i].classList.add("bg-card/50");
									});

									slides[index].classList.remove("opacity-0");
									slides[index].classList.add("opacity-100");

									dots[index].classList.remove("bg-card/50");
									dots[index].classList.add("scale-125", "bg-card");

									current = index;
								}

								function next() {
									let index = (current + 1) % slides.length;
									showSlide(index);
								}

								function prev() {
									let index = (current - 1 + slides.length) % slides.length;
									showSlide(index);
								}

								function startAuto() {
									interval = setInterval(next, 4000);
								}

								function stopAuto() {
									clearInterval(interval);
								}

								nextBtn.addEventListener("click", next);
								prevBtn.addEventListener("click", prev);

								dots.forEach((dot, i) => {
									dot.addEventListener("click", () => showSlide(i));
								});

								slider.addEventListener("mouseenter", stopAuto);
								slider.addEventListener("mouseleave", startAuto);

								startAuto();

							});
						</script>
					</div>
				</div>
				<div class="grid md:grid-cols-2 gap-8 lg:gap-12">
					<div class="rounded-lg border border-border bg-card p-6 shadow-sm">
						<p class="font-body text-foreground/80 leading-relaxed">The historical significance of Egyptian limestone cannot be overstated. The Great Pyramids of Giza, one of the Seven Wonders of the Ancient World, were constructed primarily from locally quarried limestone over 4,500 years ago. These monuments have withstood millennia of harsh desert conditions, demonstrating the stone's remarkable resistance to weathering and erosion.</p>
					</div>
					<div class="rounded-lg border border-border bg-card p-6 shadow-sm">
						<p class="font-body text-foreground/80 leading-relaxed">Today, Egypt limestone export operations serve markets across every continent, supplying premium Egyptian beige limestone and other varieties to prestigious projects ranging from luxury hotels and commercial towers to residential developments and public infrastructure.</p>
					</div>
				</div>
			</div>
		</section>

		<section id="types" class="section-padding section-alt">
			<div class="ast-container">
				<h2 class="font-display text-3xl md:text-4xl font-bold text-primary mb-4 text-center">Types of Egyptian Limestone</h2>
				<p class="font-body text-foreground/70 text-center max-w-2xl mx-auto mb-12">Egypt produces several distinct varieties of premium limestone, each with unique characteristics.</p>
				<div class="grid md:grid-cols-2 gap-8">
					<div class="bg-card rounded-lg overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border border-border group cursor-pointer">
						<div class="overflow-hidden relative">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/sinai-pearl.jpg" alt="Sinai Pearl limestone slab with light cream color" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
							<div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-300"></div>
						</div>
						<div class="p-6 group-hover:bg-muted transition-colors duration-300">
							<h3 class="font-display text-xl md:text-2xl font-semibold text-primary mb-3">Sinai Pearl Limestone</h3>
							<p class="font-body text-foreground/75 leading-relaxed text-sm mb-4">Renowned for its elegant light cream to pearl-white coloring with distinctive fossilized shell inclusions. Highly favored for luxury hotel lobbies and premium commercial facades.</p><a class="font-body text-sm font-semibold text-secondary hover:text-primary transition-colors" href="/request-quote">Request Quote →</a>
						</div>
					</div>
					<div class="bg-card rounded-lg overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border border-border group cursor-pointer">
						<div class="overflow-hidden relative">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/sunny-limestone.jpg" alt="Sunny limestone slab with warm golden beige color" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
							<div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-300"></div>
						</div>
						<div class="p-6 group-hover:bg-muted transition-colors duration-300">
							<h3 class="font-display text-xl md:text-2xl font-semibold text-primary mb-3">Sunny Limestone</h3>
							<p class="font-body text-foreground/75 leading-relaxed text-sm mb-4">Characterized by warm golden-beige tones that bring natural warmth to any application. Popular for exterior cladding, outdoor paving, and building facades.</p><a class="font-body text-sm font-semibold text-secondary hover:text-primary transition-colors" href="/request-quote">Request Quote →</a>
						</div>
					</div>
					<div class="bg-card rounded-lg overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border border-border group cursor-pointer">
						<div class="overflow-hidden relative">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/galala-limestone.jpg" alt="Galala limestone slab with light beige color" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
							<div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-300"></div>
						</div>
						<div class="p-6 group-hover:bg-muted transition-colors duration-300">
							<h3 class="font-display text-xl md:text-2xl font-semibold text-primary mb-3">Galala Limestone</h3>
							<p class="font-body text-foreground/75 leading-relaxed text-sm mb-4">Among the most prestigious varieties, often compared to marble for its refined appearance. Widely specified for high-profile commercial projects.</p><a class="font-body text-sm font-semibold text-secondary hover:text-primary transition-colors" href="/request-quote">Request Quote →</a>
						</div>
					</div>
					<div class="bg-card rounded-lg overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border border-border group cursor-pointer">
						<div class="overflow-hidden relative">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/samaha-limestone.jpg" alt="Samaha limestone slab with dark beige to brown color" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
							<div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-300"></div>
						</div>
						<div class="p-6 group-hover:bg-muted transition-colors duration-300">
							<h3 class="font-display text-xl md:text-2xl font-semibold text-primary mb-3">Samaha Limestone</h3>
							<p class="font-body text-foreground/75 leading-relaxed text-sm mb-4">Offers a distinctive darker palette with rich brown and dark beige tones. Perfect for feature walls, accent panels, and statement flooring.</p><a class="font-body text-sm font-semibold text-secondary hover:text-primary transition-colors" href="/request-quote">Request Quote →</a>
						</div>
					</div>
				</div>
				<div class="text-center mt-10"><a class="btn-primary hover:scale-105 transition-transform duration-300" href="/types">View All Limestone Types</a></div>
			</div>
		</section>

		<section class="py-12 md:py-16 relative overflow-hidden bg-primary animate-[cta-gradient_3s_ease_infinite]"><canvas class="absolute inset-0 w-full h-full pointer-events-none" width="2850" style="mix-blend-mode: screen;" height="680"></canvas>
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

		<section id="applications" class="section-padding bg-background">
			<div class="ast-container">
				<h2 class="font-display text-3xl md:text-4xl font-bold text-primary mb-4 text-center">Applications of Egyptian Limestone</h2>
				<p class="font-body text-foreground/70 text-center max-w-2xl mx-auto mb-12">Egyptian limestone's versatility makes it suitable for a wide range of construction and architectural applications.</p>
				<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
					<div class="group relative rounded-lg overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-500 cursor-pointer flex flex-col h-full">
						<div class="overflow-hidden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/application-facade.jpg" alt="Modern commercial building with Egyptian limestone facade cladding" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy"></div>
						<div class="p-5 bg-card border border-border border-t-0 rounded-b-lg group-hover:bg-muted transition-colors duration-300 flex-1 flex flex-col">
							<div class="flex items-center gap-3 mb-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 w-5 h-5 text-secondary group-hover:scale-110 transition-transform duration-300">
									<path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
									<path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
									<path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
									<path d="M10 6h4"></path>
									<path d="M10 10h4"></path>
									<path d="M10 14h4"></path>
									<path d="M10 18h4"></path>
								</svg>
								<h3 class="font-display text-lg font-semibold text-primary">Building Facades</h3>
							</div>
							<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Egyptian limestone is a premier choice for exterior building facades, providing a timeless, elegant appearance.</p>
						</div>
					</div>
					<div class="group relative rounded-lg overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-500 cursor-pointer flex flex-col h-full">
						<div class="overflow-hidden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/application-flooring.jpg" alt="Luxury bathroom with Egyptian limestone flooring tiles" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy"></div>
						<div class="p-5 bg-card border border-border border-t-0 rounded-b-lg group-hover:bg-muted transition-colors duration-300 flex-1 flex flex-col">
							<div class="flex items-center gap-3 mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house w-5 h-5 text-secondary group-hover:scale-110 transition-transform duration-300">
									<path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
									<path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
								</svg>
								<h3 class="font-display text-lg font-semibold text-primary">Interior Flooring</h3>
							</div>
							<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Egyptian limestone tiles create stunning, durable flooring surfaces for high-traffic areas.</p>
						</div>
					</div>
					<div class="group relative rounded-lg overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-500 cursor-pointer flex flex-col h-full">
						<div class="overflow-hidden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/application-wall.jpg" alt="Modern interior with Egyptian limestone wall cladding feature wall" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy"></div>
						<div class="p-5 bg-card border border-border border-t-0 rounded-b-lg group-hover:bg-muted transition-colors duration-300 flex-1 flex flex-col">
							<div class="flex items-center gap-3 mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layers w-5 h-5 text-secondary group-hover:scale-110 transition-transform duration-300">
									<path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"></path>
									<path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"></path>
									<path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"></path>
								</svg>
								<h3 class="font-display text-lg font-semibold text-primary">Wall Cladding</h3>
							</div>
							<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Interior and exterior wall cladding with Egyptian limestone adds depth, texture, and warmth.</p>
						</div>
					</div>
					<div class="group relative rounded-lg overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-500 cursor-pointer flex flex-col h-full">
						<div class="overflow-hidden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/application-outdoor.jpg" alt="Elegant outdoor terrace with Egyptian limestone paving tiles" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy"></div>
						<div class="p-5 bg-card border border-border border-t-0 rounded-b-lg group-hover:bg-muted transition-colors duration-300 flex-1 flex flex-col">
							<div class="flex items-center gap-3 mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tree-pine w-5 h-5 text-secondary group-hover:scale-110 transition-transform duration-300">
									<path d="m17 14 3 3.3a1 1 0 0 1-.7 1.7H4.7a1 1 0 0 1-.7-1.7L7 14h-.3a1 1 0 0 1-.7-1.7L9 9h-.2A1 1 0 0 1 8 7.3L12 3l4 4.3a1 1 0 0 1-.8 1.7H15l3 3.3a1 1 0 0 1-.7 1.7H17Z"></path>
									<path d="M12 22v-3"></path>
								</svg>
								<h3 class="font-display text-lg font-semibold text-primary">Outdoor Paving</h3>
							</div>
							<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Egyptian limestone's natural slip resistance makes it excellent for outdoor paving and pool surrounds.</p>
						</div>
					</div>
					<div class="group relative rounded-lg overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-500 cursor-pointer flex flex-col h-full">
						<div class="overflow-hidden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/application-hotel.jpg" alt="Modern luxury hotel lobby with Egyptian limestone flooring" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy"></div>
						<div class="p-5 bg-card border border-border border-t-0 rounded-b-lg group-hover:bg-muted transition-colors duration-300 flex-1 flex flex-col">
							<div class="flex items-center gap-3 mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hotel w-5 h-5 text-secondary group-hover:scale-110 transition-transform duration-300">
									<path d="M10 22v-6.57"></path>
									<path d="M12 11h.01"></path>
									<path d="M12 7h.01"></path>
									<path d="M14 15.43V22"></path>
									<path d="M15 16a5 5 0 0 0-6 0"></path>
									<path d="M16 11h.01"></path>
									<path d="M16 7h.01"></path>
									<path d="M8 11h.01"></path>
									<path d="M8 7h.01"></path>
									<rect x="4" y="2" width="16" height="20" rx="2"></rect>
								</svg>
								<h3 class="font-display text-lg font-semibold text-primary">Hotels &amp; Commercial</h3>
							</div>
							<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Five-star hotels, resorts, and corporate headquarters specify Egyptian limestone for premium aesthetics.</p>
						</div>
					</div>
					<div class="group relative rounded-lg overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-500 cursor-pointer flex flex-col h-full">
						<div class="overflow-hidden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/application-stairs.jpg" alt="Luxury villa with Egyptian limestone staircase" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy"></div>
						<div class="p-5 bg-card border border-border border-t-0 rounded-b-lg group-hover:bg-muted transition-colors duration-300 flex-1 flex flex-col">
							<div class="flex items-center gap-3 mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-footprints w-5 h-5 text-secondary group-hover:scale-110 transition-transform duration-300">
									<path d="M4 16v-2.38C4 11.5 2.97 10.5 3 8c.03-2.72 1.49-6 4.5-6C9.37 2 10 3.8 10 5.5c0 3.11-2 5.66-2 8.68V16a2 2 0 1 1-4 0Z"></path>
									<path d="M20 20v-2.38c0-2.12 1.03-3.12 1-5.62-.03-2.72-1.49-6-4.5-6C14.63 6 14 7.8 14 9.5c0 3.11 2 5.66 2 8.68V20a2 2 0 1 0 4 0Z"></path>
									<path d="M16 17h4"></path>
									<path d="M4 13h4"></path>
								</svg>
								<h3 class="font-display text-lg font-semibold text-primary">Stairs &amp; Landscaping</h3>
							</div>
							<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Egyptian limestone creates elegant staircases and landscape elements that add timeless value.</p>
						</div>
					</div>
				</div>
				<div class="text-center mt-10"><a class="btn-primary hover:scale-105 transition-transform duration-300" href="/request-quote">Get Pricing for Your Application</a></div>
			</div>
		</section>

		<section id="why-choose" class="section-padding section-alt">
			<div class="ast-container">
				<h2 class="font-display text-3xl md:text-4xl font-bold text-primary mb-4 text-center">Why Choose an Egyptian Limestone Supplier</h2>
				<p class="font-body text-foreground/70 text-center max-w-2xl mx-auto mb-12">Selecting the right Egyptian limestone exporter is critical for project success.</p>
				<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
					<div class="bg-card p-6 rounded-lg border border-border hover:border-secondary hover:shadow-xl hover:-translate-y-2 transition-all duration-500 cursor-pointer group">
						<div class="w-12 h-12 rounded-lg bg-secondary/10 flex items-center justify-center mb-4 group-hover:bg-secondary/20 group-hover:scale-110 transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign w-6 h-6 text-secondary">
								<line x1="12" x2="12" y1="2" y2="22"></line>
								<path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
							</svg></div>
						<h3 class="font-display text-lg font-semibold text-primary mb-2">Competitive Pricing</h3>
						<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Direct quarry ownership and efficient production allow us to offer highly competitive pricing — up to 50% savings compared to European alternatives.</p>
					</div>
					<div class="bg-card p-6 rounded-lg border border-border hover:border-secondary hover:shadow-xl hover:-translate-y-2 transition-all duration-500 cursor-pointer group">
						<div class="w-12 h-12 rounded-lg bg-secondary/10 flex items-center justify-center mb-4 group-hover:bg-secondary/20 group-hover:scale-110 transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mountain w-6 h-6 text-secondary">
								<path d="m8 3 4 8 5-5 5 15H2L8 3z"></path>
							</svg></div>
						<h3 class="font-display text-lg font-semibold text-primary mb-2">Large Quarry Production</h3>
						<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Our quarry operations span thousands of hectares with proven reserves capable of sustaining decades of continuous production.</p>
					</div>
					<div class="bg-card p-6 rounded-lg border border-border hover:border-secondary hover:shadow-xl hover:-translate-y-2 transition-all duration-500 cursor-pointer group">
						<div class="w-12 h-12 rounded-lg bg-secondary/10 flex items-center justify-center mb-4 group-hover:bg-secondary/20 group-hover:scale-110 transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-palette w-6 h-6 text-secondary">
								<circle cx="13.5" cy="6.5" r=".5" fill="currentColor"></circle>
								<circle cx="17.5" cy="10.5" r=".5" fill="currentColor"></circle>
								<circle cx="8.5" cy="7.5" r=".5" fill="currentColor"></circle>
								<circle cx="6.5" cy="12.5" r=".5" fill="currentColor"></circle>
								<path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z"></path>
							</svg></div>
						<h3 class="font-display text-lg font-semibold text-primary mb-2">Wide Color Variations</h3>
						<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">From pearl whites and soft creams to warm golden beiges and rich browns — one of the broadest natural color palettes.</p>
					</div>
					<div class="bg-card p-6 rounded-lg border border-border hover:border-secondary hover:shadow-xl hover:-translate-y-2 transition-all duration-500 cursor-pointer group">
						<div class="w-12 h-12 rounded-lg bg-secondary/10 flex items-center justify-center mb-4 group-hover:bg-secondary/20 group-hover:scale-110 transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe w-6 h-6 text-secondary">
								<circle cx="12" cy="12" r="10"></circle>
								<path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
								<path d="M2 12h20"></path>
							</svg></div>
						<h3 class="font-display text-lg font-semibold text-primary mb-2">Global Export Capability</h3>
						<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Established export relationships in over 40 countries with efficient delivery via Red Sea and Mediterranean routes.</p>
					</div>
					<div class="bg-card p-6 rounded-lg border border-border hover:border-secondary hover:shadow-xl hover:-translate-y-2 transition-all duration-500 cursor-pointer group">
						<div class="w-12 h-12 rounded-lg bg-secondary/10 flex items-center justify-center mb-4 group-hover:bg-secondary/20 group-hover:scale-110 transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ruler w-6 h-6 text-secondary">
								<path d="M21.3 15.3a2.4 2.4 0 0 1 0 3.4l-2.6 2.6a2.4 2.4 0 0 1-3.4 0L2.7 8.7a2.41 2.41 0 0 1 0-3.4l2.6-2.6a2.41 2.41 0 0 1 3.4 0Z"></path>
								<path d="m14.5 12.5 2-2"></path>
								<path d="m11.5 9.5 2-2"></path>
								<path d="m8.5 6.5 2-2"></path>
								<path d="m17.5 15.5 2-2"></path>
							</svg></div>
						<h3 class="font-display text-lg font-semibold text-primary mb-2">Custom Cut Sizes</h3>
						<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">State-of-the-art processing facilities accommodate virtually any custom size, thickness, and finish specification.</p>
					</div>
					<div class="bg-card p-6 rounded-lg border border-border hover:border-secondary hover:shadow-xl hover:-translate-y-2 transition-all duration-500 cursor-pointer group">
						<div class="w-12 h-12 rounded-lg bg-secondary/10 flex items-center justify-center mb-4 group-hover:bg-secondary/20 group-hover:scale-110 transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-truck w-6 h-6 text-secondary">
								<path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"></path>
								<path d="M15 18H9"></path>
								<path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"></path>
								<circle cx="17" cy="18" r="2"></circle>
								<circle cx="7" cy="18" r="2"></circle>
							</svg></div>
						<h3 class="font-display text-lg font-semibold text-primary mb-2">Reliable Delivery</h3>
						<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Full container loads and LCL options with complete export documentation. Lead times from just 2-3 weeks for standard orders.</p>
					</div>
				</div>
				<div class="text-center mt-10"><a class="btn-primary hover:scale-105 transition-transform duration-300" href="/request-quote">Get Started — Request a Quote</a></div>
			</div>
		</section>

		<section id="specifications" class="section-padding bg-background">
			<div class="ast-container">
				<h2 class="font-display text-3xl md:text-4xl font-bold text-primary mb-4 text-center">Egyptian Limestone Technical Specifications</h2>
				<p class="font-body text-foreground/70 text-center max-w-2xl mx-auto mb-12">Understanding the technical properties of Egyptian limestone is essential for proper specification and application. Below are the typical physical and mechanical properties of our Egyptian natural stone products.</p>
				<div class="grid md:grid-cols-2 gap-8 items-stretch">
					<div class="flex flex-col">
						<h3 class="font-display text-xl font-semibold text-primary mb-4">Physical Properties</h3>
						<div class="overflow-hidden rounded-lg border border-border flex-1">
							<table class="w-full">
								<thead>
									<tr class="bg-primary">
										<th class="text-left px-4 py-3 font-body font-semibold text-sm text-primary-foreground">Property</th>
										<th class="text-left px-4 py-3 font-body font-semibold text-sm text-primary-foreground">Value</th>
									</tr>
								</thead>
								<tbody>
									<tr class="bg-card">
										<td class="px-4 py-3 font-body text-sm font-medium text-foreground">Density</td>
										<td class="px-4 py-3 font-body text-sm text-foreground/70">2,200 – 2,600 kg/m³</td>
									</tr>
									<tr class="bg-muted/50">
										<td class="px-4 py-3 font-body text-sm font-medium text-foreground">Water Absorption</td>
										<td class="px-4 py-3 font-body text-sm text-foreground/70">1.5% – 6.0%</td>
									</tr>
									<tr class="bg-card">
										<td class="px-4 py-3 font-body text-sm font-medium text-foreground">Compressive Strength</td>
										<td class="px-4 py-3 font-body text-sm text-foreground/70">40 – 130 MPa</td>
									</tr>
									<tr class="bg-muted/50">
										<td class="px-4 py-3 font-body text-sm font-medium text-foreground">Flexural Strength</td>
										<td class="px-4 py-3 font-body text-sm text-foreground/70">6 – 15 MPa</td>
									</tr>
									<tr class="bg-card">
										<td class="px-4 py-3 font-body text-sm font-medium text-foreground">Porosity</td>
										<td class="px-4 py-3 font-body text-sm text-foreground/70">3% – 15%</td>
									</tr>
									<tr class="bg-muted/50">
										<td class="px-4 py-3 font-body text-sm font-medium text-foreground">Abrasion Resistance</td>
										<td class="px-4 py-3 font-body text-sm text-foreground/70">Moderate to High</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="flex flex-col">
						<h3 class="font-display text-xl font-semibold text-primary mb-4">Available Formats</h3>
						<div class="overflow-hidden rounded-lg border border-border flex-1">
							<table class="w-full">
								<thead>
									<tr class="bg-primary">
										<th class="text-left px-4 py-3 font-body font-semibold text-sm text-primary-foreground">Format</th>
										<th class="text-left px-4 py-3 font-body font-semibold text-sm text-primary-foreground">Details</th>
									</tr>
								</thead>
								<tbody>
									<tr class="bg-card">
										<td class="px-4 py-3 font-body text-sm font-medium text-foreground">Available Finishes</td>
										<td class="px-4 py-3 font-body text-sm text-foreground/70">Honed, Polished, Brushed, Tumbled, Sandblasted, Bush-Hammered, Split-Face</td>
									</tr>
									<tr class="bg-muted/50">
										<td class="px-4 py-3 font-body text-sm font-medium text-foreground">Standard Tile Sizes</td>
										<td class="px-4 py-3 font-body text-sm text-foreground/70">30×30, 40×40, 60×30, 60×40, 60×60, 80×40, 80×80 cm</td>
									</tr>
									<tr class="bg-card">
										<td class="px-4 py-3 font-body text-sm font-medium text-foreground">Slab Sizes</td>
										<td class="px-4 py-3 font-body text-sm text-foreground/70">Up to 300×150 cm (custom sizes available)</td>
									</tr>
									<tr class="bg-muted/50">
										<td class="px-4 py-3 font-body text-sm font-medium text-foreground">Thickness Options</td>
										<td class="px-4 py-3 font-body text-sm text-foreground/70">1 cm, 1.5 cm, 2 cm, 3 cm, 4 cm, 5 cm, 6 cm+</td>
									</tr>
									<tr class="bg-card">
										<td class="px-4 py-3 font-body text-sm font-medium text-foreground">Edge Profiles</td>
										<td class="px-4 py-3 font-body text-sm text-foreground/70">Straight, Beveled, Bullnose, Chamfered</td>
									</tr>
									<tr class="bg-muted/50">
										<td class="px-4 py-3 font-body text-sm font-medium text-foreground">Packaging</td>
										<td class="px-4 py-3 font-body text-sm text-foreground/70">Wooden crates, fumigated pallets, foam-lined for export</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="finishes" class="section-padding section-alt">
			<div class="ast-container">
				<h2 class="font-display text-3xl md:text-4xl font-bold text-primary mb-4 text-center">Available Finishes</h2>
				<p class="font-body text-foreground/70 text-center max-w-2xl mx-auto mb-12">Our processing facilities offer a comprehensive range of surface finishes to meet diverse architectural requirements.</p>
				<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
					<div class="bg-card rounded-lg overflow-hidden border border-border hover:shadow-xl hover:-translate-y-2 transition-all duration-500 group cursor-pointer">
						<div class="overflow-hidden relative"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/finish-honed.jpg" alt="Honed Egyptian limestone surface with smooth matte finish" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
							<div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-300"></div>
						</div>
						<div class="p-5 group-hover:bg-muted transition-colors duration-300">
							<h3 class="font-display text-lg font-semibold text-primary mb-2">Honed</h3>
							<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Smooth, matte surface with a subtle, natural feel. Most popular for flooring and wall applications.</p>
						</div>
					</div>
					<div class="bg-card rounded-lg overflow-hidden border border-border hover:shadow-xl hover:-translate-y-2 transition-all duration-500 group cursor-pointer">
						<div class="overflow-hidden relative"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/finish-polished.jpg" alt="Polished Egyptian limestone surface with glossy reflective finish" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
							<div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-300"></div>
						</div>
						<div class="p-5 group-hover:bg-muted transition-colors duration-300">
							<h3 class="font-display text-lg font-semibold text-primary mb-2">Polished</h3>
							<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Glossy, reflective surface that highlights natural color depth. Gives a marble-like appearance.</p>
						</div>
					</div>
					<div class="bg-card rounded-lg overflow-hidden border border-border hover:shadow-xl hover:-translate-y-2 transition-all duration-500 group cursor-pointer">
						<div class="overflow-hidden relative"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/finish-brushed.jpg" alt="Brushed Egyptian limestone surface with textured linear marks" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
							<div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-300"></div>
						</div>
						<div class="p-5 group-hover:bg-muted transition-colors duration-300">
							<h3 class="font-display text-lg font-semibold text-primary mb-2">Brushed</h3>
							<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Lightly textured surface with a distinctive antique character and sophisticated aged appearance.</p>
						</div>
					</div>
					<div class="bg-card rounded-lg overflow-hidden border border-border hover:shadow-xl hover:-translate-y-2 transition-all duration-500 group cursor-pointer">
						<div class="overflow-hidden relative"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/finish-tumbled.jpg" alt="Tumbled Egyptian limestone surface with rounded edges" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
							<div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-300"></div>
						</div>
						<div class="p-5 group-hover:bg-muted transition-colors duration-300">
							<h3 class="font-display text-lg font-semibold text-primary mb-2">Tumbled</h3>
							<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Naturally weathered, rustic appearance with softened edges. Perfect for outdoor and heritage projects.</p>
						</div>
					</div>
					<div class="bg-card rounded-lg overflow-hidden border border-border hover:shadow-xl hover:-translate-y-2 transition-all duration-500 group cursor-pointer">
						<div class="overflow-hidden relative"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/finish-sandblasted.jpg" alt="Sandblasted Egyptian limestone surface with rough texture" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
							<div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-300"></div>
						</div>
						<div class="p-5 group-hover:bg-muted transition-colors duration-300">
							<h3 class="font-display text-lg font-semibold text-primary mb-2">Sandblasted</h3>
							<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Uniformly rough, textured surface providing excellent slip resistance for outdoor applications.</p>
						</div>
					</div>
					<div class="bg-card rounded-lg overflow-hidden border border-border hover:shadow-xl hover:-translate-y-2 transition-all duration-500 group cursor-pointer">
						<div class="overflow-hidden relative"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/finish-bush-hammered.jpg" alt="Bush-hammered Egyptian limestone surface with crater-like texture" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
							<div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-300"></div>
						</div>
						<div class="p-5 group-hover:bg-muted transition-colors duration-300">
							<h3 class="font-display text-lg font-semibold text-primary mb-2">Bush-Hammered</h3>
							<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Heavy textured surface ideal for exterior cladding and high-traffic commercial areas.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="py-12 md:py-16 relative overflow-hidden bg-primary animate-[cta-gradient_3s_ease_infinite]"><canvas class="absolute inset-0 w-full h-full pointer-events-none" width="2850" style="mix-blend-mode: screen;" height="680"></canvas>
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

		<section id="export" class="section-padding bg-background">
			<div class="ast-container">
				<h2 class="font-display text-3xl md:text-4xl font-bold text-primary mb-4 text-center">Egyptian Limestone Export Process</h2>
				<p class="font-body text-foreground/70 text-center max-w-2xl mx-auto mb-12">We have streamlined the entire Egypt limestone export process to ensure a smooth, transparent experience for international buyers — from initial quarry extraction to final delivery at your project site.</p>
				<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
					<div class="relative bg-card p-6 rounded-lg border border-border"><span class="absolute top-4 right-4 font-display text-4xl font-bold text-muted/80">01</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pickaxe w-10 h-10 text-secondary mb-4">
							<path d="M14.531 12.469 6.619 20.38a1 1 0 1 1-3-3l7.912-7.912"></path>
							<path d="M15.686 4.314A12.5 12.5 0 0 0 5.461 2.958 1 1 0 0 0 5.58 4.71a22 22 0 0 1 6.318 3.393"></path>
							<path d="M17.7 3.7a1 1 0 0 0-1.4 0l-4.6 4.6a1 1 0 0 0 0 1.4l2.6 2.6a1 1 0 0 0 1.4 0l4.6-4.6a1 1 0 0 0 0-1.4z"></path>
							<path d="M19.686 8.314a12.501 12.501 0 0 1 1.356 10.225 1 1 0 0 1-1.751-.119 22 22 0 0 0-3.393-6.319"></path>
						</svg>
						<h3 class="font-display text-lg font-semibold text-primary mb-2">Quarry Extraction</h3>
						<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Our Egyptian limestone quarry operations utilize advanced diamond wire cutting and controlled blasting techniques to extract large blocks of raw limestone from the quarry face. This ensures maximum yield with minimal waste and preserves the stone's structural integrity.</p>
					</div>
					<div class="relative bg-card p-6 rounded-lg border border-border"><span class="absolute top-4 right-4 font-display text-4xl font-bold text-muted/80">02</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scissors w-10 h-10 text-secondary mb-4">
							<circle cx="6" cy="6" r="3"></circle>
							<path d="M8.12 8.12 12 12"></path>
							<path d="M20 4 8.12 15.88"></path>
							<circle cx="6" cy="18" r="3"></circle>
							<path d="M14.8 14.8 20 20"></path>
						</svg>
						<h3 class="font-display text-lg font-semibold text-primary mb-2">Stone Cutting &amp; Processing</h3>
						<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Raw blocks are transported to our processing facilities where state-of-the-art gang saws, CNC bridge saws, and calibration machines cut the limestone into precise Egyptian limestone tiles, slabs, and custom formats according to project specifications.</p>
					</div>
					<div class="relative bg-card p-6 rounded-lg border border-border"><span class="absolute top-4 right-4 font-display text-4xl font-bold text-muted/80">03</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check w-10 h-10 text-secondary mb-4">
							<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
							<path d="m9 12 2 2 4-4"></path>
						</svg>
						<h3 class="font-display text-lg font-semibold text-primary mb-2">Quality Control</h3>
						<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Every batch undergoes rigorous quality inspection including dimensional accuracy checks, visual grading, water absorption testing, and compressive strength verification. Our QC process ensures that only premium-grade Egyptian natural stone leaves our facilities.</p>
					</div>
					<div class="relative bg-card p-6 rounded-lg border border-border"><span class="absolute top-4 right-4 font-display text-4xl font-bold text-muted/80">04</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package w-10 h-10 text-secondary mb-4">
							<path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"></path>
							<path d="M12 22V12"></path>
							<path d="m3.3 7 7.703 4.734a2 2 0 0 0 1.994 0L20.7 7"></path>
							<path d="m7.5 4.27 9 5.15"></path>
						</svg>
						<h3 class="font-display text-lg font-semibold text-primary mb-2">Packaging</h3>
						<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Finished products are carefully packaged in fumigated wooden crates with foam dividers, protective corner pieces, and moisture barriers. Our packaging meets international shipping standards and ensures your Egyptian limestone arrives in perfect condition.</p>
					</div>
					<div class="relative bg-card p-6 rounded-lg border border-border"><span class="absolute top-4 right-4 font-display text-4xl font-bold text-muted/80">05</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ship w-10 h-10 text-secondary mb-4">
							<path d="M12 10.189V14"></path>
							<path d="M12 2v3"></path>
							<path d="M19 13V7a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v6"></path>
							<path d="M19.38 20A11.6 11.6 0 0 0 21 14l-8.188-3.639a2 2 0 0 0-1.624 0L3 14a11.6 11.6 0 0 0 2.81 7.76"></path>
							<path d="M2 21c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1s1.2 1 2.5 1c2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"></path>
						</svg>
						<h3 class="font-display text-lg font-semibold text-primary mb-2">Shipping</h3>
						<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">We coordinate shipping through Egypt's major ports including Alexandria, Sokhna, and Damietta, with established relationships with leading international freight carriers. Full container loads (FCL) and less-than-container loads (LCL) are available to suit order volumes.</p>
					</div>
					<div class="relative bg-card p-6 rounded-lg border border-border"><span class="absolute top-4 right-4 font-display text-4xl font-bold text-muted/80">06</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text w-10 h-10 text-secondary mb-4">
							<path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
							<path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
							<path d="M10 9H8"></path>
							<path d="M16 13H8"></path>
							<path d="M16 17H8"></path>
						</svg>
						<h3 class="font-display text-lg font-semibold text-primary mb-2">Export Documentation</h3>
						<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Our experienced export team handles all documentation including certificates of origin, phytosanitary certificates, commercial invoices, packing lists, and bills of lading. We ensure full compliance with import regulations in your destination country.</p>
					</div>
				</div>
			</div>
		</section>

		<section id="pricing" class="section-padding section-alt">
			<div class="ast-container">
				<h2 class="font-display text-3xl md:text-4xl font-bold text-primary mb-4 text-center">Egyptian Limestone Price Guide</h2>
				<p class="font-body text-foreground/70 text-center max-w-2xl mx-auto mb-12">As a direct Egyptian limestone exporter with our own quarry operations, we offer highly competitive FOB and CIF pricing for bulk orders worldwide.</p>
				<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
					<div class="bg-card p-5 rounded-lg border border-border">
						<h3 class="font-display text-base font-semibold text-primary mb-2">Stone Type</h3>
						<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Different varieties such as Sinai Pearl, Galala, Sunny, and Samaha each have different pricing based on quarry availability and demand.</p>
					</div>
					<div class="bg-card p-5 rounded-lg border border-border">
						<h3 class="font-display text-base font-semibold text-primary mb-2">Thickness</h3>
						<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Thicker cuts require more raw material and processing time. Standard thicknesses (2-3 cm) are most economical.</p>
					</div>
					<div class="bg-card p-5 rounded-lg border border-border">
						<h3 class="font-display text-base font-semibold text-primary mb-2">Surface Finish</h3>
						<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Basic finishes like honed are most cost-effective, while polished and specialized finishes require additional processing.</p>
					</div>
					<div class="bg-card p-5 rounded-lg border border-border">
						<h3 class="font-display text-base font-semibold text-primary mb-2">Order Quantity</h3>
						<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Larger orders benefit from economies of scale in both production and shipping, resulting in significantly lower per-unit costs.</p>
					</div>
					<div class="bg-card p-5 rounded-lg border border-border">
						<h3 class="font-display text-base font-semibold text-primary mb-2">Custom Dimensions</h3>
						<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Standard tile sizes are most economical. Custom sizes and complex cuts may require specialized tooling.</p>
					</div>
					<div class="bg-card p-5 rounded-lg border border-border">
						<h3 class="font-display text-base font-semibold text-primary mb-2">Shipping Destination</h3>
						<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">Freight costs vary by destination. Mediterranean and Middle Eastern destinations benefit from proximity to Egyptian ports.</p>
					</div>
				</div>
				<div class="bg-primary rounded-lg p-8 md:p-12 text-center">
					<h3 class="font-display text-2xl md:text-3xl font-bold text-primary-foreground mb-4">Request Bulk Pricing</h3>
					<p class="font-body text-primary-foreground/80 max-w-xl mx-auto mb-6">Get a detailed quotation tailored to your project requirements, including stone type, quantities, finishes, and CIF delivery pricing.</p><a class="inline-flex items-center justify-center px-8 py-4 bg-card text-primary hover:text-primary font-body font-semibold rounded transition-all duration-300 hover:shadow-lg" href="/request-quote">Request a Quote</a>
				</div>
			</div>
		</section>

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
					<button class="testimonial-prev flex absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 bg-card border border-border rounded-full p-2 hover:bg-primary">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left w-5 h-5">
							<path d="m15 18-6-6 6-6"></path>
						</svg>
					</button>

					<button class="testimonial-next flex absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 bg-card border border-border rounded-full p-2 hover:bg-primary">
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

		<section id="gallery" class="section-padding bg-background">
			<div class="ast-container">
				<h2 class="font-display text-3xl md:text-4xl font-bold text-primary mb-4 text-center">Egyptian Limestone Project Gallery</h2>
				<p class="font-body text-foreground/70 text-center max-w-2xl mx-auto mb-12">Explore projects showcasing the versatility and beauty of Egyptian limestone worldwide.</p>
				<div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4">
					<div class="overflow-hidden rounded-lg cursor-pointer group md:col-span-2 md:row-span-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/gallery-1.jpg" alt="Grand mosque exterior built with Egyptian limestone cladding" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 min-h-[150px]" loading="lazy"></div>
					<div class="overflow-hidden rounded-lg cursor-pointer group "><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/gallery-2.jpg" alt="Modern residential villa with Egyptian limestone exterior walls" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 min-h-[150px]" loading="lazy"></div>
					<div class="overflow-hidden rounded-lg cursor-pointer group "><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/application-hotel.jpg" alt="Luxury hotel lobby with Egyptian limestone flooring" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 min-h-[150px]" loading="lazy"></div>
					<div class="overflow-hidden rounded-lg cursor-pointer group md:col-span-2 md:row-span-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/gallery-3.jpg" alt="Luxury shopping mall interior with Egyptian limestone flooring" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 min-h-[150px]" loading="lazy"></div>
					<div class="overflow-hidden rounded-lg cursor-pointer group "><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/application-facade.jpg" alt="Commercial building with Egyptian limestone facade" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 min-h-[150px]" loading="lazy"></div>
					<div class="overflow-hidden rounded-lg cursor-pointer group "><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/gallery-4.jpg" alt="Egyptian limestone blocks stacked at quarry ready for export" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 min-h-[150px]" loading="lazy"></div>
					<div class="overflow-hidden rounded-lg cursor-pointer group "><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/application-outdoor.jpg" alt="Outdoor terrace with Egyptian limestone paving" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 min-h-[150px]" loading="lazy"></div>
					<div class="overflow-hidden rounded-lg cursor-pointer group "><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/gallery-5.jpg" alt="Modern office lobby with Egyptian limestone reception desk" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 min-h-[150px]" loading="lazy"></div>
					<div class="overflow-hidden rounded-lg cursor-pointer group "><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/gallery-6.jpg" alt="Luxury villa pool area with Egyptian limestone paving" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 min-h-[150px]" loading="lazy"></div>
					<div class="overflow-hidden rounded-lg cursor-pointer group "><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/gallery-7.jpg" alt="Museum interior with Egyptian limestone walls" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 min-h-[150px]" loading="lazy"></div>
				</div>
			</div>
		</section>
		<section id="faq" class="section-padding section-alt">
			<div class="ast-container">
				<h2 class="font-display text-3xl md:text-4xl font-bold text-primary mb-4 text-center">Frequently Asked Questions</h2>
				<p class="font-body text-foreground/70 text-center max-w-2xl mx-auto mb-12">Find answers to common questions about Egyptian limestone, our products, and our export services.</p>


				<div class="max-w-3xl mx-auto space-y-3">
					<div class="space-y-3" data-orientation="vertical">

						<?php

						$faqs = [
							[
								"q" => "What is Egyptian limestone?",
								"a" => "Egyptian limestone is a natural sedimentary stone quarried from geological formations across Egypt, primarily in the Sinai Peninsula, the Eastern Desert, and the Nile Valley. It is composed mainly of calcium carbonate and is renowned for its warm cream, beige, and golden tones. Egyptian limestone has been used in construction for thousands of years, most famously in the construction of the Great Pyramids of Giza. Today, it is exported worldwide as a premium building material for facades, flooring, wall cladding, and paving applications."
							],
							[
								"q" => "Where is Egyptian limestone quarried?",
								"a" => "Egyptian limestone is quarried from several regions across Egypt. The main quarrying areas include the Sinai Peninsula (producing Sinai Pearl limestone), the Galala Mountains in the Eastern Desert (producing Galala limestone varieties), and the Menia region along the Nile Valley (producing Sunny limestone). Each region produces limestone with distinct characteristics, colors, and physical properties, giving architects and builders a diverse range of options from a single country of origin."
							],
							[
								"q" => "Is Egyptian limestone good for outdoor use?",
								"a" => "Yes, Egyptian limestone is excellent for outdoor applications. Many varieties, particularly those with lower water absorption rates and higher density, perform exceptionally well in exterior environments. Egyptian limestone is widely used for building facades, outdoor paving, pool surrounds, garden pathways, and terrace areas worldwide. For outdoor applications, we recommend brushed, sandblasted, or tumbled finishes which provide enhanced slip resistance and weather durability. Proper sealing can further extend the stone's outdoor lifespan."
							],
							[
								"q" => "How durable is Egyptian limestone?",
								"a" => "Egyptian limestone is remarkably durable, as demonstrated by the Pyramids of Giza which have stood for over 4,500 years. Modern Egyptian limestone products typically have compressive strength ratings between 40-130 MPa, making them suitable for high-traffic commercial and residential applications. With proper installation and maintenance, Egyptian limestone flooring, cladding, and paving can easily last for decades. The stone's durability varies by type — denser varieties like Galala and Sinai Pearl offer higher durability ratings."
							],
							[
								"q" => "What is the price of Egyptian limestone?",
								"a" => "Egyptian limestone pricing varies based on several factors including stone type, thickness, surface finish, order quantity, and shipping destination. As a direct Egyptian limestone supplier with our own quarry operations, we offer competitive FOB and CIF pricing. Generally, Egyptian limestone provides exceptional value compared to European limestone and marble alternatives, often at 30-50% lower cost for comparable quality. Contact us at info@egyptian-limestone.com for a detailed quotation based on your specific project requirements."
							],
							[
								"q" => "Can Egyptian limestone be exported worldwide?",
								"a" => "Absolutely. Egypt is one of the world's leading natural stone exporters, with well-established export infrastructure and logistics networks. We regularly ship Egyptian limestone to destinations across Europe, North America, the Middle East, Asia, Africa, and Oceania. Our export team handles all necessary documentation including certificates of origin, phytosanitary certificates, and customs paperwork. We ship from major Egyptian ports including Alexandria, Sokhna, and Damietta via full container loads (FCL) and less-than-container loads (LCL)."
							],
							[
								"q" => "What finishes are available for Egyptian limestone?",
								"a" => "Egyptian limestone can be processed in a comprehensive range of surface finishes to suit different aesthetic and functional requirements. Available finishes include: Honed (smooth matte surface), Polished (glossy reflective surface), Brushed (lightly textured antique feel), Tumbled (weathered rustic appearance), Sandblasted (rough textured surface for slip resistance), Bush-Hammered (heavy texture for exterior use), and Split-Face (natural cleft surface for feature walls). Each finish creates a distinct look and feel, and our processing facilities can accommodate custom finish requests."
							],
							[
								"q" => "Is sealing required for Egyptian limestone?",
								"a" => "While Egyptian limestone can be used without sealing in many applications, we generally recommend applying a high-quality penetrating sealer to enhance stain resistance and simplify maintenance, particularly for flooring, kitchen countertops, and outdoor installations. Sealing is especially important for lighter-colored varieties and polished finishes. For exterior cladding and building facades, sealing is typically optional but can provide additional protection against moisture penetration and biological growth in humid climates."
							],
							[
								"q" => "What is the minimum order quantity for Egyptian limestone?",
								"a" => "Our minimum order quantity varies depending on the product type and customization requirements. For standard Egyptian limestone tiles in stock sizes and finishes, we typically accept orders from one full container (approximately 20-27 tons depending on thickness). For custom-cut products, special finishes, or non-standard sizes, minimum orders may vary. We also accommodate sample orders for project approval purposes. Contact our sales team at info@egyptian-limestone.com to discuss your specific quantity requirements."
							],
							[
								"q" => "How long does it take to fulfill an Egyptian limestone order?",
								"a" => "Production lead times for Egyptian limestone orders typically range from 2-6 weeks depending on order volume, product specifications, and current production schedules. Standard products in common sizes and finishes can often be dispatched within 2-3 weeks. Custom-cut products, special finishes, and large-volume orders may require 4-6 weeks for production. Shipping transit times vary by destination: Mediterranean ports typically receive shipments within 5-10 days, while trans-oceanic destinations may take 3-6 weeks. We provide detailed production and shipping timelines with every quotation."
							],
						];

						?>



						<?php foreach ($faqs as $i => $faq): $id = $i + 1; ?>

							<div id="accordion-collapse-<?php echo $id; ?>" data-accordion="collapse" class="rounded-base overflow-hidden shadow-xs">
								<div class="bg-card rounded-lg border border-solid border-border overflow-hidden">
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

									<div id="accordion-body-<?php echo $id; ?>" class="hidden px-6 py-4" aria-labelledby="accordion-heading-<?php echo $id; ?>">
										<p class="font-body text-foreground/70 text-sm leading-relaxed mb-0">
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
		<section class="section-padding relative overflow-hidden bg-primary"><canvas class="absolute inset-0 w-full h-full pointer-events-none" width="2850" style="mix-blend-mode: screen;" height="1084"></canvas>
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