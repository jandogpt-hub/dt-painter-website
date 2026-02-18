<?php
$pageTitle = 'Interior House Painting Services in Coral Springs | DT Painter';
$pageDescription = 'Transform your home with our professional interior painting. Flawless walls, perfect trim, and premium finishes for Coral Springs and Parkland homes.';
include '../includes/header.php';
?>

<main class="pt-20">
    <!-- Service Hero -->
    <section class="relative py-24 px-6 text-center border-b border-white/5">
        <div class="absolute inset-0 bg-brand-navy/10 z-0 pointer-events-none"></div>
        <div class="max-w-4xl mx-auto relative z-10">
            <span class="text-brand-red font-mono text-xs tracking-[0.3em] uppercase mb-4 block">Residential Services</span>
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tighter mb-6 gradient-text">Interior Painting Excellence</h1>
            <p class="text-xl md:text-2xl text-gray-400 font-light mb-10 max-w-2xl mx-auto">Flawless walls, sharp lines, and colors that bring your vision to life.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:<?php echo defined('SITE_PHONE') ? preg_replace('/[^0-9]/', '', SITE_PHONE) : '5551234567'; ?>" class="px-8 py-4 bg-brand-red hover:bg-red-700 text-white font-bold tracking-widest rounded-sm transition-all text-sm">REQUEST QUOTE</a>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-24 px-6">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">
            <div class="space-y-8">
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-white">More Than Just a Coat of Paint</h2>
                <p class="text-gray-400 leading-relaxed text-lg">Your home's interior sets the mood for your life. Whether you want to brighten up a living room, create a cozy bedroom retreat, or modernize your entire home, our interior painting services deliver flawless results that stand the test of time.</p>
                
                <div class="space-y-4">
                    <h3 class="text-xl font-bold text-white mb-4">The DT Painter Difference</h3>
                    <ul class="space-y-4">
                        <li class="flex gap-4">
                            <div class="w-1.5 h-1.5 mt-2 rounded-full bg-brand-red flex-shrink-0"></div>
                            <div>
                                <strong class="text-white block">Precision Edging</strong>
                                <span class="text-gray-500 text-sm">Crisp, clean lines between walls, ceilings, and trim.</span>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="w-1.5 h-1.5 mt-2 rounded-full bg-brand-red flex-shrink-0"></div>
                            <div>
                                <strong class="text-white block">Dust-Free Process</strong>
                                <span class="text-gray-500 text-sm">We use dust extraction sanding to keep your home clean.</span>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="w-1.5 h-1.5 mt-2 rounded-full bg-brand-red flex-shrink-0"></div>
                            <div>
                                <strong class="text-white block">Premium Materials</strong>
                                <span class="text-gray-500 text-sm">We only use top-tier paints from Benjamin Moore and Sherwin Williams.</span>
                            </div>
                        </li>
                         <li class="flex gap-4">
                            <div class="w-1.5 h-1.5 mt-2 rounded-full bg-brand-red flex-shrink-0"></div>
                            <div>
                                <strong class="text-white block">Full Protection</strong>
                                <span class="text-gray-500 text-sm">Furniture and floors are completely covered before we start.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="relative bg-white/5 border border-white/10 rounded-lg p-8 aspect-square flex items-center justify-center">
                 <!-- Placeholder for Interior Image -->
                 <div class="text-center">
                    <svg class="w-20 h-20 text-brand-red mx-auto mb-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                    <p class="text-gray-500">Professional Interior Results</p>
                 </div>
            </div>
        </div>
    </section>

    <!-- Our Process Section -->
    <section class="py-24 bg-[#0F0F0F] border-y border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-center text-3xl md:text-5xl font-bold tracking-tight mb-16 text-white">Our Painting Process</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white/5 p-8 rounded-sm border border-white/5 hover:border-brand-red/30 transition-colors group">
                    <span class="text-6xl font-black text-white/5 group-hover:text-brand-red/10 transition-colors block mb-4">01</span>
                    <h3 class="text-xl font-bold text-white mb-4">Protect & Prepare</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">We move and cover furniture, mask floors, and tape of all fixtures. Your belongings are safe with us.</p>
                </div>
                <div class="bg-white/5 p-8 rounded-sm border border-white/5 hover:border-brand-red/30 transition-colors group">
                     <span class="text-6xl font-black text-white/5 group-hover:text-brand-red/10 transition-colors block mb-4">02</span>
                    <h3 class="text-xl font-bold text-white mb-4">Surface Repair</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">We patch holes, caulk gaps, and sand rough spots to ensure the smoothest possible finish for your walls.</p>
                </div>
                <div class="bg-white/5 p-8 rounded-sm border border-white/5 hover:border-brand-red/30 transition-colors group">
                     <span class="text-6xl font-black text-white/5 group-hover:text-brand-red/10 transition-colors block mb-4">03</span>
                    <h3 class="text-xl font-bold text-white mb-4">Prime & Paint</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Applying premium primer (if needed) followed by two finish coats for rich, durable color.</p>
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
                    <h4 class="text-lg font-bold text-white mb-2">What kind of paint do you use?</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">We primarily use premium lines from Sherwin Williams (like Duration or Emerald) and Benjamin Moore (like Regal Select) for their durability and washability.</p>
                </div>
                <div class="border-b border-white/10 pb-6">
                     <h4 class="text-lg font-bold text-white mb-2">Do I need to move my furniture?</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">We ask that you move small, fragile items. We are happy to help move larger furniture pieces into the center of the room and cover them completely.</p>
                </div>
                <div class="border-b border-white/10 pb-6">
                     <h4 class="text-lg font-bold text-white mb-2">How long does a room take?</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">An average bedroom can usually be prepped and painted in 1-2 days, depending on the amount of repairs needed and drying time.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-32 relative text-center">
         <div class="absolute inset-0 bg-brand-red/5 z-0"></div>
        <div class="max-w-4xl mx-auto px-6 relative z-10">
            <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-6 text-white">Ready to Refresh Your Home?</h2>
            <p class="text-xl text-gray-400 font-light mb-10">Schedule your free estimate today and see the DT Painter difference.</p>
             <div class="flex flex-col sm:flex-row gap-6 justify-center">
                 <a href="tel:<?php echo defined('SITE_PHONE') ? preg_replace('/[^0-9]/', '', SITE_PHONE) : '5551234567'; ?>" class="px-8 py-4 border border-white/20 hover:bg-white/5 text-white font-bold tracking-widest rounded-sm transition-all text-sm uppercase">Call <?php echo defined('SITE_PHONE') ? SITE_PHONE : '(555) 123-4567'; ?></a>
                <a href="/contact.php" class="px-8 py-4 bg-brand-red hover:bg-red-700 text-white font-bold tracking-widest rounded-sm transition-all text-sm uppercase">Get Started</a>
            </div>
        </div>
    </section>

</main>

<?php include '../includes/footer.php'; ?>
