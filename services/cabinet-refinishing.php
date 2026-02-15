<?php
$pageTitle = 'Cabinet Refinishing & Painting in Coral Springs | DT Painter';
$pageDescription = 'Professional cabinet painting and refinishing services. Get a factory-like finish for your kitchen cabinets at a fraction of the cost of replacement.';
$extra_css = '<link rel="stylesheet" href="/assets/css/comparison-slider.css">';
include '../includes/header.php';
?>

<main class="pt-20">
    <!-- Service Hero -->
    <section class="relative py-24 px-6 text-center border-b border-white/5">
        <div class="absolute inset-0 bg-brand-red/5 z-0 pointer-events-none"></div>
        <div class="max-w-4xl mx-auto relative z-10">
            <span class="text-brand-red font-mono text-xs tracking-[0.3em] uppercase mb-4 block">Interior Transformations</span>
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tighter mb-6 gradient-text">Professional Cabinet Refinishing</h1>
            <p class="text-xl md:text-2xl text-gray-400 font-light mb-10 max-w-2xl mx-auto">Give your kitchen a high-end, factory-like finish without the cost of a full remodel.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:<?php echo preg_replace('/[^0-9]/', '', '555-123-4567'); ?>" class="px-8 py-4 bg-brand-red hover:bg-red-700 text-white font-bold tracking-widest rounded-sm transition-all text-sm">GET A FREE ESTIMATE</a>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-24 px-6">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">
            <div class="space-y-8">
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-white">Transform Your Kitchen in Days, Not Weeks</h2>
                <p class="text-gray-400 leading-relaxed text-lg">Are your cabinets looking dated, worn, or simply not your style? You don't need to spend tens of thousands on a full kitchen replacement. Our professional cabinet refinishing process can transform your existing cabinets with a durable, beautiful finish that looks brand new.</p>
                
                <div class="space-y-4">
                    <h3 class="text-xl font-bold text-white mb-4">Why Choose Refinishing?</h3>
                    <ul class="space-y-4">
                        <li class="flex gap-4">
                            <div class="w-1.5 h-1.5 mt-2 rounded-full bg-brand-red flex-shrink-0"></div>
                            <div>
                                <strong class="text-white block">Cost-Effective</strong>
                                <span class="text-gray-500 text-sm">Save up to 70% compared to the cost of new cabinets.</span>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="w-1.5 h-1.5 mt-2 rounded-full bg-brand-red flex-shrink-0"></div>
                            <div>
                                <strong class="text-white block">Fast Turnaround</strong>
                                <span class="text-gray-500 text-sm">Most projects are completed in just 4-6 days.</span>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="w-1.5 h-1.5 mt-2 rounded-full bg-brand-red flex-shrink-0"></div>
                            <div>
                                <strong class="text-white block">Durable Finish</strong>
                                <span class="text-gray-500 text-sm">We use industrial-grade coatings specifically designed for cabinetry.</span>
                            </div>
                        </li>
                         <li class="flex gap-4">
                            <div class="w-1.5 h-1.5 mt-2 rounded-full bg-brand-red flex-shrink-0"></div>
                            <div>
                                <strong class="text-white block">Eco-Friendly</strong>
                                <span class="text-gray-500 text-sm">Keep your perfectly good cabinets out of the landfill.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="relative">
                 <!-- Project B Comparison Slider -->
                 <div class="border border-white/10 rounded-lg overflow-hidden shadow-2xl">
                    <div class="comparison-slider-wrapper">
                        <div class="comparison-slider">
                            <!-- Top Layer: Before (Slidable) -->
                            <div class="comparison-item comparison-after">
                                <img src="https://res.cloudinary.com/dnwirrcev/image/upload/v1771098040/before-np-kitchen-cabinet-refinishing-a123-dt-painter_1_gz7lnu.jpg" alt="Before Cabinet Refinishing">
                                <span class="comparison-label label-after bg-brand-red text-white text-xs px-2 py-1">Before</span>
                            </div>
                            <!-- Bottom Layer: After (Background) -->
                            <div class="comparison-item comparison-before">
                                <img src="https://res.cloudinary.com/dnwirrcev/image/upload/v1771098037/after-np-kitchen-cabinet-refinishing-a123-dt-painter_q0ossn.jpg" alt="After Cabinet Refinishing">
                                <span class="comparison-label label-before bg-brand-navy text-white text-xs px-2 py-1">After</span>
                            </div>
                            <!-- Handle -->
                            <div class="comparison-handle border-2 border-white">
                                <div class="handle-line bg-white"></div>
                                <div class="handle-circle bg-white text-brand-dark flex items-center justify-center w-8 h-8 rounded-full shadow-lg">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4"></path></svg> <!-- Rotated arrows or just custom icon -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center text-xs text-gray-500 mt-4 italic">Actual Project B - Slide to see transformation</p>
            </div>
        </div>
    </section>

    <!-- Our Process Section -->
    <section class="py-24 bg-[#0F0F0F] border-y border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-center text-3xl md:text-5xl font-bold tracking-tight mb-16 text-white">Our Professional Process</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white/5 p-8 rounded-sm border border-white/5 hover:border-brand-red/30 transition-colors group">
                    <span class="text-6xl font-black text-white/5 group-hover:text-brand-red/10 transition-colors block mb-4">01</span>
                    <h3 class="text-xl font-bold text-white mb-4">Preparation</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">We remove all doors and drawer fronts. Total masking of your kitchen ensures your floors and appliances are protected.</p>
                </div>
                <div class="bg-white/5 p-8 rounded-sm border border-white/5 hover:border-brand-red/30 transition-colors group">
                     <span class="text-6xl font-black text-white/5 group-hover:text-brand-red/10 transition-colors block mb-4">02</span>
                    <h3 class="text-xl font-bold text-white mb-4">Cleaning & Sanding</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Cabinets are thoroughly degreased and sanded to ensure maximum adhesion for the new finish.</p>
                </div>
                <div class="bg-white/5 p-8 rounded-sm border border-white/5 hover:border-brand-red/30 transition-colors group">
                     <span class="text-6xl font-black text-white/5 group-hover:text-brand-red/10 transition-colors block mb-4">03</span>
                    <h3 class="text-xl font-bold text-white mb-4">Professional Spraying</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">We use HVLP sprayers to apply multiple coats of primer and finish, creating a smooth, brush-mark-free surface.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Customer Reviews Section -->
    <section class="py-24 px-6">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-center text-3xl md:text-5xl font-bold tracking-tight mb-16 text-white">What Our Clients Say</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white/5 p-8 rounded-sm border border-white/5">
                    <p class="text-gray-300 italic mb-6">"Amazing Results! I was so concerned about painting cabinets... It's been at least 4 months and they still look like <strong class="text-white">factory finish!</strong>"</p>
                    <div class="flex justify-between items-center border-t border-white/10 pt-4">
                        <strong class="text-brand-red text-sm tracking-widest uppercase">AB Designs</strong>
                        <div class="text-yellow-500 text-xs">★★★★★</div>
                    </div>
                </div>
                <div class="bg-white/5 p-8 rounded-sm border border-white/5">
                    <p class="text-gray-300 italic mb-6">"Damian did an amazing job. The finish is <strong class="text-white">much better than the original paint from the factory</strong>... So happy I found him!"</p>
                    <div class="flex justify-between items-center border-t border-white/10 pt-4">
                         <strong class="text-brand-red text-sm tracking-widest uppercase">Elaine Bierwirth</strong>
                        <div class="text-yellow-500 text-xs">★★★★★</div>
                    </div>
                </div>
                <div class="bg-white/5 p-8 rounded-sm border border-white/5">
                     <p class="text-gray-300 italic mb-6">"He was meticulous in preparing the cabinets... The units <strong class="text-white">look and feel brand new!!</strong> Highly highly recommend!!!"</p>
                    <div class="flex justify-between items-center border-t border-white/10 pt-4">
                         <strong class="text-brand-red text-sm tracking-widest uppercase">JB Trow</strong>
                        <div class="text-yellow-500 text-xs">★★★★★</div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="https://www.google.com/maps?cid=5609463991136474176" target="_blank" rel="noopener" class="text-xs text-gray-500 hover:text-white transition-colors uppercase tracking-widest border-b border-gray-500 hover:border-white pb-1">Read more reviews on Google</a>
            </div>
        </div>
    </section>

    <!-- Visual Proof Section -->
    <section class="py-24 bg-[#0F0F0F] text-center border-t border-white/5">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-3xl md:text-5xl font-bold tracking-tight mb-6 text-white">See The Transformation</h2>
            <p class="text-gray-400 mb-12">Slide to see the difference our factory-finish process makes.</p>
            
            <div class="comparison-slider-wrapper border border-white/10 rounded-lg overflow-hidden shadow-2xl">
                <!-- Container for Slider -->
                <div class="comparison-slider">
                    
                    <!-- Top Layer: Before (Slidable, displayed on Left) -->
                    <div class="comparison-item comparison-after">
                         <img src="https://res.cloudinary.com/dnwirrcev/image/upload/v1771098042/before-np-kitchen-cabinet-refinishing-b123-dt-painter_uws8uq.jpg" alt="Before Cabinet Refinishing">
                        <span class="comparison-label label-after bg-brand-red text-white text-xs px-2 py-1">Before</span>
                    </div>
                    
                    <!-- Bottom Layer: After (Background, displayed on Right) -->
                    <div class="comparison-item comparison-before">
                        <img src="https://res.cloudinary.com/dnwirrcev/image/upload/v1771098037/after-np-kitchen-cabinet-refinishing-b123-dt-painter_xdikz9.jpg" alt="After Cabinet Refinishing">
                        <span class="comparison-label label-before bg-brand-navy text-white text-xs px-2 py-1">After</span>
                    </div>
                    
                    <!-- Draggable Handle -->
                    <div class="comparison-handle border-2 border-white">
                        <div class="handle-line bg-white"></div>
                        <div class="handle-circle bg-white text-brand-dark flex items-center justify-center w-8 h-8 rounded-full shadow-lg">
                            <span class="text-xl font-bold">↔</span>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-xs text-gray-500 mt-4 italic">Actual project comparison. Notice the transition from dark wood to a modern, bright finish.</p>
        </div>
    </section>

    <section class="py-24 px-6 border-b border-white/5">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-center text-3xl font-bold tracking-tight mb-12 text-white">Frequently Asked Questions</h2>
            <div class="space-y-6">
                <div class="border-b border-white/10 pb-6">
                    <h4 class="text-lg font-bold text-white mb-2">How long does the finish last?</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">With proper care, our factory-grade finish will last as long as new cabinets. It is resistant to chipping, moisture, and common kitchen cleaners.</p>
                </div>
                <div class="border-b border-white/10 pb-6">
                     <h4 class="text-lg font-bold text-white mb-2">Do I need to empty my cabinets?</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">Only the countertops and top drawers need to be cleared. We mask off the cabinet interiors so you can leave your items inside.</p>
                </div>
                <div class="border-b border-white/10 pb-6">
                     <h4 class="text-lg font-bold text-white mb-2">Can you paint any type of cabinet?</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">Yes! We can refinish solid wood, oak, maple, and even high-quality MDF or laminate cabinets.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-32 relative text-center">
         <div class="absolute inset-0 bg-brand-red/5 z-0"></div>
        <div class="max-w-4xl mx-auto px-6 relative z-10">
            <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-6 text-white">Ready for a Kitchen Refresh?</h2>
            <p class="text-xl text-gray-400 font-light mb-10">Contact us today for a free, detailed quote on your cabinet project.</p>
             <div class="flex flex-col sm:flex-row gap-6 justify-center">
                 <a href="tel:<?php echo defined('SITE_PHONE') ? preg_replace('/[^0-9]/', '', SITE_PHONE) : '5551234567'; ?>" class="px-8 py-4 border border-white/20 hover:bg-white/5 text-white font-bold tracking-widest rounded-sm transition-all text-sm uppercase">Call <?php echo defined('SITE_PHONE') ? SITE_PHONE : '(555) 123-4567'; ?></a>
                <a href="/contact.php" class="px-8 py-4 bg-brand-red hover:bg-red-700 text-white font-bold tracking-widest rounded-sm transition-all text-sm uppercase">Book an Estimate Online</a>
            </div>
        </div>
    </section>

</main>

<?php include '../includes/footer.php'; ?>

<!-- Slider Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Select all comparison sliders
    const sliders = document.querySelectorAll('.comparison-slider');

    sliders.forEach(slider => {
        const afterImage = slider.querySelector('.comparison-after');
        const handle = slider.querySelector('.comparison-handle');
        let isDragging = false;

        function getPosition(e) {
            const rect = slider.getBoundingClientRect();
             // Check for touch or mouse event
            const clientX = e.touches ? e.touches[0].clientX : e.clientX;
             // Calculate position relative to the slider
            let x = clientX - rect.left;
             // Clamp values between 0 and width
            return Math.max(0, Math.min(x, rect.width));
        }

        function updateSlider(x) {
            const percentage = (x / slider.offsetWidth) * 100;
            afterImage.style.width = percentage + "%";
            handle.style.left = percentage + "%";
        }

        function startDrag(e) {
            isDragging = true;
        }

        function stopDrag() {
            isDragging = false;
        }

        function moveDrag(e) {
            if (!isDragging) return;
            if(e.cancelable) e.preventDefault(); // Prevent scrolling on touch
            const x = getPosition(e);
            updateSlider(x);
        }

        // Touch events
        handle.addEventListener('touchstart', startDrag, {passive: false});
        slider.addEventListener('touchmove', moveDrag, {passive: false});
        window.addEventListener('touchend', stopDrag);

        // Mouse events
        handle.addEventListener('mousedown', startDrag);
        window.addEventListener('mousemove', moveDrag);
        window.addEventListener('mouseup', stopDrag);
        
         // Click to jump
        slider.addEventListener('click', function(e) {
            const x = getPosition(e);
            updateSlider(x);
        });
    });
});
</script>
