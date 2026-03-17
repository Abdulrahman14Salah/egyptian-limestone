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