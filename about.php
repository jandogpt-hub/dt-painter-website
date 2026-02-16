<?php
/**
 * About Us Page
 * Showcases DT Painter's story, expertise, and commitment to quality
 */
$pageTitle = 'About DT Painter | Licensed Cabinet Refinishing Experts in Coral Springs';
$pageDescription = 'Meet Damian Toffani and the DT Painter team. Licensed, insured, and specializing in factory-finish cabinet refinishing using Italian 2K Polyurethane for Coral Springs and Parkland homes.';
include 'includes/header.php';
?>

    <!-- BEGIN: Hero Section -->
    <section class="relative min-h-[70vh] flex items-center bg-brand-dark overflow-hidden pt-20">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img alt="DT Painter Team in Coral Springs" 
                 class="w-full h-full object-cover opacity-20"
                 src="https://res.cloudinary.com/dnwirrcev/image/upload/v1771100141/home-hero-image-dt-painter_jeyxdj.jpg" />
            <div class="absolute inset-0 bg-gradient-to-r from-brand-dark via-brand-dark/95 to-brand-dark/80"></div>
        </div>

        <!-- Content Container -->
        <div class="max-w-7xl mx-auto px-6 relative z-10 w-full py-20">
            <div class="max-w-4xl">
                <span class="px-3 py-1 bg-brand-red text-white text-[10px] font-bold tracking-[0.2em] uppercase rounded-sm inline-block mb-6">
                    Licensed & Insured • CC #13-P-18294-X
                </span>
                
                <h1 class="text-5xl md:text-7xl font-extrabold leading-[0.95] tracking-tighter text-white mb-8">
                    More Than Paint.<br/>
                    <span class="text-brand-red">Surface Transformation.</span>
                </h1>
                
                <p class="text-xl text-gray-300 font-light leading-relaxed max-w-2xl">
                    We're not your typical painting contractor. DT Painter specializes in <span class="text-white font-medium">factory-finish cabinet refinishing</span> and high-end surface restoration that saves South Florida homeowners tens of thousands compared to full replacement.
                </p>
            </div>
        </div>
    </section>
    <!-- END: Hero Section -->

    <!-- BEGIN: Owner Story -->
    <section class="py-24 bg-brand-dark border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Image Side -->
                <div class="relative">
                    <div class="aspect-[4/5] relative overflow-hidden rounded-sm border border-white/10">
                        <img alt="Damian Toffani - Owner of DT Painter"
                             class="w-full h-full object-cover"
                             src="https://res.cloudinary.com/dnwirrcev/image/upload/v1771098037/after-np-kitchen-cabinet-refinishing-b123-dt-painter_xdikz9.jpg" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <!-- Stats Overlay -->
                    <div class="absolute -bottom-8 -right-8 bg-brand-red p-8 rounded-sm shadow-2xl">
                        <p class="text-5xl font-bold text-white mb-2">10+</p>
                        <p class="text-xs text-white/80 uppercase tracking-widest">Years Local</p>
                    </div>
                </div>

                <!-- Content Side -->
                <div>
                    <span class="text-brand-red font-mono text-xs tracking-[0.5em] uppercase mb-4 block">Meet the Owner</span>
                    <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-6 text-white">
                        Damian Toffani: <br/>
                        From Painter to <span class="text-brand-red">Surface Specialist</span>
                    </h2>
                    
                    <div class="space-y-6 text-gray-300 leading-relaxed">
                        <p>
                            When Damian Toffani started DT Painter over a decade ago, he was just another painting contractor competing on price. But after seeing homeowners disappointed with peeling cabinet paint and watching $50,000 kitchen remodels drain budgets, he made a decision: <span class="text-white font-medium">master the science of industrial coatings.</span>
                        </p>
                        
                        <p>
                            Today, DT Painter has evolved into Coral Springs' premier <span class="text-white font-medium">surface renovation specialist</span>. We don't just "paint cabinets"—we refinish them using <span class="text-white font-medium">Italian 2K Polyurethane</span> (Renner and Milesi) that cures harder than the original factory finish.
                        </p>
                        
                        <p>
                            This isn't about being the cheapest bid. It's about delivering results that let a family in Eagle Trace avoid a $50,000 kitchen gut job and instead invest $6,500 for a transformation that looks factory-new and lasts 10+ years.
                        </p>

                        <div class="pt-8 border-t border-white/10 mt-8">
                            <p class="text-sm text-gray-400 italic">
                                "We bridge the gap between a 'guy with a truck' and a general contractor—offering the licensing, insurance, and technical expertise of the latter, with the specialized focus of the former."
                            </p>
                            <p class="text-sm text-white font-bold mt-4">— Damian Toffani, Owner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Owner Story -->

    <!-- BEGIN: Mission & Values -->
    <section class="py-24 bg-[#0F0F0F]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-6 text-white">
                    Why We Do What We Do
                </h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto font-light leading-relaxed">
                    Our mission is to save South Florida homeowners from the chaos and cost of full construction by proving you don't need to gut your kitchen to get a new one.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-12">
                <!-- Value 1 -->
                <div class="space-y-6 group">
                    <div class="w-16 h-16 flex items-center justify-center bg-brand-red/10 text-brand-red group-hover:bg-brand-red group-hover:text-white transition-all duration-500 rounded-sm">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold tracking-tight text-white">Technical Mastery</h3>
                    <p class="text-gray-400 font-light leading-relaxed">
                        We don't use Home Depot trim paint on cabinets. We use <span class="text-white">Renner and Milesi 2K Polyurethane</span>—industrial coatings that cure chemically, creating a surface harder and more durable than factory original.
                    </p>
                </div>

                <!-- Value 2 -->
                <div class="space-y-6 group">
                    <div class="w-16 h-16 flex items-center justify-center bg-brand-red/10 text-brand-red group-hover:bg-brand-red group-hover:text-white transition-all duration-500 rounded-sm">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold tracking-tight text-white">Owner-Operated</h3>
                    <p class="text-gray-400 font-light leading-relaxed">
                        When you hire DT Painter, you're working directly with Damian. No sales reps. No subcontractors. Just a licensed professional who personally oversees every factory-finish application.
                    </p>
                </div>

                <!-- Value 3 -->
                <div class="space-y-6 group">
                    <div class="w-16 h-16 flex items-center justify-center bg-brand-red/10 text-brand-red group-hover:bg-brand-red group-hover:text-white transition-all duration-500 rounded-sm">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold tracking-tight text-white">Value-Based Pricing</h3>
                    <p class="text-gray-400 font-light leading-relaxed">
                        We price against the cost of <span class="text-white">replacement</span>, not against other painters. A $6,500 cabinet refinish that saves you from a $30,000 remodel? That's the competitive benchmark.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Mission & Values -->

    <!-- BEGIN: What Makes Us Different -->
    <section class="py-24 bg-brand-dark border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-16">
                <span class="text-brand-red font-mono text-xs tracking-[0.5em] uppercase mb-4 block">The DT Difference</span>
                <h2 class="text-4xl md:text-5xl font-bold tracking-tight text-white max-w-3xl">
                    What Sets Us Apart From Every Other Painting Contractor
                </h2>
            </div>

            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Differentiator 1 -->
                <div class="bg-[#0F0F0F] border border-white/5 p-8 rounded-sm hover:border-brand-red/30 transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-brand-red/10 text-brand-red rounded-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white mb-3">Factory-Finish Expertise</h3>
                            <p class="text-gray-400 leading-relaxed">
                                We specialize in <span class="text-white">2K Polyurethane</span> systems from Renner and Milesi—Italian coatings used by high-end furniture manufacturers. This isn't latex paint. It's a two-component chemical cure that creates a surface harder than the original wood.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Differentiator 2 -->
                <div class="bg-[#0F0F0F] border border-white/5 p-8 rounded-sm hover:border-brand-red/30 transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-brand-red/10 text-brand-red rounded-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white mb-3">Licensed, Insured & Local</h3>
                            <p class="text-gray-400 leading-relaxed">
                                We're not a lead-gen platform that sells your info to 5 contractors. We're a <span class="text-white">licensed contractor (CC #13-P-18294-X)</span> with full insurance, A+ BBB rating, and 83+ five-star reviews from real Coral Springs and Parkland neighbors.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Differentiator 3 -->
                <div class="bg-[#0F0F0F] border border-white/5 p-8 rounded-sm hover:border-brand-red/30 transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-brand-red/10 text-brand-red rounded-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white mb-3">Built for Florida Weather</h3>
                            <p class="text-gray-400 leading-relaxed">
                                The Florida sun is brutal. We use <span class="text-white">UV-resistant, elastomeric coatings</span> (Sherwin-Williams Duration, Loxon Primer) that flex with stucco movement and seal hairline cracks before they become costly water intrusion problems.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Differentiator 4 -->
                <div class="bg-[#0F0F0F] border border-white/5 p-8 rounded-sm hover:border-brand-red/30 transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-brand-red/10 text-brand-red rounded-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white mb-3">The Renovation Alternative</h3>
                            <p class="text-gray-400 leading-relaxed">
                                Our entire business model is built around <span class="text-white">saving homeowners from unnecessary construction</span>. Cabinet refinishing instead of replacement. Popcorn removal instead of drop ceilings. Protection instead of replacement.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: What Makes Us Different -->

    <!-- BEGIN: Service Areas & Certifications -->
    <section class="py-24 bg-[#0F0F0F] border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16">
                <!-- Service Areas -->
                <div>
                    <h3 class="text-3xl font-bold text-white mb-8">
                        Proudly Serving <span class="text-brand-red">South Florida</span>
                    </h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-brand-red rounded-full"></div>
                            <span class="text-gray-300">Coral Springs</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-brand-red rounded-full"></div>
                            <span class="text-gray-300">Parkland</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-brand-red rounded-full"></div>
                            <span class="text-gray-300">Coconut Creek</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-brand-red rounded-full"></div>
                            <span class="text-gray-300">Margate</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-brand-red rounded-full"></div>
                            <span class="text-gray-300">Tamarac</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-brand-red rounded-full"></div>
                            <span class="text-gray-300">Boca Raton</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-brand-red rounded-full"></div>
                            <span class="text-gray-300">Fort Lauderdale</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-brand-red rounded-full"></div>
                            <span class="text-gray-300">Pompano Beach</span>
                        </div>
                    </div>
                </div>

                <!-- Credentials -->
                <div>
                    <h3 class="text-3xl font-bold text-white mb-8">
                        Licensed & <span class="text-brand-red">Trusted</span>
                    </h3>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 flex-shrink-0 flex items-center justify-center bg-brand-red/10 text-brand-red rounded-sm">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-white font-bold">FL License CC #13-P-18294-X</p>
                                <p class="text-sm text-gray-400">State-Licensed General Contractor</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 flex-shrink-0 flex items-center justify-center bg-brand-red/10 text-brand-red rounded-sm">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-white font-bold">5.0 Stars (83+ Reviews)</p>
                                <p class="text-sm text-gray-400">Google, Facebook & BBB Verified</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 flex-shrink-0 flex items-center justify-center bg-brand-red/10 text-brand-red rounded-sm">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-white font-bold">Fully Insured</p>
                                <p class="text-sm text-gray-400">Comprehensive Liability & Workers' Comp</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 flex-shrink-0 flex items-center justify-center bg-brand-red/10 text-brand-red rounded-sm">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-white font-bold">10+ Years Local Experience</p>
                                <p class="text-sm text-gray-400">Serving Coral Springs Since 2014</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Service Areas & Certifications -->

    <!-- BEGIN: CTA Section -->
    <section class="py-32 bg-brand-dark relative overflow-hidden border-t border-white/5">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-brand-red/5 blur-[120px] rounded-full pointer-events-none"></div>
        
        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
            <h2 class="text-5xl md:text-6xl font-extrabold tracking-tighter mb-8 text-white">
                Ready to Transform <br/>
                <span class="text-brand-red">Your Space?</span>
            </h2>
            <p class="text-gray-400 text-lg font-light mb-12 max-w-2xl mx-auto">
                Get a detailed, no-obligation quote for your cabinet refinishing, exterior painting, or popcorn removal project. Licensed, insured, and trusted by 83+ South Florida families.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="tel:<?php echo defined('SITE_PHONE') ? preg_replace('/[^0-9]/', '', SITE_PHONE) : '9542507399'; ?>"
                   class="px-12 py-5 bg-brand-red text-white font-bold tracking-widest hover:bg-red-700 transition-all rounded-sm shadow-[0_0_40px_rgba(255,30,30,0.3)]">
                    CALL <?php echo defined('SITE_PHONE') ? SITE_PHONE : '(954) 250-7399'; ?>
                </a>
                <a href="#quote"
                   class="px-12 py-5 border border-white/20 hover:bg-white/5 transition-all text-white font-bold tracking-widest rounded-sm">
                    GET FREE QUOTE
                </a>
            </div>
        </div>
    </section>
    <!-- END: CTA Section -->

<?php include 'includes/footer.php'; ?>
