<?php
$pageTitle = 'Exterior House Painting Services in Coral Springs | DT Painter';
$pageDescription = 'Protect and beautify your home with our expert exterior painting services. Durable, weather-resistant finishes for Coral Springs and Parkland properties.';
include '../includes/header.php';
?>

<main class="pt-20">
    <!-- Service Hero -->
    <section class="relative py-24 px-6 text-center border-b border-white/5">
        <div class="absolute inset-0 bg-brand-navy/10 z-0 pointer-events-none"></div>
        <div class="max-w-4xl mx-auto relative z-10">
            <span class="text-brand-red font-mono text-xs tracking-[0.3em] uppercase mb-4 block">Curb Appeal Experts</span>
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tighter mb-6 gradient-text">Exterior Painting Excellence</h1>
            <p class="text-xl md:text-2xl text-gray-400 font-light mb-10 max-w-2xl mx-auto">Protect your investment from the Florida elements with a flawless, long-lasting finish.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:<?php echo defined('SITE_PHONE') ? preg_replace('/[^0-9]/', '', SITE_PHONE) : '5551234567'; ?>" class="px-8 py-4 bg-brand-red hover:bg-red-700 text-white font-bold tracking-widest rounded-sm transition-all text-sm">REQUEST QUOTE</a>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-24 px-6">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">
            <div class="space-y-8">
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-white">Protection Meets Perfection</h2>
                <p class="text-gray-400 leading-relaxed text-lg">In South Florida, your home's exterior faces sun, rain, and humidity every day. A professional paint job is your first line of defense. We don't just paint; we seal, protect, and beautify your home to ensure it looks stunning and stays protected for years.</p>
                
                <div class="space-y-4">
                    <h3 class="text-xl font-bold text-white mb-4">Why Choose DT Painter?</h3>
                    <ul class="space-y-4">
                        <li class="flex gap-4">
                            <div class="w-1.5 h-1.5 mt-2 rounded-full bg-brand-red flex-shrink-0"></div>
                            <div>
                                <strong class="text-white block">Thorough Prep Work</strong>
                                <span class="text-gray-500 text-sm">We pressure wash, scrape loose paint, and repair stucco cracks before painting.</span>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="w-1.5 h-1.5 mt-2 rounded-full bg-brand-red flex-shrink-0"></div>
                            <div>
                                <strong class="text-white block">Weather-Resistant Paints</strong>
                                <span class="text-gray-500 text-sm">Using only top-rated exterior paints like Loxon XP and Duration.</span>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="w-1.5 h-1.5 mt-2 rounded-full bg-brand-red flex-shrink-0"></div>
                            <div>
                                <strong class="text-white block">Caulking & Sealing</strong>
                                <span class="text-gray-500 text-sm">We seal around windows and doors to prevent moisture intrusion.</span>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="w-1.5 h-1.5 mt-2 rounded-full bg-brand-red flex-shrink-0"></div>
                            <div>
                                <strong class="text-white block">HOA Compliance</strong>
                                <span class="text-gray-500 text-sm">We are familiar with Coral Springs and Parkland HOA color requirements.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
             <div class="relative bg-white/5 border border-white/10 rounded-lg p-8 aspect-square flex items-center justify-center">
                 <!-- Placeholder for Exterior Image -->
                 <div class="text-center">
                    <svg class="w-20 h-20 text-brand-red mx-auto mb-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    <p class="text-gray-500">Curb Appeal Results</p>
                 </div>
            </div>
        </div>
    </section>

    <!-- Our Process Section -->
    <section class="py-24 bg-[#0F0F0F] border-y border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-center text-3xl md:text-5xl font-bold tracking-tight mb-16 text-white">Our Exterior Process</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white/5 p-8 rounded-sm border border-white/5 hover:border-brand-red/30 transition-colors group">
                    <span class="text-6xl font-black text-white/5 group-hover:text-brand-red/10 transition-colors block mb-4">01</span>
                    <h3 class="text-xl font-bold text-white mb-4">Clean & Prep</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Full pressure washing to remove dirt, mold, and chalking paint. We trench around the foundation to ensure full coverage.</p>
                </div>
                <div class="bg-white/5 p-8 rounded-sm border border-white/5 hover:border-brand-red/30 transition-colors group">
                     <span class="text-6xl font-black text-white/5 group-hover:text-brand-red/10 transition-colors block mb-4">02</span>
                    <h3 class="text-xl font-bold text-white mb-4">Repair & Prime</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Cracks are filled with elastomeric patch, and bare stucco is primed with a masonry conditioner to lock down the surface.</p>
                </div>
                <div class="bg-white/5 p-8 rounded-sm border border-white/5 hover:border-brand-red/30 transition-colors group">
                     <span class="text-6xl font-black text-white/5 group-hover:text-brand-red/10 transition-colors block mb-4">03</span>
                    <h3 class="text-xl font-bold text-white mb-4">Apply Finish</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">We apply premium exterior paint via spray and back-roll to ensure proper thickness and texture.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section class="py-24 px-6 border-b border-white/5">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-center text-3xl font-bold tracking-tight mb-12 text-white">Frequently Asked Questions</h2>
            <div class="space-y-6">
                <div class="border-b border-white/10 pb-6">
                    <h4 class="text-lg font-bold text-white mb-2">How often should I paint my exterior?</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">In South Florida, typical exterior paint jobs last 5-7 years due to UV exposure. High-quality paints applied correctly can extend this to 8-10 years.</p>
                </div>
                <div class="border-b border-white/10 pb-6">
                     <h4 class="text-lg font-bold text-white mb-2">Do you repair stucco cracks?</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">Yes, fixing stucco cracks is a critical part of our preparation. We use professional-grade elastomeric patching compounds that flex with your home to prevent re-cracking.</p>
                </div>
                <div class="border-b border-white/10 pb-6">
                     <h4 class="text-lg font-bold text-white mb-2">Do you offer a warranty?</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">Yes, we offer a warranty on our exterior painting labor, and the paint manufacturers (Sherwin Williams) offer their own material warranties.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-32 relative text-center">
         <div class="absolute inset-0 bg-brand-red/5 z-0"></div>
        <div class="max-w-4xl mx-auto px-6 relative z-10">
            <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-6 text-white">Boost Your Curb Appeal</h2>
            <p class="text-xl text-gray-400 font-light mb-10">Get a free exterior painting estimate today.</p>
             <div class="flex flex-col sm:flex-row gap-6 justify-center">
                 <a href="tel:<?php echo defined('SITE_PHONE') ? preg_replace('/[^0-9]/', '', SITE_PHONE) : '5551234567'; ?>" class="px-8 py-4 border border-white/20 hover:bg-white/5 text-white font-bold tracking-widest rounded-sm transition-all text-sm uppercase">Call <?php echo defined('SITE_PHONE') ? SITE_PHONE : '(555) 123-4567'; ?></a>
                <a href="/contact.php" class="px-8 py-4 bg-brand-red hover:bg-red-700 text-white font-bold tracking-widest rounded-sm transition-all text-sm uppercase">Schedule Estimate</a>
            </div>
        </div>
    </section>

</main>

<?php include '../includes/footer.php'; ?>
