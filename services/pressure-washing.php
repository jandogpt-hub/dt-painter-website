<?php
$pageTitle = 'Pressure Washing Services in Coral Springs | DT Painter';
$pageDescription = 'Deep clean your home\'s exterior, driveway, and pool deck. Professional pressure washing that removes mold, algae, and grime safely.';
include '../includes/header.php';
?>

<main class="pt-20">
    <!-- Service Hero -->
    <section class="relative py-24 px-6 text-center border-b border-white/5">
        <div class="absolute inset-0 bg-brand-navy/10 z-0 pointer-events-none"></div>
        <div class="max-w-4xl mx-auto relative z-10">
            <span class="text-brand-red font-mono text-xs tracking-[0.3em] uppercase mb-4 block">Exterior Care</span>
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tighter mb-6 gradient-text">Professional Pressure Washing</h1>
            <p class="text-xl md:text-2xl text-gray-400 font-light mb-10 max-w-2xl mx-auto">Restore your home's brilliance by removing years of dirt, mold, and algae buildup.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:<?php echo defined('SITE_PHONE') ? preg_replace('/[^0-9]/', '', SITE_PHONE) : '5551234567'; ?>" class="px-8 py-4 bg-brand-red hover:bg-red-700 text-white font-bold tracking-widest rounded-sm transition-all text-sm">REQUEST QUOTE</a>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-24 px-6">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">
            <div class="space-y-8">
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-white">Soft Wash & Power Wash</h2>
                <p class="text-gray-400 leading-relaxed text-lg">South Florida's humidity encourages mold and algae growth on every exterior surface. Not only does this look unsightly, but it can also become a slip hazard and damage your paint. We use the right pressure and cleaning solutions for every surface to clean deeply without causing damage.</p>
                
                <div class="space-y-4">
                    <h3 class="text-xl font-bold text-white mb-4">What We Clean</h3>
                    <ul class="space-y-4">
                        <li class="flex gap-4">
                            <div class="w-1.5 h-1.5 mt-2 rounded-full bg-brand-red flex-shrink-0"></div>
                            <div>
                                <strong class="text-white block">Driveways & Walkways</strong>
                                <span class="text-gray-500 text-sm">Remove oil stains, tire marks, and black mold from concrete and pavers.</span>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="w-1.5 h-1.5 mt-2 rounded-full bg-brand-red flex-shrink-0"></div>
                            <div>
                                <strong class="text-white block">Roof & Pool Decks</strong>
                                <span class="text-gray-500 text-sm">Gentle cleaning for delicate surfaces like tile roofs and pool cages.</span>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="w-1.5 h-1.5 mt-2 rounded-full bg-brand-red flex-shrink-0"></div>
                            <div>
                                <strong class="text-white block">House Exterior</strong>
                                <span class="text-gray-500 text-sm">Soft washing to remove dirt and spiderwebs without forcing water behind siding.</span>
                            </div>
                        </li>
                         <li class="flex gap-4">
                            <div class="w-1.5 h-1.5 mt-2 rounded-full bg-brand-red flex-shrink-0"></div>
                            <div>
                                <strong class="text-white block">Paver Sealing</strong>
                                <span class="text-gray-500 text-sm">Clean, re-sand, and seal your pavers to protect them and enhance color.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
             <div class="relative bg-white/5 border border-white/10 rounded-lg p-8 aspect-square flex items-center justify-center">
                 <!-- Placeholder for Pressure Wash Image -->
                 <div class="text-center">
                    <svg class="w-20 h-20 text-brand-red mx-auto mb-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    <p class="text-gray-500">Deep Clean Results</p>
                 </div>
            </div>
        </div>
    </section>

    <!-- Our Process Section -->
    <section class="py-24 bg-[#0F0F0F] border-y border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-center text-3xl md:text-5xl font-bold tracking-tight mb-16 text-white">Cleaning Process</h2>
            <div class="grid md:grid-cols-3 gap-8">
                 <div class="bg-white/5 p-8 rounded-sm border border-white/5 hover:border-brand-red/30 transition-colors group">
                    <span class="text-6xl font-black text-white/5 group-hover:text-brand-red/10 transition-colors block mb-4">01</span>
                    <h3 class="text-xl font-bold text-white mb-4">Pre-Treat</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">We apply a biodegradable cleaning solution that loosens dirt and kills mold spores on contact.</p>
                </div>
                 <div class="bg-white/5 p-8 rounded-sm border border-white/5 hover:border-brand-red/30 transition-colors group">
                    <span class="text-6xl font-black text-white/5 group-hover:text-brand-red/10 transition-colors block mb-4">02</span>
                    <h3 class="text-xl font-bold text-white mb-4">Surface Clean</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Using surface cleaners (for flat areas) or wands (for details), we evenly clean every inch.</p>
                </div>
                 <div class="bg-white/5 p-8 rounded-sm border border-white/5 hover:border-brand-red/30 transition-colors group">
                    <span class="text-6xl font-black text-white/5 group-hover:text-brand-red/10 transition-colors block mb-4">03</span>
                    <h3 class="text-xl font-bold text-white mb-4">Rinse & Protect</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">All chemicals are thoroughly rinsed away, protecting your plants and grass from any runoff.</p>
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
                    <h4 class="text-lg font-bold text-white mb-2">Will the pressure damage my paint?</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">For painted surfaces like your home's exterior, we use a "Soft Wash" technique which relies on cleaning agents rather than high pressure, ensuring your paint is safe.</p>
                </div>
                <div class="border-b border-white/10 pb-6">
                     <h4 class="text-lg font-bold text-white mb-2">Is it safe for my plants?</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">Yes. We pre-wet all vegetation before applying any cleaners and rinse them thoroughly afterward. This dilution prevents any chemical burn.</p>
                </div>
                <div class="border-b border-white/10 pb-6">
                     <h4 class="text-lg font-bold text-white mb-2">Can you remove oil stains?</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">We can significantly improve the appearance of oil stains using degreasers and hot water, though older, deep-set stains may not come out 100%.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-32 relative text-center">
         <div class="absolute inset-0 bg-brand-red/5 z-0"></div>
        <div class="max-w-4xl mx-auto px-6 relative z-10">
            <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-6 text-white">Make It Shine Again</h2>
            <p class="text-xl text-gray-400 font-light mb-10">Schedule your pressure washing service now.</p>
             <div class="flex flex-col sm:flex-row gap-6 justify-center">
                 <a href="tel:<?php echo defined('SITE_PHONE') ? preg_replace('/[^0-9]/', '', SITE_PHONE) : '5551234567'; ?>" class="px-8 py-4 border border-white/20 hover:bg-white/5 text-white font-bold tracking-widest rounded-sm transition-all text-sm uppercase">Call <?php echo defined('SITE_PHONE') ? SITE_PHONE : '(555) 123-4567'; ?></a>
                <a href="/contact.php" class="px-8 py-4 bg-brand-red hover:bg-red-700 text-white font-bold tracking-widest rounded-sm transition-all text-sm uppercase">Get Quote</a>
            </div>
        </div>
    </section>

</main>

<?php include '../includes/footer.php'; ?>
