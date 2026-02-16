<?php
$pageTitle = 'DT Painter | Premium Architectural Finishes Coral Springs';
$pageDescription = 'Professional interior and exterior painting services in Coral Springs. Discover high-durability finishes and eco-conscious pigments.';
include 'includes/header.php';
?>

    <!-- BEGIN: Hero Section -->
    <section class="relative min-h-[90vh] flex items-center bg-brand-dark overflow-hidden pt-20" data-purpose="hero-container">
        
        <!-- Split Layout Background -->
        <div class="absolute inset-0 z-0 flex flex-col md:flex-row">
            <!-- Left Side (Dark Background for Text) -->
            <div class="w-full md:w-1/2 h-full bg-brand-dark relative z-10">
                <!-- Subtle grid pattern overlay -->
                <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#333 1px, transparent 1px); background-size: 20px 20px;"></div>
                <!-- Gradient glow behind text -->
                <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-brand-red/5 rounded-full blur-[120px]"></div>
            </div>
            
            <!-- Right Side (Image) -->
            <div class="w-full md:w-1/2 h-full relative">
                <!-- Image of Painters on Exterior -->
                <img alt="Local Painters Restoring a Home in Coral Springs" 
                     class="w-full h-full object-cover"
                     src="https://res.cloudinary.com/dnwirrcev/image/upload/v1771100141/home-hero-image-dt-painter_jeyxdj.jpg" />
                
                <!-- Blending Overlays -->
                <div class="absolute inset-0 bg-brand-dark/20 mix-blend-multiply"></div>
                <!-- Gradient to blend left edge into dark background -->
                <div class="absolute inset-y-0 left-0 w-32 md:w-64 bg-gradient-to-r from-brand-dark via-brand-dark/80 to-transparent"></div>
            </div>
        </div>

        <!-- Content Container -->
        <div class="max-w-7xl mx-auto px-6 relative z-30 w-full grid md:grid-cols-2 gap-12 items-center">
            
            <!-- Text Content (Left) -->
            <div class="text-left md:pr-12 py-12 md:py-0">
                <div class="flex items-center gap-3 mb-6">
                    <span class="px-3 py-1 bg-brand-red text-white text-[10px] font-bold tracking-[0.2em] uppercase rounded-sm">
                        Licensed & Insured
                    </span>
                    <span class="text-gray-400 text-xs font-mono tracking-widest uppercase">
                        CC #13-P-18294-X
                    </span>
                </div>
                
                <h1 class="text-6xl md:text-8xl font-extrabold leading-[0.9] tracking-tighter text-white mb-6">
                    DT PAINTER
                </h1>
                
                <div class="flex flex-col gap-2 mb-8 border-l-4 border-brand-red pl-6">
                    <h2 class="text-2xl text-white font-bold tracking-tight">
                        Residential - Commercial Painting Company
                    </h2>
                    <p class="text-lg text-gray-400 font-medium uppercase tracking-widest">
                        Coral Springs • Parkland • Boca Raton • Fort Lauderdale • Pompano Beach
                    </p>
                </div>

                <p class="text-lg text-gray-300 font-light leading-relaxed mb-10 max-w-lg">
                    We specialize in transforming local homes with factory-finish cabinet refinishing, expert interior painting, and complete exterior restoration.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#quote"
                        class="px-8 py-4 bg-brand-red hover:bg-red-700 text-white text-base font-bold tracking-widest transition-all duration-300 rounded-sm shadow-lg hover:shadow-brand-red/50 text-center">
                        GET A FREE QUOTE
                    </a>
                    <a href="tel:<?php echo defined('SITE_PHONE') ? preg_replace('/[^0-9]/', '', SITE_PHONE) : '5551234567'; ?>"
                        class="group px-8 py-4 border border-white/10 hover:bg-white/5 text-white text-base font-bold tracking-widest transition-all duration-300 rounded-sm flex items-center justify-center gap-3">
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <?php echo defined('SITE_PHONE') ? SITE_PHONE : '(555) 123-4567'; ?>
                    </a>
                </div>
                
                <!-- Trust Badges -->
                <div class="mt-12 flex items-center gap-8 border-t border-white/10 pt-8">
                    <div>
                        <p class="text-2xl font-bold text-white">5.0</p>
                        <p class="text-[10px] text-gray-500 uppercase tracking-widest">Google Rating</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-white">10+</p>
                        <p class="text-[10px] text-gray-500 uppercase tracking-widest">Years Local</p>
                    </div>
                </div>
            </div>
            
            <!-- Empty column for image spacing on desktop -->
            <div class="hidden md:block"></div>
        </div>
    </section>
    <!-- END: Hero Section -->
    <!-- BEGIN: Core Features -->
    <section class="py-24 bg-brand-dark relative z-10" id="philosophy">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-12">
                <!-- Feature 1 -->
                <div class="space-y-6 group">
                    <div
                        class="w-12 h-12 flex items-center justify-center bg-brand-red/10 text-brand-red group-hover:bg-brand-red group-hover:text-white transition-all duration-500">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold tracking-tight text-white">Flawless Finish</h3>
                    <p class="text-gray-400 font-light leading-relaxed">Our meticulous prep work ensures smooth, long-lasting results on every surface.</p>
                </div>
                <!-- Feature 2 -->
                <div class="space-y-6 group">
                    <div
                        class="w-12 h-12 flex items-center justify-center bg-brand-red/10 text-brand-red group-hover:bg-brand-red group-hover:text-white transition-all duration-500">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold tracking-tight text-white">High-Quality Paints</h3>
                    <p class="text-gray-400 font-light leading-relaxed">We use premium, low-VOC brands like Sherwin-Williams and Benjamin Moore for safety and durability.</p>
                </div>
                <!-- Feature 3 -->
                <div class="space-y-6 group">
                    <div
                        class="w-12 h-12 flex items-center justify-center bg-brand-red/10 text-brand-red group-hover:bg-brand-red group-hover:text-white transition-all duration-500">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold tracking-tight text-white">Built to Last in FL Weather</h3>
                    <p class="text-gray-400 font-light leading-relaxed">Specialized coatings designed to withstand South Florida's sun, humidity, and rain.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Core Features -->
    <!-- BEGIN: Expert Color Consultation -->
    <section class="py-24 bg-[#0F0F0F]" id="palettes">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-end mb-16">
                <div class="max-w-3xl">
                    <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-6 text-white leading-tight">What Main Services Does DT Painter Offer in Coral Springs and Surrounding Areas?</h2>
                    <p class="text-xl text-gray-300 font-light leading-relaxed">
                        DT Painter specializes in <span class="text-white font-medium italic">factory-finish cabinet refinishing</span> using Italian 2K Polyurethane, UV-resistant <span class="text-white font-medium italic">exterior house painting</span>, and dust-free <span class="text-white font-medium italic">popcorn ceiling removal</span>. Licensed (CC #13-P-18294-X) and fully insured, we provide high-end surface restoration that typically saves South Florida homeowners <span class="text-brand-red font-bold">70-80%</span> compared to the cost of full remodeling or replacement.
                    </p>
                </div>
                <div class="hidden md:block">
                    <a class="px-8 py-4 bg-transparent border border-brand-red text-brand-red text-xs font-bold tracking-widest hover:bg-brand-red hover:text-white transition-all duration-300 rounded-sm"
                        href="#quote">
                        GET A FREE QUOTE
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-16">
                <!-- Service 1: Cabinet Refinishing -->
                <div class="group cursor-pointer">
                    <div class="aspect-[4/5] overflow-hidden relative mb-6 rounded-sm border border-white/5">
                        <img alt="Cabinet Refinishing in Coral Springs"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            src="https://res.cloudinary.com/dnwirrcev/image/upload/v1771098037/after-np-kitchen-cabinet-refinishing-b123-dt-painter_xdikz9.jpg" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-80"></div>
                        <div class="absolute bottom-6 left-6">
                            <span class="text-[10px] tracking-[0.2em] bg-brand-red px-2 py-0.5 mb-3 inline-block text-white uppercase font-bold">Showroom Finish</span>
                            <h4 class="text-2xl font-bold text-white tracking-tight">Cabinet<br/>Refinishing</h4>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <p class="text-gray-400 text-sm leading-relaxed">Italian 2K Polyurethane finish that cures harder than factory original. Save $20k+ vs replacement.</p>
                        <p class="text-[10px] tracking-widest text-brand-red font-bold uppercase">Starting at $5,000</p>
                    </div>
                </div>

                <!-- Service 2: Exterior Painting -->
                <div class="group cursor-pointer">
                    <div class="aspect-[4/5] overflow-hidden relative mb-6 rounded-sm border border-white/5">
                        <img alt="Exterior Painting Parkland"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            src="https://res.cloudinary.com/dnwirrcev/image/upload/v1771105122/after-np-exterior-painting-a123-dt-painter-coral-springs-fl_y5ax8n.jpg" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-80"></div>
                        <div class="absolute bottom-6 left-6">
                            <span class="text-[10px] tracking-[0.2em] bg-gray-800 px-2 py-0.5 mb-3 inline-block text-white uppercase font-bold">Weather Defense</span>
                            <h4 class="text-2xl font-bold text-white tracking-tight">Exterior<br/>Painting</h4>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <p class="text-gray-400 text-sm leading-relaxed">Full prep, stucco repair, and Sherwin-Williams Duration coatings built for FL weather.</p>
                        <p class="text-[10px] tracking-widest text-brand-red font-bold uppercase">Starting at $5,500</p>
                    </div>
                </div>

                <!-- Service 3: Popcorn Removal -->
                <div class="group cursor-pointer">
                    <div class="aspect-[4/5] overflow-hidden relative mb-6 rounded-sm border border-white/5">
                        <img alt="Popcorn Ceiling Removal Boca Raton"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            src="https://res.cloudinary.com/dnwirrcev/image/upload/v1771108107/np-popcorn-removal-a123-dt-painter-coral-springs-fl_xpwsee.jpg" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-80"></div>
                        <div class="absolute bottom-6 left-6">
                            <span class="text-[10px] tracking-[0.2em] bg-gray-800 px-2 py-0.5 mb-3 inline-block text-white uppercase font-bold">Modern Aesthetic</span>
                            <h4 class="text-2xl font-bold text-white tracking-tight">Popcorn<br/>Removal</h4>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <p class="text-gray-400 text-sm leading-relaxed">Dust-free scraping and Level 5 smooth finish for high-end residential modernization.</p>
                        <p class="text-[10px] tracking-widest text-brand-red font-bold uppercase">Instant Equity Boost</p>
                    </div>
                </div>

                <!-- Service 4: Interior Painting -->
                <div class="group cursor-pointer">
                    <div class="aspect-[4/5] overflow-hidden relative mb-6 rounded-sm border border-white/5">
                        <img alt="Interior Painting Fort Lauderdale"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            src="https://res.cloudinary.com/dnwirrcev/image/upload/v1771108014/np-interior-painting-a123-dt-painter-coral-springs-fl_r8qg2k.jpg" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-80"></div>
                        <div class="absolute bottom-6 left-6">
                            <span class="text-[10px] tracking-[0.2em] bg-gray-800 px-2 py-0.5 mb-3 inline-block text-white uppercase font-bold">Luxury Living</span>
                            <h4 class="text-2xl font-bold text-white tracking-tight">Interior<br/>Painting</h4>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <p class="text-gray-400 text-sm leading-relaxed">Meticulous prep and precision color application for walls, trim, and luxury estates.</p>
                        <p class="text-[10px] tracking-widest text-brand-red font-bold uppercase">5.0 Star Rated</p>
                    </div>
                </div>

                <!-- Service 5: Commercial Painting -->
                <div class="group cursor-pointer">
                    <div class="aspect-[4/5] overflow-hidden relative mb-6 rounded-sm border border-white/5">
                        <img alt="Commercial Painting Services"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            src="https://res.cloudinary.com/dnwirrcev/image/upload/v1771135866/np-commercial-painting-b123-dt-painter-coral-springs-fl_n6q6cl.jpg" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-80"></div>
                        <div class="absolute bottom-6 left-6">
                            <span class="text-[10px] tracking-[0.2em] bg-gray-800 px-2 py-0.5 mb-3 inline-block text-white uppercase font-bold">Brand Power</span>
                            <h4 class="text-2xl font-bold text-white tracking-tight">Commercial<br/>Painting</h4>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <p class="text-gray-400 text-sm leading-relaxed">Disruption-free painting for HOAs, retail, and offices. Night and weekend crews available.</p>
                        <p class="text-[10px] tracking-widest text-brand-red font-bold uppercase">Scalable Teams</p>
                    </div>
                </div>

                <!-- Service 6: Pressure Washing -->
                <div class="group cursor-pointer">
                    <div class="aspect-[4/5] overflow-hidden relative mb-6 rounded-sm border border-white/5">
                        <img alt="Pressure Washing Driveways"
                            class="w-full h-full object-cover object-right transition-transform duration-700 group-hover:scale-110"
                            src="https://res.cloudinary.com/dnwirrcev/image/upload/v1771134140/np-pressure-washing-a123-dt-painter-coral-springs-fl_ao1phm.jpg" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-80"></div>
                        <div class="absolute bottom-6 left-6">
                            <span class="text-[10px] tracking-[0.2em] bg-gray-800 px-2 py-0.5 mb-3 inline-block text-white uppercase font-bold">Instant Renewal</span>
                            <h4 class="text-2xl font-bold text-white tracking-tight">Pressure<br/>Washing</h4>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <p class="text-gray-400 text-sm leading-relaxed">High-pressure cleaning for driveways, patios, and roofs to remove mold and restore curb appeal.</p>
                        <p class="text-[10px] tracking-widest text-brand-red font-bold uppercase">Instant Restoration</p>
                    </div>
                </div>

                <!-- Service 7: Garage Door Restoration -->
                <div class="group cursor-pointer">
                    <div class="aspect-[4/5] overflow-hidden relative mb-6 rounded-sm border border-white/5">
                        <img alt="Garage Door Restoration"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            src="https://res.cloudinary.com/dnwirrcev/image/upload/v1771135163/dt-painter-garage-door-restoration-coral-springs-boca-raton-fl-002_rfjyfg.jpg" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-80"></div>
                        <div class="absolute bottom-6 left-6">
                            <span class="text-[10px] tracking-[0.2em] bg-gray-800 px-2 py-0.5 mb-3 inline-block text-white uppercase font-bold">Statement Entry</span>
                            <h4 class="text-2xl font-bold text-white tracking-tight">Garage Door<br/>Restoration</h4>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <p class="text-gray-400 text-sm leading-relaxed">Specialized industrial coatings and faux-wood graining to make metal doors look like premium timber.</p>
                        <p class="text-[10px] tracking-widest text-brand-red font-bold uppercase">The "Wow" Factor</p>
                    </div>
                </div>

                <!-- Service 8: Special Projects -->
                <div class="group cursor-pointer">
                    <div class="aspect-[4/5] overflow-hidden relative mb-6 rounded-sm border border-white/5">
                        <img alt="Special Painting Projects"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            src="https://res.cloudinary.com/dnwirrcev/image/upload/v1771138554/np-garage-floor-refinishing-a123-dt-painter_ytkblt.jpg" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-80"></div>
                        <div class="absolute bottom-6 left-6">
                            <span class="text-[10px] tracking-[0.2em] bg-gray-800 px-2 py-0.5 mb-3 inline-block text-white uppercase font-bold">Unique Vision</span>
                            <h4 class="text-2xl font-bold text-white tracking-tight">Special<br/>Projects</h4>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <p class="text-gray-400 text-sm leading-relaxed">Garage floor refinishing, wallpaper removal, drywall repair, and bespoke decorative finishes for unique home requirements.</p>
                        <p class="text-[10px] tracking-widest text-brand-red font-bold uppercase">Tailored Quotes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Curated Color Palettes -->
    <!-- BEGIN: Our Work -->
    <section class="py-24 bg-brand-dark" id="portfolio">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-5xl font-extrabold tracking-tighter mb-6 text-white">Our Work</h2>
                <p class="text-gray-400 max-w-2xl mx-auto font-light leading-relaxed">
                    Browse our latest residential and commercial painting projects in Coral Springs. From cabinets to full exterior repaints.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 auto-rows-[300px]">
                <!-- Large Item -->
                <div class="md:col-span-8 md:row-span-2 relative group overflow-hidden">
                    <img alt="Aria Financial District"
                        class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105"
                        src="https://res.cloudinary.com/dnwirrcev/image/upload/v1771140204/home-our-work-section-image-dt-painter_ddze02.jpg" />
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-all"></div>
                    <div class="absolute bottom-8 left-8">
                        <span
                            class="text-brand-red text-[10px] font-bold tracking-widest mb-2 block uppercase">Curb Appeal</span>
                        <h3 class="text-3xl font-bold tracking-tight text-white">Estate Transformation</h3>
                    </div>
                </div>
                <!-- Medium Item -->
                <div class="md:col-span-4 md:row-span-1 relative group overflow-hidden">
                    <img alt="Cabinet Refinishing Coral Springs"
                        class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105"
                        src="https://res.cloudinary.com/dnwirrcev/image/upload/v1771173528/home-our-work-section2-image-dt-painter-coral-springs-fl_whe0ni.jpg" />
                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="absolute bottom-6 left-6">
                        <h3 class="text-xl font-bold text-white">Showroom Kitchen</h3>
                    </div>
                </div>
                <!-- Medium Item -->
                <div class="md:col-span-4 md:row-span-1 relative group overflow-hidden">
                    <img alt="Garage Door Restoration"
                        class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105"
                        src="https://res.cloudinary.com/dnwirrcev/image/upload/v1771174116/home-our-work-section3-image-dt-painter-coral-springs-fl_gn2bdh.jpg" />
                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="absolute bottom-6 left-6">
                        <h3 class="text-xl font-bold text-white">Architectural Entryway</h3>
                    </div>
                </div>
                <!-- Wide Item -->
                <div class="md:col-span-12 md:row-span-1 relative group overflow-hidden">
                    <img alt="Popcorn Ceiling Removal"
                        class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105"
                        src="https://res.cloudinary.com/dnwirrcev/image/upload/v1771174535/home-our-work-section-image4-dt-painter-coral-springs-fl_p3d5ks.jpg" />
                    <div class="absolute inset-0 bg-black/50"></div>
                    <div class="absolute bottom-8 left-12">
                        <span class="text-brand-red text-[10px] font-bold tracking-widest mb-2 block uppercase">Modern
                            Living</span>
                        <h3 class="text-3xl font-bold tracking-tight text-white">Level 5 Smooth Finish</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Premium Projects Grid -->
    <!-- BEGIN: Call to Action / Transformation -->
    <section class="py-32 bg-brand-dark relative border-t border-white/5" id="testimonials">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-20">
                <span
                    class="text-brand-red font-['JetBrains_Mono'] text-xs tracking-[0.5em] uppercase mb-4 block">Community
                    Approved</span>
                <h2 class="text-5xl md:text-7xl font-['Archivo_Black'] uppercase tracking-tighter text-white">
                    Why Coral Springs<br />Residents Choose Us</h2>
            </div>

            <!-- Testimonials Carousel -->
            <div class="relative">
                <!-- Carousel Container -->
                <div class="overflow-hidden">
                    <div id="testimonialCarousel" class="flex transition-transform duration-500 ease-in-out">
                        <!-- Testimonial 1 -->
                        <div class="flex-shrink-0 w-full md:w-1/3 px-4">
                            <div class="space-y-6 h-full">
                                <div class="flex gap-1 text-brand-red mb-4">
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                </div>
                                <p class="text-xl font-light leading-relaxed italic text-white">"Truly we couldn't afford to replace them completely. It's been at least 4 months since he painted them and they still look like factory finish!"</p>
                                <div class="pt-4">
                                    <p class="font-bold tracking-widest uppercase text-sm text-white">AB Designs</p>
                                    <p class="text-xs text-brand-red font-['JetBrains_Mono']">Verified Review – Coral Springs</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="flex-shrink-0 w-full md:w-1/3 px-4">
                            <div class="space-y-6 h-full">
                                <div class="flex gap-1 text-brand-red mb-4">
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                </div>
                                <p class="text-xl font-light leading-relaxed italic text-white">"Six week project that involved smoothing all the walls and ceilings, and then painting my entire home. We are 100% satisfied."</p>
                                <div class="pt-4">
                                    <p class="font-bold tracking-widest uppercase text-sm text-white">Lori Lyons</p>
                                    <p class="text-xs text-brand-red font-['JetBrains_Mono']">Verified Review – Parkland</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="flex-shrink-0 w-full md:w-1/3 px-4">
                            <div class="space-y-6 h-full">
                                <div class="flex gap-1 text-brand-red mb-4">
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                </div>
                                <p class="text-xl font-light leading-relaxed italic text-white">"They took the time to properly cover and mask off all areas... the paint came out beautifully and they left the site as clean as it was before they arrived."</p>
                                <div class="pt-4">
                                    <p class="font-bold tracking-widest uppercase text-sm text-white">Rayna Shandler</p>
                                    <p class="text-xs text-brand-red font-['JetBrains_Mono']">Verified Review – South Florida</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 4 -->
                        <div class="flex-shrink-0 w-full md:w-1/3 px-4">
                            <div class="space-y-6 h-full">
                                <div class="flex gap-1 text-brand-red mb-4">
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                </div>
                                <p class="text-xl font-light leading-relaxed italic text-white">"Transformative results for our Coral Springs property. Their proprietary coatings handled the salinity perfectly. A masterclass in luxury execution."</p>
                                <div class="pt-4">
                                    <p class="font-bold tracking-widest uppercase text-sm text-white">Elena Rodriguez</p>
                                    <p class="text-xs text-brand-red font-['JetBrains_Mono']">Estate Owner, Coral Springs</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 5 -->
                        <div class="flex-shrink-0 w-full md:w-1/3 px-4">
                            <div class="space-y-6 h-full">
                                <div class="flex gap-1 text-brand-red mb-4">
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                </div>
                                <p class="text-xl font-light leading-relaxed italic text-white">"Professional and detail-oriented team. They painted our 4,000 sq ft home and it looks absolutely stunning. Highly recommend!"</p>
                                <div class="pt-4">
                                    <p class="font-bold tracking-widest uppercase text-sm text-white">Michael Thompson</p>
                                    <p class="text-xs text-brand-red font-['JetBrains_Mono']">Verified Review – Boca Raton</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 6 -->
                        <div class="flex-shrink-0 w-full md:w-1/3 px-4">
                            <div class="space-y-6 h-full">
                                <div class="flex gap-1 text-brand-red mb-4">
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                </div>
                                <p class="text-xl font-light leading-relaxed italic text-white">"Best painting company in South Florida! The cabinet refinishing exceeded our expectations. Saved us thousands compared to replacement!"</p>
                                <div class="pt-4">
                                    <p class="font-bold tracking-widest uppercase text-sm text-white">Sarah Martinez</p>
                                    <p class="text-xs text-brand-red font-['JetBrains_Mono']">Verified Review – Fort Lauderdale</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <button id="prevBtn" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 md:-translate-x-12 w-12 h-12 bg-brand-red hover:bg-red-700 text-white rounded-full flex items-center justify-center transition-all shadow-lg z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button id="nextBtn" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 md:translate-x-12 w-12 h-12 bg-brand-red hover:bg-red-700 text-white rounded-full flex items-center justify-center transition-all shadow-lg z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>

                <!-- Dots Indicator -->
                <div class="flex justify-center gap-2 mt-8">
                    <button class="carousel-dot w-2 h-2 rounded-full bg-brand-red transition-all" data-index="0"></button>
                    <button class="carousel-dot w-2 h-2 rounded-full bg-gray-600 transition-all" data-index="1"></button>
                </div>
            </div>
        </div>

        <!-- Carousel JavaScript -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const carousel = document.getElementById('testimonialCarousel');
                const prevBtn = document.getElementById('prevBtn');
                const nextBtn = document.getElementById('nextBtn');
                const dots = document.querySelectorAll('.carousel-dot');

                let currentIndex = 0;
                const totalTestimonials = 6;
                const testimonialsPerView = window.innerWidth >= 768 ? 3 : 1;
                const maxIndex = totalTestimonials - testimonialsPerView;

                function updateCarousel() {
                    const percentage = (currentIndex * 100) / testimonialsPerView;
                    carousel.style.transform = `translateX(-${percentage}%)`;

                    // Update dots
                    const dotIndex = Math.floor(currentIndex / testimonialsPerView);
                    dots.forEach((dot, index) => {
                        if (index === dotIndex) {
                            dot.classList.remove('bg-gray-600');
                            dot.classList.add('bg-brand-red');
                        } else {
                            dot.classList.remove('bg-brand-red');
                            dot.classList.add('bg-gray-600');
                        }
                    });
                }

                nextBtn.addEventListener('click', () => {
                    if (currentIndex < maxIndex) {
                        currentIndex++;
                        updateCarousel();
                    }
                });

                prevBtn.addEventListener('click', () => {
                    if (currentIndex > 0) {
                        currentIndex--;
                        updateCarousel();
                    }
                });

                dots.forEach((dot, index) => {
                    dot.addEventListener('click', () => {
                        currentIndex = index * testimonialsPerView;
                        updateCarousel();
                    });
                });

                // Auto-advance carousel every 5 seconds
                setInterval(() => {
                    currentIndex = (currentIndex + 1) % (maxIndex + 1);
                    updateCarousel();
                }, 5000);
            });
        </script>
    </section>
    <section class="py-32 bg-[#050505] relative overflow-hidden" data-purpose="transformation-cta">
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-brand-red/5 blur-[120px] rounded-full pointer-events-none">
        </div>
        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
            <h2 class="text-5xl md:text-7xl font-extrabold tracking-tighter mb-8 text-white">
                Ready to Refresh <br />
                <span class="text-brand-red">Your Home?</span>
            </h2>
            <p class="text-gray-400 text-lg font-light mb-12 max-w-2xl mx-auto">
                Call our team today to discuss your vision. We provide detailed, no-obligation quotes for all projects.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <button
                    class="px-12 py-5 bg-brand-red text-white font-bold tracking-widest hover:bg-red-700 transition-all rounded-sm shadow-[0_0_40px_rgba(255,30,30,0.3)]">
                    Get a Free Quote
                </button>
                <button
                    class="px-12 py-5 border border-white/20 hover:bg-white/5 transition-all text-white font-bold tracking-widest rounded-sm">
                    View Our Services
                </button>
            </div>
        </div>
    </section>
    <section class="py-32 bg-brand-dark border-t border-white/5" id="faq">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-20">
                <div>
                    <span
                        class="text-brand-red font-['JetBrains_Mono'] text-xs tracking-[0.5em] uppercase mb-4 block">Coral Springs Community</span>
                    <h2 class="text-5xl font-['Archivo_Black'] uppercase tracking-tighter mb-8 text-white">Frequently<br/>Asked<br/>Questions
                    </h2>
                    <p class="text-gray-500 max-w-sm leading-relaxed">Licensed & Insured CC #13-P-18294-X</p>
                </div>
                <div class="space-y-8">
                    <div class="border-b border-white/10 pb-8">
                        <h4 class="text-lg font-bold mb-4 flex justify-between items-center group cursor-pointer text-white">
                            <span>Licensed &amp; Insured Status</span>
                            <span class="text-brand-red">+</span>
                        </h4>
                        <p class="text-gray-400 text-sm font-light leading-relaxed">DT Painter maintains full
                            comprehensive liability and workers' compensation coverage exceeding Florida state
                            requirements for luxury architectural projects.</p>
                    </div>
                    <div class="border-b border-white/10 pb-8">
                        <h4 class="text-lg font-bold mb-4 flex justify-between items-center group cursor-pointer text-white">
                            <span>Consultation Process</span>
                            <span class="text-brand-red">+</span>
                        </h4>
                        <p class="text-gray-400 text-sm font-light leading-relaxed">Our multi-phase discovery includes
                            site analysis, light-mapping, and pigment durability testing to ensure the finish
                            complements the environment.</p>
                    </div>
                    <div class="border-b border-white/10 pb-8">
                        <h4 class="text-lg font-bold mb-4 flex justify-between items-center group cursor-pointer text-white">
                            <span>Project Timelines for Coral Springs</span>
                            <span class="text-brand-red">+</span>
                        </h4>
                        <p class="text-gray-400 text-sm font-light leading-relaxed">Timeline variables include surface
                            prep complexity and atmospheric conditions. Typically, a full exterior transformation
                            requires 3-5 weeks of precision application.</p>
                    </div>
                    <div class="border-b border-white/10 pb-8">
                        <h4 class="text-lg font-bold mb-4 flex justify-between items-center group cursor-pointer text-white">
                            <span>Maintenance of Specialty Coatings</span>
                            <span class="text-brand-red">+</span>
                        </h4>
                        <p class="text-gray-400 text-sm font-light leading-relaxed">Our proprietary finishes are
                            self-cleaning and hydrophobic. Annual low-pressure rinsing is recommended to maintain the
                            original refractive index.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Call to Action -->

<?php include 'includes/footer.php'; ?>
