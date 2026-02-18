<?php
/**
 * Area Served Page: Boca Raton, FL
 *
 * Purpose: Informational Geo-Relevance Hub.
 * Strategy: Rank for "Things to do in Boca Raton" / "Visiting Boca Raton"
 * to build topical authority for the location, then pass link equity to 
 * commercial service pages via a strategic footer bridge.
 */
$pageTitle = 'Visiting Boca Raton, FL: Things To Do & Local Guide | DT Painter';
$pageDescription = 'Explore Boca Raton, FL—A pinnacle of luxury living and coastal beauty. Discover Mizner Park, Gumbo Limbo Nature Center, and elite communities. A local guide by DT Painter.';
include '../includes/header.php';
?>

<!-- ============================================================
     LOCAL BUSINESS SCHEMA — areaServed only, no physical address
     ============================================================ -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "HomeAndConstructionBusiness",
  "name": "DT Painter, LLC",
  "url": "https://www.dtpainter.com",
  "telephone": "(954) 250-7399",
  "email": "info@dtpainter.com",
  "image": "https://res.cloudinary.com/dnwirrcev/image/upload/dt-painter-boca-raton-logo_bnldfl",
  "priceRange": "$$",
  "areaServed": {
    "@type": "City",
    "name": "Boca Raton",
    "addressRegion": "FL",
    "addressCountry": "US"
  }
}
</script>

<main class="pt-20">

    <!-- ============================================================
         HERO — INFORMATIONAL INTENT
         ============================================================ -->
    <section class="relative py-24 px-6 text-center border-b border-white/5">
        <div class="absolute inset-0 bg-brand-navy/10 z-0 pointer-events-none"></div>
        <div class="max-w-4xl mx-auto relative z-10">
            <span class="text-brand-red font-mono text-xs tracking-[0.3em] uppercase mb-4 block">Palm Beach County · Florida</span>
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tighter mb-6 gradient-text">A City for All Seasons</h1>
            <p class="text-xl md:text-2xl text-gray-400 font-light mb-10 max-w-2xl mx-auto">
                Boca Raton is the epitome of South Florida luxury. Famous for its Mediterranean Revival architecture, pristine beaches, and world-class shopping, it offers an unmatched lifestyle of elegance and recreation.
            </p>
        </div>
    </section>

    <!-- ============================================================
         THINGS TO DO
         ============================================================ -->
    <section class="py-24 px-6 border-b border-white/5">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-white mb-12 text-center">Coastal & Cultural Gems</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Activity 1 -->
                <div class="bg-white/5 rounded-sm overflow-hidden border border-white/10 hover:border-brand-red/30 transition-colors group">
                    <div class="aspect-video bg-gray-800 flex items-center justify-center group-hover:bg-gray-700 transition-colors">
                        <!-- Icon: Shopping/Building -->
                        <svg class="w-10 h-10 text-white/20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white mb-2">Mizner Park</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">The cultural heart of the city. This open-air lifestyle center features high-end boutiques, diverse dining, the Boca Raton Museum of Art, and an amphitheater hosting world-class concerts.</p>
                    </div>
                </div>

                <!-- Activity 2 -->
                <div class="bg-white/5 rounded-sm overflow-hidden border border-white/10 hover:border-brand-red/30 transition-colors group">
                    <div class="aspect-video bg-gray-800 flex items-center justify-center group-hover:bg-gray-700 transition-colors">
                        <!-- Icon: Turtle/Nature -->
                        <svg class="w-10 h-10 text-white/20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> 
                        <!-- Generic clock/schedule icon as proxy or custom nature icon -->
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white mb-2">Gumbo Limbo Nature Center</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">A beacon for environmental conservation. Visitors can tour the sea turtle rehabilitation facility, walk the boardwalk through coastal hammocks, and observe thousands of tropical fish in large outdoor aquariums.</p>
                    </div>
                </div>

                 <!-- Activity 3 -->
                <div class="bg-white/5 rounded-sm overflow-hidden border border-white/10 hover:border-brand-red/30 transition-colors group">
                    <div class="aspect-video bg-gray-800 flex items-center justify-center group-hover:bg-gray-700 transition-colors">
                         <!-- Icon: Beach/Sun -->
                         <svg class="w-10 h-10 text-white/20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white mb-2">Red Reef Park</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">A pristine oceanfront park perfect for snorkeling, with artificial reefs teeming with marine life just offshore. It also features a 9-hole executive golf course with stunning ocean views.</p>
                    </div>
                </div>

                <!-- Activity 4 -->
                 <div class="bg-white/5 rounded-sm overflow-hidden border border-white/10 hover:border-brand-red/30 transition-colors group">
                    <div class="aspect-video bg-gray-800 flex items-center justify-center group-hover:bg-gray-700 transition-colors">
                        <svg class="w-10 h-10 text-white/20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white mb-2">Sugar Sand Park</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">A 132-acre family destination featuring the Children's Science Explorium, the Willow Theatre, nature trails, and a massive science playground. A top spot for engaging young minds.</p>
                    </div>
                </div>

                <!-- Activity 5 -->
                 <div class="bg-white/5 rounded-sm overflow-hidden border border-white/10 hover:border-brand-red/30 transition-colors group">
                    <div class="aspect-video bg-gray-800 flex items-center justify-center group-hover:bg-gray-700 transition-colors">
                        <svg class="w-10 h-10 text-white/20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white mb-2">Town Center at Boca Raton</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">One of South Florida's top luxury shopping destinations. Featuring upscale retailers like Neiman Marcus and Saks Fifth Avenue, alongside diverse dining options.</p>
                    </div>
                </div>

                 <!-- Activity 6 -->
                 <div class="bg-white/5 rounded-sm overflow-hidden border border-white/10 hover:border-brand-red/30 transition-colors group">
                    <div class="aspect-video bg-gray-800 flex items-center justify-center group-hover:bg-gray-700 transition-colors">
                        <svg class="w-10 h-10 text-white/20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white mb-2">Spanish River Park</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Known as "Boca Raton's Lagoon," this park offers shaded picnic areas, nature trails, and wide beaches. It's a favorite for kayaking, bird-watching, and family gatherings.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================================
         MAP & NEIGHBORHOODS
         ============================================================ -->
    <section class="py-24 px-6 border-b border-white/5 bg-[#0F0F0F] relative">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 items-start">
            
            <!-- Map Embed -->
            <div class="h-full min-h-[400px] bg-white/5 rounded-sm border border-white/10 p-2 order-2 lg:order-1">
                <iframe 
                    width="100%" 
                    height="100%" 
                    style="border:0; min-height: 400px; filter: grayscale(100%) invert(92%) contrast(83%);" 
                    loading="lazy" 
                    allowfullscreen 
                    src="https://maps.google.com/maps?q=Boca+Raton,+FL&t=&z=12&ie=UTF8&iwloc=&output=embed">
                </iframe>
            </div>

            <!-- List of Neighborhoods -->
            <div class="order-1 lg:order-2">
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-white mb-8">Exclusive Communities</h2>
                <p class="text-gray-400 mb-8 leading-relaxed">
                   Boca Raton is renowned for its prestigious gated communities, country clubs, and historic districts. From the oceanfront estates of the Golden Triangle to the family-friendly vibe of West Boca.
                </p>
                
                <div class="grid sm:grid-cols-2 gap-y-3 gap-x-6">
                    <?php
                    $neighborhoods = [
                        'Royal Palm Yacht Club', 'The Oaks', 'Broken Sound', 'Woodfield Country Club', 
                        'Boca West', 'Addison Reserve', 'St. Andrews', 'Mission Bay', 
                        'Boca Chase', 'Golden Triangle', 'Paradise Palms', 'Boca Bridges', 
                        'Boca Falls', 'Saturnia', 'Lotus', 'Boca Isles'
                    ];
                    foreach ($neighborhoods as $hood) {
                        echo '<div class="flex items-center gap-2 text-gray-300 text-sm border-b border-white/5 pb-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-brand-red flex-shrink-0"></span>
                                ' . htmlspecialchars($hood) . '
                              </div>';
                    }
                    ?>
                </div>
            </div>

        </div>
    </section>

    <!-- ============================================================
         STRATEGIC BRIDGE (SERVICE INTERLINKING)
         ============================================================ -->
    <section class="py-20 px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-2xl font-bold text-white mb-6">Refining Boca Raton Residences</h2>
            <p class="text-gray-400 leading-relaxed text-lg mb-8">
                DT Painter delivers high-caliber <a href="/services/cabinet-refinishing.php" class="text-brand-red hover:underline font-semibold">cabinet refinishing</a> and 
                <a href="/services/interior-painting.php" class="text-brand-red hover:underline font-semibold">luxury interior painting</a> to Boca Raton's most discerning homeowners. 
                Whether refreshing a seasonal estate in Royal Palm or modernizing a kitchen in The Oaks, we provide the flawless finishes your home deserves.
            </p>
            
            <div class="inline-block border border-white/10 bg-white/5 p-6 rounded-sm">
                <p class="text-white font-bold mb-2">Elevate Your Home's Aesthetic</p>
                <a href="/contact.php" class="text-brand-red font-bold tracking-widest uppercase text-sm hover:text-white transition-colors">Request a Consultation →</a>
            </div>
        </div>
    </section>

</main>

<?php include '../includes/footer.php'; ?>
