<?php
// [TODO: Update $pageTitle and $pageDescription with client values from CLIENT_PROFILE.md]
$pageTitle = defined('SITE_NAME') ? SITE_NAME . ' | [PRIMARY_SERVICE] in [CITY], [STATE]' : '[SITE_NAME] | [PRIMARY_SERVICE] in [CITY], [STATE]';
$pageDescription = defined('SITE_TAGLINE') ? SITE_TAGLINE : '[TODO: Write homepage meta description using voice from docs/PRODUCT.md]';
include 'includes/header.php';
?>

    <!-- BEGIN: Hero Section -->
    <!-- [TODO: Replace all [PLACEHOLDER] values with client data from CLIENT_PROFILE.md and docs/PRODUCT.md] -->
    <section class="relative min-h-[90vh] flex items-center bg-brand-alabaster overflow-hidden pt-20" data-purpose="hero-container">

        <!-- Split Layout Background -->
        <div class="absolute inset-0 z-0 flex flex-col md:flex-row">
            <!-- Left Side (Alabaster Background for Text) -->
            <div class="w-full md:w-1/2 h-full bg-brand-alabaster relative z-10">
                <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#aaa 1px, transparent 1px); background-size: 20px 20px;"></div>
                <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-brand-cobalt/5 rounded-full blur-[120px]"></div>
            </div>

            <!-- Right Side (Hero Image) -->
            <div class="w-full md:w-1/2 h-full relative">
                <!-- [TODO: Replace with client hero image from assets/images/] -->
                <img alt="[TODO: Descriptive alt text for hero image]"
                     class="w-full h-full object-cover"
                     src="/assets/images/hero.jpg" />
                <div class="absolute inset-0 bg-brand-charcoal/5 mix-blend-multiply"></div>
                <div class="absolute inset-y-0 left-0 w-32 md:w-64 bg-gradient-to-r from-brand-alabaster via-brand-alabaster/80 to-transparent"></div>
            </div>
        </div>

        <!-- Content Container -->
        <div class="max-w-7xl mx-auto px-6 relative z-30 w-full grid md:grid-cols-2 gap-12 items-center">

            <!-- Text Content (Left) -->
            <div class="text-left md:pr-12 py-12 md:py-0">
                <div class="flex items-center gap-3 mb-6">
                    <span class="px-3 py-1 bg-brand-gold text-brand-charcoal text-[10px] font-bold tracking-[0.2em] uppercase rounded-sm">
                        Licensed & Insured
                    </span>
                    <span class="text-gray-500 text-xs font-mono tracking-widest uppercase">
                        <?php echo defined('SITE_LICENSE') ? SITE_LICENSE : '[LICENSE_NUMBER]'; ?>
                    </span>
                </div>

                <h1 class="text-6xl md:text-8xl font-extrabold leading-[0.9] tracking-tighter text-brand-charcoal mb-6">
                    <?php echo defined('SITE_NAME') ? strtoupper(SITE_NAME) : '[SITE_NAME]'; ?>
                </h1>

                <div class="flex flex-col gap-2 mb-8 border-l-4 border-brand-cobalt pl-6">
                    <h2 class="text-2xl text-brand-cobalt font-bold tracking-tight">
                        [TODO: Primary service headline from CLIENT_PROFILE.md]
                    </h2>
                    <p class="text-lg text-gray-500 font-medium uppercase tracking-widest">
                        [TODO: Service area cities from CLIENT_PROFILE.md → Service Area]
                    </p>
                </div>

                <p class="text-lg text-gray-600 font-light leading-relaxed mb-10 max-w-lg">
                    [TODO: 2–3 sentence lead paragraph. What the business does, who it serves, and the key outcome. Source from docs/PRODUCT.md voice.]
                </p>

                <div>
                    <a href="/contact.php"
                        class="inline-block px-8 py-4 bg-brand-cobalt hover:bg-brand-cobalt-dark text-white text-base font-bold tracking-widest transition-all duration-300 rounded-md shadow-lg shadow-brand-cobalt/20 hover:shadow-brand-cobalt/40 text-center">
                        [TODO: Primary CTA label from docs/PRODUCT.md]
                    </a>
                </div>

                <!-- Trust Badges — update numbers with real client data -->
                <div class="mt-12 flex items-center gap-8 border-t border-gray-200 pt-8">
                    <div>
                        <p class="text-2xl font-bold text-brand-charcoal">[RATING]</p>
                        <p class="text-[10px] text-gray-400 uppercase tracking-widest font-semibold">Google Rating</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-brand-charcoal">[YEARS]+</p>
                        <p class="text-[10px] text-gray-400 uppercase tracking-widest font-semibold">Years Local</p>
                    </div>
                </div>
            </div>

            <div class="hidden md:block"></div>
        </div>
    </section>
    <!-- END: Hero Section -->

    <!-- BEGIN: Core Features -->
    <!-- [TODO: Replace feature titles and descriptions with client-specific differentiators from docs/PRODUCT.md] -->
    <section class="py-24 bg-white border-t border-b border-gray-100 relative z-10" id="philosophy">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-12">
                <!-- Feature 1 -->
                <div class="space-y-6 group">
                    <div class="w-12 h-12 flex items-center justify-center bg-brand-cobalt/5 text-brand-cobalt rounded-md group-hover:bg-brand-cobalt group-hover:text-white transition-all duration-500">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold tracking-tight text-brand-charcoal">[Feature 1 Title]</h3>
                    <p class="text-gray-500 font-light leading-relaxed">[Feature 1 description — one concrete differentiator, no filler.]</p>
                </div>
                <!-- Feature 2 -->
                <div class="space-y-6 group">
                    <div class="w-12 h-12 flex items-center justify-center bg-brand-cobalt/5 text-brand-cobalt rounded-md group-hover:bg-brand-cobalt group-hover:text-white transition-all duration-500">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold tracking-tight text-brand-charcoal">[Feature 2 Title]</h3>
                    <p class="text-gray-500 font-light leading-relaxed">[Feature 2 description.]</p>
                </div>
                <!-- Feature 3 -->
                <div class="space-y-6 group">
                    <div class="w-12 h-12 flex items-center justify-center bg-brand-cobalt/5 text-brand-cobalt rounded-md group-hover:bg-brand-cobalt group-hover:text-white transition-all duration-500">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold tracking-tight text-brand-charcoal">[Feature 3 Title]</h3>
                    <p class="text-gray-500 font-light leading-relaxed">[Feature 3 description.]</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Core Features -->

    <!-- BEGIN: Services Section -->
    <!-- [TODO: Replace service cards with client services from CLIENT_PROFILE.md → Service Pages] -->
    <section class="py-24 bg-brand-alabaster" id="services">
        <div class="max-w-7xl mx-auto px-6">

            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 gap-6">
                <div class="max-w-3xl">
                    <span class="text-brand-cobalt font-mono text-xs tracking-[0.3em] uppercase mb-3 block">Expert Solutions</span>
                    <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-6 text-brand-charcoal leading-tight">
                        [TODO: Services section H2 — keyword-rich question format, sourced from docs/PRODUCT.md]
                    </h2>
                    <p class="text-lg text-gray-600 font-light leading-relaxed">
                        [TODO: 2–3 sentence services intro. Lead with primary service, include key differentiator and trust signal.]
                    </p>
                </div>
                <div>
                    <a class="inline-block px-8 py-4 bg-transparent border-2 border-brand-cobalt text-brand-cobalt text-xs font-bold tracking-widest hover:bg-brand-cobalt hover:text-white transition-all duration-300 rounded-md whitespace-nowrap"
                        href="/contact.php">
                        [TODO: Secondary CTA label]
                    </a>
                </div>
            </div>

            <!-- Featured Services Grid (3 columns) — replace with top 3 client services -->
            <div class="mb-20">
                <h3 class="text-xs font-bold tracking-widest text-gray-400 uppercase mb-8 pb-3 border-b border-gray-200">[TODO: Featured service group label]</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Service Card — duplicate this block for each featured service -->
                    <div class="group cursor-pointer bg-white border border-gray-200/80 rounded-xl overflow-hidden shadow-sm hover:shadow-md hover:-translate-y-1.5 transition-all duration-300">
                        <div class="aspect-[4/3] overflow-hidden relative border-b border-gray-100">
                            <img alt="[TODO: Service image alt text]"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                src="/assets/images/services/[service-name]/hero.jpg" />
                            <div class="absolute top-4 left-4">
                                <span class="text-[9px] tracking-[0.2em] bg-brand-gold text-brand-charcoal px-2.5 py-1 inline-block uppercase font-bold rounded-sm shadow">[Badge Label]</span>
                            </div>
                        </div>
                        <div class="p-6 space-y-4">
                            <h4 class="text-2xl font-bold text-brand-charcoal tracking-tight">[Service Name]</h4>
                            <p class="text-gray-500 text-sm leading-relaxed">[1–2 sentences. What the service is and the key outcome it delivers.]</p>
                            <div class="flex justify-between items-center pt-2">
                                <span class="text-[10px] tracking-widest text-brand-cobalt font-bold uppercase">[Price anchor or trust signal]</span>
                                <a href="/services/[service-name].php" class="text-brand-cobalt text-xs font-bold group-hover:translate-x-1 transition-transform inline-block">Learn More →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END: Services Section -->

    <!-- BEGIN: Portfolio / Our Work Section -->
    <!-- [TODO: Replace images with client project photos from assets/images/] -->
    <section class="py-24 bg-white border-t border-b border-gray-100" id="portfolio">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <span class="text-brand-cobalt font-mono text-xs tracking-[0.3em] uppercase mb-3 block">Completed Projects</span>
                <h2 class="text-5xl font-extrabold tracking-tighter mb-6 text-brand-charcoal">Our Work</h2>
                <p class="text-gray-500 max-w-2xl mx-auto font-light leading-relaxed">
                    [TODO: 1–2 sentences describing the portfolio. Specific to client services and service area.]
                </p>
            </div>

            <!-- [TODO: Replace placeholder images with real client project photos] -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 auto-rows-[300px]">
                <div class="md:col-span-8 md:row-span-2 relative group overflow-hidden rounded-xl border border-gray-100 shadow-sm">
                    <img alt="[TODO: Project alt text]"
                        class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105"
                        src="/assets/images/portfolio/featured.jpg" />
                    <div class="absolute inset-0 bg-brand-charcoal/30 group-hover:bg-brand-charcoal/20 transition-all"></div>
                    <div class="absolute bottom-8 left-8">
                        <span class="text-brand-gold text-[10px] font-bold tracking-widest mb-2 block uppercase">[Project Category]</span>
                        <h3 class="text-3xl font-bold tracking-tight text-white">[Project Title]</h3>
                    </div>
                </div>
                <div class="md:col-span-4 md:row-span-1 relative group overflow-hidden rounded-xl border border-gray-100 shadow-sm">
                    <img alt="[TODO: Project alt text]"
                        class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105"
                        src="/assets/images/portfolio/project-2.jpg" />
                    <div class="absolute inset-0 bg-brand-charcoal/35"></div>
                    <div class="absolute bottom-6 left-6">
                        <h3 class="text-xl font-bold text-white">[Project Title]</h3>
                    </div>
                </div>
                <div class="md:col-span-4 md:row-span-1 relative group overflow-hidden rounded-xl border border-gray-100 shadow-sm">
                    <img alt="[TODO: Project alt text]"
                        class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105"
                        src="/assets/images/portfolio/project-3.jpg" />
                    <div class="absolute inset-0 bg-brand-charcoal/35"></div>
                    <div class="absolute bottom-6 left-6">
                        <h3 class="text-xl font-bold text-white">[Project Title]</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Portfolio Section -->

    <!-- BEGIN: Testimonials Section -->
    <!-- [TODO: Replace with real client reviews. Minimum 3, ideally 6. Source from Google Reviews.] -->
    <section class="py-24 bg-brand-alabaster relative border-t border-b border-gray-200/50" id="testimonials">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-16">
                <span class="text-brand-cobalt font-mono text-xs tracking-[0.3em] uppercase mb-4 block">Community Approved</span>
                <h2 class="text-4xl md:text-6xl font-bold uppercase tracking-tight text-brand-charcoal">
                    [TODO: Testimonials headline — city + social proof angle]
                </h2>
            </div>

            <div class="relative">
                <div class="overflow-hidden py-4">
                    <div id="testimonialCarousel" class="flex transition-transform duration-500 ease-in-out">
                        <!-- Testimonial Card — duplicate for each review -->
                        <div class="flex-shrink-0 w-full md:w-1/3 px-4">
                            <div class="bg-white border border-gray-200/80 rounded-xl p-8 shadow-sm flex flex-col justify-between h-full min-h-[300px]">
                                <div class="space-y-6">
                                    <div class="flex gap-1 text-brand-gold">
                                        <?php for($i=0; $i<5; $i++) { ?>
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                        <?php } ?>
                                    </div>
                                    <p class="text-base font-light leading-relaxed italic text-gray-600">"[Verbatim customer review text.]"</p>
                                </div>
                                <div class="pt-6 border-t border-gray-100 mt-6">
                                    <p class="font-bold tracking-widest uppercase text-xs text-brand-charcoal">[Reviewer Name]</p>
                                    <p class="text-[10px] text-brand-cobalt font-mono uppercase">Verified Review – [City]</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button id="prevBtn" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 md:-translate-x-12 w-12 h-12 bg-white border border-gray-200 hover:bg-gray-50 text-brand-charcoal rounded-full flex items-center justify-center transition-all shadow-md z-10">
                    <svg class="w-6 h-6 text-brand-cobalt font-bold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button id="nextBtn" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 md:translate-x-12 w-12 h-12 bg-white border border-gray-200 hover:bg-gray-50 text-brand-charcoal rounded-full flex items-center justify-center transition-all shadow-md z-10">
                    <svg class="w-6 h-6 text-brand-cobalt font-bold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>

                <div id="carouselDots" class="flex justify-center gap-2 mt-8"></div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const carousel = document.getElementById('testimonialCarousel');
                const prevBtn = document.getElementById('prevBtn');
                const nextBtn = document.getElementById('nextBtn');
                const dotsContainer = document.getElementById('carouselDots');

                if (!carousel || !prevBtn || !nextBtn || !dotsContainer) return;

                // Update totalTestimonials to match the number of testimonial cards above
                const totalTestimonials = 1;
                let testimonialsPerView = window.innerWidth >= 768 ? 3 : 1;
                let maxIndex = Math.max(0, totalTestimonials - testimonialsPerView);
                let currentIndex = 0;

                function buildDots() {
                    dotsContainer.innerHTML = '';
                    const dotsCount = Math.ceil(totalTestimonials / testimonialsPerView);
                    for (let i = 0; i < dotsCount; i++) {
                        const btn = document.createElement('button');
                        btn.className = `carousel-dot w-2.5 h-2.5 rounded-full transition-all duration-300 ${i === 0 ? 'bg-brand-cobalt scale-125' : 'bg-gray-300 hover:bg-gray-400'}`;
                        btn.setAttribute('data-index', i);
                        btn.addEventListener('click', () => {
                            currentIndex = Math.min(i * testimonialsPerView, maxIndex);
                            updateCarousel();
                        });
                        dotsContainer.appendChild(btn);
                    }
                }

                function updateCarousel() {
                    currentIndex = Math.max(0, Math.min(currentIndex, maxIndex));
                    const percentage = testimonialsPerView > 0 ? (currentIndex * 100) / testimonialsPerView : 0;
                    carousel.style.transform = `translateX(-${percentage}%)`;

                    const activeDotIndex = Math.min(Math.floor(currentIndex / testimonialsPerView), dotsContainer.children.length - 1);
                    Array.from(dotsContainer.children).forEach((dot, index) => {
                        if (index === activeDotIndex) {
                            dot.classList.remove('bg-gray-300', 'hover:bg-gray-400');
                            dot.classList.add('bg-brand-cobalt', 'scale-125');
                        } else {
                            dot.classList.remove('bg-brand-cobalt', 'scale-125');
                            dot.classList.add('bg-gray-300', 'hover:bg-gray-400');
                        }
                    });
                }

                nextBtn.addEventListener('click', () => {
                    currentIndex = currentIndex < maxIndex ? Math.min(currentIndex + 1, maxIndex) : 0;
                    updateCarousel();
                });

                prevBtn.addEventListener('click', () => {
                    currentIndex = currentIndex > 0 ? Math.max(currentIndex - 1, 0) : maxIndex;
                    updateCarousel();
                });

                window.addEventListener('resize', () => {
                    const newPerView = window.innerWidth >= 768 ? 3 : 1;
                    if (newPerView !== testimonialsPerView) {
                        testimonialsPerView = newPerView;
                        maxIndex = Math.max(0, totalTestimonials - testimonialsPerView);
                        currentIndex = Math.min(currentIndex, maxIndex);
                        buildDots();
                        updateCarousel();
                    }
                });

                buildDots();
                updateCarousel();

                let autoTimer = setInterval(() => { nextBtn.click(); }, 5000);
                carousel.addEventListener('mouseenter', () => clearInterval(autoTimer));
                carousel.addEventListener('mouseleave', () => {
                    clearInterval(autoTimer);
                    autoTimer = setInterval(() => { nextBtn.click(); }, 5000);
                });
            });
        </script>
    </section>
    <!-- END: Testimonials Section -->

    <!-- BEGIN: Call to Action -->
    <section class="py-32 bg-white relative overflow-hidden border-t border-b border-gray-100" data-purpose="transformation-cta">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-brand-cobalt/5 blur-[120px] rounded-full pointer-events-none"></div>

        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
            <h2 class="text-5xl md:text-7xl font-extrabold tracking-tighter mb-8 text-brand-charcoal">
                [TODO: CTA headline — action-oriented, sourced from docs/PRODUCT.md voice]
            </h2>
            <p class="text-gray-500 text-lg font-light mb-12 max-w-2xl mx-auto">
                [TODO: 1–2 sentence CTA support copy.]
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="/contact.php"
                    class="px-12 py-5 bg-brand-cobalt text-white font-bold tracking-widest hover:bg-brand-cobalt-dark transition-all rounded-md shadow-lg shadow-brand-cobalt/25 text-center">
                    [TODO: Primary CTA label]
                </a>
                <a href="/gallery/"
                    class="px-12 py-5 border border-gray-300 hover:bg-gray-50 transition-all text-brand-charcoal font-bold tracking-widest rounded-md text-center">
                    View Our Gallery
                </a>
            </div>
        </div>
    </section>
    <!-- END: Call to Action -->

    <!-- BEGIN: FAQ Section -->
    <!-- [TODO: Replace FAQ questions and answers with client-specific content] -->
    <section class="py-32 bg-brand-alabaster" id="faq">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-20">
                <div>
                    <span class="text-brand-cobalt font-mono text-xs tracking-[0.3em] uppercase mb-4 block">[TODO: City/community label]</span>
                    <h2 class="text-5xl font-bold tracking-tight mb-8 text-brand-charcoal">Frequently<br/>Asked<br/>Questions</h2>
                    <p class="text-gray-400 max-w-sm leading-relaxed text-xs">
                        <?php echo defined('SITE_NAME') ? SITE_NAME : '[SITE_NAME]'; ?> — Licensed & Insured
                    </p>
                </div>
                <div class="space-y-8">
                    <!-- FAQ Item — duplicate for each question -->
                    <div class="border-b border-gray-200 pb-8">
                        <h4 class="text-lg font-bold mb-4 flex justify-between items-center group cursor-pointer text-brand-charcoal">
                            <span>[TODO: FAQ Question 1]</span>
                            <span class="text-brand-cobalt font-bold">+</span>
                        </h4>
                        <p class="text-gray-500 text-sm font-light leading-relaxed">[TODO: FAQ Answer 1 — factual, specific to this client's process or credentials.]</p>
                    </div>
                    <div class="border-b border-gray-200 pb-8">
                        <h4 class="text-lg font-bold mb-4 flex justify-between items-center group cursor-pointer text-brand-charcoal">
                            <span>[TODO: FAQ Question 2]</span>
                            <span class="text-brand-cobalt font-bold">+</span>
                        </h4>
                        <p class="text-gray-500 text-sm font-light leading-relaxed">[TODO: FAQ Answer 2]</p>
                    </div>
                    <div class="border-b border-gray-200 pb-8">
                        <h4 class="text-lg font-bold mb-4 flex justify-between items-center group cursor-pointer text-brand-charcoal">
                            <span>[TODO: FAQ Question 3]</span>
                            <span class="text-brand-cobalt font-bold">+</span>
                        </h4>
                        <p class="text-gray-500 text-sm font-light leading-relaxed">[TODO: FAQ Answer 3]</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: FAQ Section -->

<?php include 'includes/footer.php'; ?>
