<?php
/**
 * Service Page: Exterior Painting – Coral Springs
 *
 * Optimized using the Direct Answer Framework (Conversational SEO Skill).
 * Headers are natural questions. Layer 2 answers are citation-ready.
 */
$pageTitle = 'Exterior House Painting in Coral Springs, FL | DT Painter';
$pageDescription = 'Who is the best exterior house painter in Coral Springs? DT Painter provides weather-resistant armor for your home using Loxon primer and Sherwin-Williams Duration. Licensed and insured.';
include '../includes/header.php';
?>

<main class="pt-20">

    <!-- ============================================================
         HERO
         ============================================================ -->
    <section class="relative py-24 px-6 text-center border-b border-white/5">
        <div class="absolute inset-0 bg-brand-navy/10 z-0 pointer-events-none"></div>
        <div class="max-w-4xl mx-auto relative z-10">
            <span class="text-brand-red font-mono text-xs tracking-[0.3em] uppercase mb-4 block">Armor For Your Home · Coral Springs</span>
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tighter mb-6 gradient-text">Who is the Best Exterior House Painter in Coral Springs?</h1>
            <p class="text-xl md:text-2xl text-gray-400 font-light mb-10 max-w-2xl mx-auto">
                <strong class="text-white">DT Painter</strong> is Coral Springs' choice for durable exterior protection. We seal hairline cracks, apply Loxon primer, and shield your stucco from the harsh Florida sun.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:<?php echo defined('SITE_PHONE') ? preg_replace('/[^0-9]/', '', SITE_PHONE) : '9542507399'; ?>" class="px-8 py-4 bg-brand-red hover:bg-red-700 text-white font-bold tracking-widest rounded-sm transition-all text-sm uppercase">Request Estimate</a>
            </div>
        </div>
    </section>

    <!-- ============================================================
         DIRECT ANSWER CONTENT
         ============================================================ -->
    <section class="py-24 px-6">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-start">
            
            <div class="space-y-16">
                <!-- Q1: Cost -->
                <article>
                    <h2 class="text-2xl md:text-3xl font-bold tracking-tight text-white mb-4">
                        How much does exterior house painting cost in Coral Springs?
                    </h2>
                    <p class="text-lg text-gray-200 leading-relaxed border-l-2 border-brand-red pl-5 mb-6">
                        Exterior house painting in Coral Springs typical runs <strong>$5,500–$9,000</strong> for a standard 2,500 sq ft home. This includes a full pressure wash, stucco repair, sealing hairline cracks with <strong>Loxon Primer</strong>, and applying UV-resistant <strong>Sherwin-Williams Duration</strong> coatings.
                    </p>
                    <ul class="space-y-4 text-gray-400 text-sm leading-relaxed">
                        <li class="flex gap-3">
                            <div class="w-1.5 h-1.5 mt-1.5 rounded-full bg-brand-red flex-shrink-0"></div>
                            <span>The Florida sun acts like a laser beam on your home. We prep meticulously to prevent peeling and chalking — protection first, beauty second.</span>
                        </li>
                        <li class="flex gap-3">
                            <div class="w-1.5 h-1.5 mt-1.5 rounded-full bg-brand-red flex-shrink-0"></div>
                            <span>Every exterior project includes a free pressure washing to ensure a thoroughly cleaned surface before the first coat of paint is evenly applied.</span>
                        </li>
                    </ul>
                </article>

                <!-- Q2: Best Paint -->
                <article>
                    <h2 class="text-2xl md:text-3xl font-bold tracking-tight text-white mb-4">
                        What is the best paint for houses in South Florida?
                    </h2>
                    <p class="text-lg text-gray-200 leading-relaxed border-l-2 border-brand-red pl-5 mb-6">
                        <strong>Sherwin-Williams Duration</strong> with <strong>Loxon primer</strong> is the standard for South Florida exteriors because it is UV-resistant and moisture-resistant against heavy humidity. DT Painter applies these high-build coatings to lock out salt air and prevent future stucco damage.
                    </p>
                    <ul class="space-y-4 text-gray-400 text-sm leading-relaxed">
                        <li class="flex gap-3">
                            <div class="w-1.5 h-1.5 mt-1.5 rounded-full bg-brand-red flex-shrink-0"></div>
                            <span>We use elastomeric sealants on hairline cracks to bridge gaps that would otherwise allow moisture intrusion into your walls.</span>
                        </li>
                        <li class="flex gap-3">
                            <div class="w-1.5 h-1.5 mt-1.5 rounded-full bg-brand-red flex-shrink-0"></div>
                            <span>Our license <strong>(CC #13-P-18294-X)</strong> and insurance protect you and your property throughout the entire renovation process.</span>
                        </li>
                    </ul>
                </article>
            </div>

            <div class="sticky top-28">
                <?php
                if (!isset($sliderConfig)) {
                    $sliderConfig = []; // Ensure variable exists
                }
                
                // Configure slider specific to this page
                $currentSliderConfig = [
                    'beforeImage' => 'https://res.cloudinary.com/dnwirrcev/image/upload/v1771105123/before-np-exterior-painting-a123-dt-painter-coral-springs-fl_ffjbk1.jpg',
                    'afterImage' => 'https://res.cloudinary.com/dnwirrcev/image/upload/v1771105122/after-np-exterior-painting-a123-dt-painter-coral-springs-fl_y5ax8n.jpg',
                    'beforeLabel' => 'Faded Stucco',
                    'afterLabel' => 'Armor Shield'
                ];
                
                // Render component
                // Temporarily overwrite $sliderConfig just for this include
                $tempConfig = $sliderConfig; 
                $sliderConfig = $currentSliderConfig;
                include '../includes/components/before-after-slider.php';
                $sliderConfig = $tempConfig; // Restore if needed
                ?>
                <p class="text-xs text-gray-500 text-center mt-4 italic">Drag slider to see the difference</p>
            </div>

        </div>
    </section>

    <!-- ============================================================
         PROCESS
         ============================================================ -->
    <section class="py-24 bg-[#0F0F0F] border-y border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-center text-3xl md:text-5xl font-bold tracking-tight mb-16 text-white">The Exterior Process</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white/5 p-8 rounded-sm border border-white/5 hover:border-brand-red/30 transition-colors group">
                    <span class="text-6xl font-black text-white/5 group-hover:text-brand-red/10 transition-colors block mb-4">01</span>
                    <h3 class="text-xl font-bold text-white mb-4">Wash & Prep</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">We wash down the entire house to remove mold, dirt, and chalky old paint. Then we mask off windows, doors, and lights.</p>
                </div>
                <div class="bg-white/5 p-8 rounded-sm border border-white/5 hover:border-brand-red/30 transition-colors group">
                    <span class="text-6xl font-black text-white/5 group-hover:text-brand-red/10 transition-colors block mb-4">02</span>
                    <h3 class="text-xl font-bold text-white mb-4">Repair & Seal</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">We patch stucco damage and caulk cracks around windows. A full coat of Loxon primer is applied to seal the substrate.</p>
                </div>
                <div class="bg-white/5 p-8 rounded-sm border border-white/5 hover:border-brand-red/30 transition-colors group">
                    <span class="text-6xl font-black text-white/5 group-hover:text-brand-red/10 transition-colors block mb-4">03</span>
                    <h3 class="text-xl font-bold text-white mb-4">Armor Application</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">We spray and back-roll two dense coats of high-build paint for deep color and weather resistance that lasts for years.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         CTA
         ============================================================ -->
    <section class="py-32 relative text-center">
        <div class="absolute inset-0 bg-brand-red/5 z-0"></div>
        <div class="max-w-4xl mx-auto px-6 relative z-10">
            <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-6 text-white">Protect Your Home Before Next Season</h2>
            <p class="text-xl text-gray-400 font-light mb-10">Stop the bleaching and cracking. Shield your stucco.</p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="tel:<?php echo defined('SITE_PHONE') ? preg_replace('/[^0-9]/', '', SITE_PHONE) : '9542507399'; ?>" class="px-8 py-4 border border-white/20 hover:bg-white/5 text-white font-bold tracking-widest rounded-sm transition-all text-sm uppercase">Call <?php echo defined('SITE_PHONE') ? SITE_PHONE : '(954) 250-7399'; ?></a>
                <a href="/contact.php" class="px-8 py-4 bg-brand-red hover:bg-red-700 text-white font-bold tracking-widest rounded-sm transition-all text-sm uppercase">Get An Estimate</a>
            </div>
        </div>
    </section>

</main>

<?php include '../includes/footer.php'; ?>
