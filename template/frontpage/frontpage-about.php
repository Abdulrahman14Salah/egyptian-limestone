<section id="about" class="section-padding bg-background">
    <div class="ast-container">
        <h2 class="font-display text-3xl md:text-4xl font-bold text-primary mb-8 text-center">Introduction to Egyptian Limestone</h2>
        <div class="grid md:grid-cols-2 gap-8 lg:gap-12 mb-8">
            <div class="flex flex-col justify-center">
                <p class="font-body text-foreground/80 leading-relaxed mb-4">Egyptian limestone is one of the world's most sought-after natural building materials, prized for its exceptional durability, timeless beauty, and remarkable versatility. Quarried from the ancient geological formations of Egypt — primarily in the Sinai Peninsula, the Eastern Desert, and the Nile Valley — this natural stone has been a cornerstone of architecture and construction for thousands of years.</p>
                <p class="font-body text-foreground/80 leading-relaxed">The global demand for Egyptian limestone continues to grow steadily as architects, builders, and developers recognize its unique combination of aesthetic appeal and structural integrity. Egyptian limestone quarries produce a remarkable range of colors, from soft creams and warm beiges to rich golden tones, making it an incredibly flexible material for both interior and exterior applications.</p>
            </div>
            <div class="relative h-full min-h-[300px] rounded-lg overflow-hidden group" data-slider>

                <img data-slide src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/gallery-4.jpg"
                    alt="Egyptian limestone quarry blocks ready for export"
                    class="absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-100"
                    loading="lazy"
                    width="555"
                    height="323">

                <img data-slide src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/gallery-1.jpg"
                    alt="Grand mosque exterior clad with Egyptian limestone"
                    class="absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-0"
                    loading="lazy"
                    width="555"
                    height="323">

                <img data-slide src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/gallery-2.jpg"
                    alt="Modern residential villa with Egyptian limestone walls"
                    class="absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-0"
                    loading="lazy"
                    width="555"
                    height="323">

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
                    document.addEventListener("DOMContentLoaded", function() {
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
                                showSlide((current + 1) % slides.length);
                            }

                            function prev() {
                                showSlide((current - 1 + slides.length) % slides.length);
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