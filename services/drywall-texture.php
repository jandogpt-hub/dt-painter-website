<?php
$pageTitle = 'Drywall and Texture Repairs in Coral Springs | DT Painter';
$pageDescription = 'Seamless drywall repairs and expert texture matching. From holes to water damage, we restore your walls to look like new.';
include '../includes/header.php';
?>

<main class="pt-20">
    <!-- Service Hero -->
    <section class="relative py-24 px-6 text-center border-b border-white/5">
        <div class="absolute inset-0 bg-brand-navy/10 z-0 pointer-events-none"></div>
        <div class="max-w-4xl mx-auto relative z-10">
            <span class="text-brand-red font-mono text-xs tracking-[0.3em] uppercase mb-4 block">Wall Restoration</span>
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tighter mb-6 gradient-text">Drywall & Texture Experts</h1>
            <p class="text-xl md:text-2xl text-gray-400 font-light mb-10 max-w-2xl mx-auto">Invisible repairs, perfect knockdown matching, and smooth skim coating.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:<?php echo defined('SITE_PHONE') ? preg_replace('/[^0-9]/', '', SITE_PHONE) : '5551234567'; ?>" class="px-8 py-4 bg-brand-red hover:bg-red-700 text-white font-bold tracking-widest rounded-sm transition-all text-sm">REQUEST QUOTE</a>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-24 px-6">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">
            <div class="space-y-8">
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-white">Make Holes Disappear</h2>
                <p class="text-gray-400 leading-relaxed text-lg">Whether it's a doorknob hole, water damage from a leak, or settlement cracks, damaged drywall ruins the look of any room. We specialize in seamless repairs where you can't tell where the damage was.</p>
                
                <div class="space-y-4">
                    <h3 class="text-xl font-bold text-white mb-4">Our Repair Capabilities</h3>
                    <ul class="space-y-4">
                        <li class="flex gap-4">
                            <div class="w-1.5 h-1.5 mt-2 rounded-full bg-brand-red flex-shrink-0"></div>
                            <div>
                                <strong class="text-white block">Texture Matching</strong>
                                <span class="text-gray-500 text-sm">We can replicate orange peel, knockdown, and popcorn textures.</span>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="w-1.5 h-1.5 mt-2 rounded-full bg-brand-red flex-shrink-0"></div>
                            <div>
                                <strong class="text-white block">Water Damage</strong>
                                <span class="text-gray-500 text-sm">We remove compromised drywall, treat for mold, and replace with fresh board.</span>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="w-1.5 h-1.5 mt-2 rounded-full bg-brand-red flex-shrink-0"></div>
                            <div>
                                <strong class="text-white block">Skim Coating</strong>
                                <span class="text-gray-500 text-sm">Smoothing out rough walls for a modern, flat finish.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
             <div class="relative bg-white/5 border border-white/10 rounded-lg p-8 aspect-square flex items-center justify-center">
                 <!-- Placeholder for Drywall Image -->
                 <div class="text-center">
                    <svg class="w-20 h-20 text-brand-red mx-auto mb-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    <p class="text-gray-500">Perfect Texture Match</p>
                 </div>
            </div>
        </div>
    </section>

    <!-- Our Process Section -->
    <section class="py-24 bg-[#0F0F0F] border-y border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-center text-3xl md:text-5xl font-bold tracking-tight mb-16 text-white">Repair Process</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white/5 p-8 rounded-sm border border-white/5 hover:border-brand-red/30 transition-colors group">
                    <span class="text-6xl font-black text-white/5 group-hover:text-brand-red/10 transition-colors block mb-4">01</span>
                    <h3 class="text-xl font-bold text-white mb-4">Assess & Prepare</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">We determine the extent of the damage (hidden moisture?) and cut out the affected area squarely.</p>
                </div>
                <div class="bg-white/5 p-8 rounded-sm border border-white/5 hover:border-brand-red/30 transition-colors group">
                     <span class="text-6xl font-black text-white/5 group-hover:text-brand-red/10 transition-colors block mb-4">02</span>
                    <h3 class="text-xl font-bold text-white mb-4">Install & Tape</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">New drywall is secured, taped with mesh or paper tape, and coated with 3 layers of joint compound.</p>
                </div>
                <div class="bg-white/5 p-8 rounded-sm border border-white/5 hover:border-brand-red/30 transition-colors group">
                     <span class="text-6xl font-black text-white/5 group-hover:text-brand-red/10 transition-colors block mb-4">03</span>
                    <h3 class="text-xl font-bold text-white mb-4">Texture & Paint</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">We use spray hoppers or hand tools to match your existing texture perfectly before priming and painting.</p>
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
                    <h4 class="text-lg font-bold text-white mb-2">Can you match "Knockdown" texture?</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">Yes, knockdown is the most common texture in South Florida and we are experts at replicating specific patterns and densities.</p>
                </div>
                <div class="border-b border-white/10 pb-6">
                     <h4 class="text-lg font-bold text-white mb-2">Is repairing drywall messy?</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">Sanding joint compound creates fine dust. We use plastic barriers and vacuum-sanders to capture 95% of the dust.</p>
                </div>
                <div class="border-b border-white/10 pb-6">
                     <h4 class="text-lg font-bold text-white mb-2">Do you paint the whole wall?</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">Usually, we recommend painting corner-to-corner on the repaired wall to ensure the sheen and color blend perfectly, as touch-ups can sometimes flash.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-32 relative text-center">
         <div class="absolute inset-0 bg-brand-red/5 z-0"></div>
        <div class="max-w-4xl mx-auto px-6 relative z-10">
            <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-6 text-white">Fix Your Walls Today</h2>
            <p class="text-xl text-gray-400 font-light mb-10">Get a fast, free quote for drywall repairs.</p>
             <div class="flex flex-col sm:flex-row gap-6 justify-center">
                 <a href="tel:<?php echo defined('SITE_PHONE') ? preg_replace('/[^0-9]/', '', SITE_PHONE) : '5551234567'; ?>" class="px-8 py-4 border border-white/20 hover:bg-white/5 text-white font-bold tracking-widest rounded-sm transition-all text-sm uppercase">Call <?php echo defined('SITE_PHONE') ? SITE_PHONE : '(555) 123-4567'; ?></a>
                <a href="/contact.php" class="px-8 py-4 bg-brand-red hover:bg-red-700 text-white font-bold tracking-widest rounded-sm transition-all text-sm uppercase">Get Quote</a>
            </div>
        </div>
    </section>

</main>

<?php include '../includes/footer.php'; ?>
