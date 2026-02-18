<?php
/**
 * Area Served Page: Coral Springs, FL
 *
 * Purpose: Informational Geo-Relevance Hub.
 * Strategy: Rank for "Things to do in Coral Springs" / "Visiting Coral Springs"
 * to build topical authority for the location, then pass link equity to 
 * commercial service pages via a strategic footer bridge.
 */
$pageTitle = 'Visiting Coral Springs, FL: Things To Do & Local Guide | DT Painter';
$pageDescription = 'Planning a visit to Coral Springs? Discover top parks, museums, and neighborhoods in Broward County\'s premier master-planned community. A local guide largely served by DT Painter.';
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
  "image": "https://res.cloudinary.com/dnwirrcev/image/upload/dt-painter-coral-springs-logo_bnldfl",
  "priceRange": "$$",
  "areaServed": {
    "@type": "City",
    "name": "Coral Springs",
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
            <span class="text-brand-red font-mono text-xs tracking-[0.3em] uppercase mb-4 block">Broward County · Florida</span>
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tighter mb-6 gradient-text">What To Do While Visiting Coral Springs?</h1>
            <p class="text-xl md:text-2xl text-gray-400 font-light mb-10 max-w-2xl mx-auto">
                Known as the "City in the Country," Coral Springs is a master-planned community famous for its strict aesthetic codes, A-rated schools, and proximity to the majestic Florida Everglades. It offers a quieter, greener alternative to the bustle of Fort Lauderdale.
            </p>
        </div>
    </section>

    <!-- ============================================================
         THINGS TO DO
         ============================================================ -->
    <section class="py-24 px-6 border-b border-white/5">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-white mb-12 text-center">Top Attractions for Visitors</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Activity 1 -->
                <div class="bg-white/5 rounded-sm overflow-hidden border border-white/10 hover:border-brand-red/30 transition-colors group">
                    <div class="aspect-video bg-gray-800 flex items-center justify-center group-hover:bg-gray-700 transition-colors overflow-hidden">
                        <!-- Tall Cypress Image -->
                        <img 
                            src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=800&auto=format&fit=crop" 
                            alt="Tall Cypress Natural Area" 
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700"
                        >
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white mb-2">Tall Cypress Natural Area</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Explore 66 acres of dense cypress basin swamps and pine flatwoods. The elevated boardwalk provides a perfect vantage point for birdwatching and photography without getting your feet wet.</p>
                    </div>
                </div>

                <!-- Activity 2 -->
                <div class="bg-white/5 rounded-sm overflow-hidden border border-white/10 hover:border-brand-red/30 transition-colors group">
                    <div class="aspect-video bg-gray-800 flex items-center justify-center group-hover:bg-gray-700 transition-colors overflow-hidden">
                        <!-- Dynamic Google Image -->
                        <img 
                            src="https://lh3.googleusercontent.com/p/AF1QipOQMpwdmEPoOhqGPZJzz8zc3hAavUr3YXfP2Nxn=w800" 
                            alt="Sawgrass Nature Center" 
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700"
                        >
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white mb-2">Sawgrass Nature Center</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">A dedicated wildlife hospital and environmental learning center. Visitors can tour the grounds to see native owls, turtles, and other rescued wildlife being rehabilitated for release.</p>
                    </div>
                </div>

                 <!-- Activity 3 -->
                <div class="bg-white/5 rounded-sm overflow-hidden border border-white/10 hover:border-brand-red/30 transition-colors group">
                    <div class="aspect-video bg-gray-800 flex items-center justify-center group-hover:bg-gray-700 transition-colors overflow-hidden">
                         <!-- IceDen Video Embed -->
                         <iframe 
                            width="100%" 
                            height="100%" 
                            src="https://www.youtube.com/embed?listType=search&list=Florida%20Panthers%20IceDen%20Coral%20Springs" 
                            title="Florida Panthers IceDen Coral Springs" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen
                            class="w-full h-full"
                        ></iframe>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white mb-2">Florida Panthers IceDen</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Beat the Florida heat at this premier ice skating facility. As the official practice rink for the NHL Florida Panthers, it offers public skating, figure skating lessons, and hockey leagues.</p>
                    </div>
                </div>

                <!-- Activity 4 -->
                 <div class="bg-white/5 rounded-sm overflow-hidden border border-white/10 hover:border-brand-red/30 transition-colors group">
                    <div class="aspect-video bg-gray-800 flex items-center justify-center group-hover:bg-gray-700 transition-colors overflow-hidden">
                        <!-- Museum Image -->
                        <img 
                            src="https://images.unsplash.com/photo-1561214115-f2f134cc4912?q=80&w=800&auto=format&fit=crop" 
                            alt="Coral Springs Museum of Art" 
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700"
                        >
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white mb-2">Coral Springs Museum of Art</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Located within the Center for the Arts, this museum features culturally diverse exhibitions and offers engaging art classes for all ages, emphasizing community creativity.</p>
                    </div>
                </div>

                <!-- Activity 5 -->
                 <div class="bg-white/5 rounded-sm overflow-hidden border border-white/10 hover:border-brand-red/30 transition-colors group">
                    <div class="aspect-video bg-gray-800 flex items-center justify-center group-hover:bg-gray-700 transition-colors overflow-hidden">
                        <!-- Mullins Park Image -->
                        <img 
                            src="https://images.unsplash.com/photo-1570953122198-297eb65e8d5e?q=80&w=800&auto=format&fit=crop" 
                            alt="Mullins Park" 
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700"
                        >
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white mb-2">Mullins Park</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">The city's largest park features basketball courts, swimming pools, and picnic pavilions. It serves as the central hub for local sports leagues and community festivals.</p>
                    </div>
                </div>

                 <!-- Activity 6 -->
                 <div class="bg-white/5 rounded-sm overflow-hidden border border-white/10 hover:border-brand-red/30 transition-colors group">
                    <div class="aspect-video bg-gray-800 flex items-center justify-center group-hover:bg-gray-700 transition-colors overflow-hidden">
                        <!-- The Walk Image -->
                        <img 
                            src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?q=80&w=800&auto=format&fit=crop" 
                            alt="The Walk on University" 
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700"
                        >
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white mb-2">The Walk on University</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">An open-air lifestyle center offering brilliant dining, shopping, and entertainment. The pedestrian-friendly design makes it a popular evening destination.</p>
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
                    src="https://maps.google.com/maps?q=Coral+Springs,+FL&t=&z=12&ie=UTF8&iwloc=&output=embed">
                </iframe>
            </div>

            <!-- List of Neighborhoods -->
            <div class="order-1 lg:order-2">
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-white mb-8">Major Neighborhoods</h2>
                <p class="text-gray-400 mb-8 leading-relaxed">
                   Coral Springs consists of several distinct communities, each with its own character. From the gated estates of Eagle Trace to the family-friendly streets of Kensington, the city offers diverse living options.
                </p>
                
                <div class="grid sm:grid-cols-2 gap-y-3 gap-x-6">
                    <?php
                    $neighborhoods = [
                        'Eagle Trace', 'Wyndham Lakes', 'Turtle Run', 'Kensington', 
                        'Coral Creek', 'Whispering Woods', 'Ridgeview', 'Pine Ridge', 
                        'Lakeview West', 'Cypress Glen', 'North Springs', 'Brookside', 
                        'Shadow Wood', 'Cypress Run', 'Westchester', 'The Dells', 
                        'Windham', 'Addison Court', 'Oakwood'
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
            <h2 class="text-2xl font-bold text-white mb-6">Serving Our Coral Springs Community</h2>
            <p class="text-gray-400 leading-relaxed text-lg mb-8">
                DT Painter is proud to offer <a href="/services/cabinet-refinishing.php" class="text-brand-red hover:underline font-semibold">cabinet refinishing</a>, 
                <a href="/services/interior-painting.php" class="text-brand-red hover:underline font-semibold">interior painting</a>, and 
                <a href="/services/exterior-painting.php" class="text-brand-red hover:underline font-semibold">exterior protection</a> to homeowners across Coral Springs. 
                Whether you need <a href="/services/drywall-texture.php" class="text-brand-red hover:underline font-semibold">popcorn ceiling removal</a> in Kensington 
                or <a href="/services/pressure-washing.php" class="text-brand-red hover:underline font-semibold">pressure washing</a> in The Dells, 
                we bring our "Digital Craftsman" precision to your door.
            </p>
            
            <div class="inline-block border border-white/10 bg-white/5 p-6 rounded-sm">
                <p class="text-white font-bold mb-2">Need a Licensed Local Painter?</p>
                <a href="/contact.php" class="text-brand-red font-bold tracking-widest uppercase text-sm hover:text-white transition-colors">Contact DT Painter →</a>
            </div>
        </div>
    </section>

</main>

<?php include '../includes/footer.php'; ?>
