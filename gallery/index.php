<?php
/**
 * Gallery Page
 * Showcases DT Painter's portfolio with filterable categories
 */
$pageTitle = 'Project Gallery | DT Painter Cabinet Refinishing & Painting Portfolio';
$pageDescription = 'Browse our portfolio of cabinet refinishing, exterior painting, and interior painting projects in Coral Springs and South Florida. See the factory-finish quality that sets DT Painter apart.';
include '../includes/header.php';

// Gallery categories and images
// In production, this would come from a database or Cloudinary API
$galleryItems = [
    [
        'id' => 1,
        'title' => 'Kitchen Cabinet Transformation',
        'category' => 'cabinet-refinishing',
        'image' => 'after-kitchen-wooden-cabinet-refinishing-after-cabinet-refinishing-coral-springs-dt-painter-07483746.jpg',
        'description' => 'Italian 2K Polyurethane factory finish on dated oak cabinets',
        'location' => 'Coral Springs, FL'
    ],
    [
        'id' => 2,
        'title' => 'Modern White Kitchen Cabinets',
        'category' => 'cabinet-refinishing',
        'image' => 'after-kitchen-wooden-cabinet-refinishing-after-cabinet-refinishing-coral-springs-dt-painter-22563524.jpg',
        'description' => 'Factory-finish cabinet refinishing with durable coating',
        'location' => 'Parkland, FL'
    ],
    [
        'id' => 3,
        'title' => 'Elegant Cabinet Restoration',
        'category' => 'cabinet-refinishing',
        'image' => 'after-kitchen-wooden-cabinet-refinishing-after-cabinet-refinishing-coral-springs-dt-painter-23022945.jpg',
        'description' => 'High-end residential cabinet transformation',
        'location' => 'Coral Springs, FL'
    ],
    [
        'id' => 4,
        'title' => 'Bathroom Vanity Refinishing',
        'category' => 'cabinet-refinishing',
        'image' => 'after-restroom-wooden-cabinet-refinishing-after-cabinet-refinishing-coral-springs-dt-painter-07483779.jpg',
        'description' => 'Bathroom cabinet restoration with scratch-resistant finish',
        'location' => 'Coconut Creek, FL'
    ],
    [
        'id' => 5,
        'title' => 'Custom Side Cabinet',
        'category' => 'cabinet-refinishing',
        'image' => 'after-wooden-cabinet-refinishing-after-side-cabinet-refinishing-coral-springs-dt-painter-07483750.jpg',
        'description' => 'Specialized cabinet refinishing with UV-resistant coating',
        'location' => 'Boca Raton, FL'
    ],
    [
        'id' => 6,
        'title' => 'Residential Interior',
        'category' => 'interior-painting',
        'image' => '115616633_3298008253554297_482187012337251433_n-residential-painting-coral-springs-dt-painter-07483773.jpg',
        'description' => 'Complete interior painting with premium finishes',
        'location' => 'Coral Springs, FL'
    ],
    [
        'id' => 7,
        'title' => 'Modern Home Interior',
        'category' => 'interior-painting',
        'image' => '116725915_3331832976838491_8558649750644545481_n-residential-painting-coral-springs-dt-painter-07483798.jpg',
        'description' => 'Full interior transformation with expert color consultation',
        'location' => 'Parkland, FL'
    ]
];

// Count items per category for filter badges
$categoryCount = [
    'all' => count($galleryItems),
    'cabinet-refinishing' => count(array_filter($galleryItems, fn($item) => $item['category'] === 'cabinet-refinishing')),
    'exterior-painting' => count(array_filter($galleryItems, fn($item) => $item['category'] === 'exterior-painting')),
    'interior-painting' => count(array_filter($galleryItems, fn($item) => $item['category'] === 'interior-painting')),
];
?>

    <!-- BEGIN: Hero Section -->
    <section class="relative min-h-[50vh] flex items-center bg-brand-dark overflow-hidden pt-20">
        <!-- Background Pattern -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 40px 40px;"></div>
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-brand-red/10 rounded-full blur-[120px]"></div>
        </div>

        <!-- Content Container -->
        <div class="max-w-7xl mx-auto px-6 relative z-10 w-full py-16">
            <div class="max-w-3xl mx-auto text-center">
                <span class="px-3 py-1 bg-brand-red text-white text-[10px] font-bold tracking-[0.2em] uppercase rounded-sm inline-block mb-6">
                    Portfolio
                </span>
                
                <h1 class="text-5xl md:text-7xl font-extrabold leading-[0.95] tracking-tighter text-white mb-8">
                    Our Work<br/>
                    <span class="text-brand-red">Speaks for Itself</span>
                </h1>
                
                <p class="text-xl text-gray-300 font-light leading-relaxed max-w-2xl mx-auto">
                    Explore our portfolio of factory-finish cabinet refinishing and premium painting projects across South Florida.
                </p>
            </div>
        </div>
    </section>
    <!-- END: Hero Section -->

    <!-- BEGIN: Gallery Filters -->
    <section class="py-12 bg-brand-dark border-t border-white/5 sticky top-16 z-40 backdrop-blur-lg bg-brand-dark/90">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-wrap gap-3 justify-center" id="galleryFilters">
                <button data-filter="all" 
                        class="filter-btn active px-6 py-3 bg-brand-red text-white font-bold text-sm tracking-wider rounded-sm transition-all hover:shadow-lg hover:shadow-brand-red/50">
                    ALL PROJECTS
                    <span class="ml-2 opacity-75">(<?php echo $categoryCount['all']; ?>)</span>
                </button>
                <button data-filter="cabinet-refinishing" 
                        class="filter-btn px-6 py-3 bg-white/5 text-gray-300 font-bold text-sm tracking-wider rounded-sm transition-all hover:bg-white/10 hover:text-white border border-white/10">
                    CABINET REFINISHING
                    <span class="ml-2 opacity-75">(<?php echo $categoryCount['cabinet-refinishing']; ?>)</span>
                </button>
                <button data-filter="exterior-painting" 
                        class="filter-btn px-6 py-3 bg-white/5 text-gray-300 font-bold text-sm tracking-wider rounded-sm transition-all hover:bg-white/10 hover:text-white border border-white/10">
                    EXTERIOR PAINTING
                    <span class="ml-2 opacity-75">(<?php echo $categoryCount['exterior-painting']; ?>)</span>
                </button>
                <button data-filter="interior-painting" 
                        class="filter-btn px-6 py-3 bg-white/5 text-gray-300 font-bold text-sm tracking-wider rounded-sm transition-all hover:bg-white/10 hover:text-white border border-white/10">
                    INTERIOR PAINTING
                    <span class="ml-2 opacity-75">(<?php echo $categoryCount['interior-painting']; ?>)</span>
                </button>
            </div>
        </div>
    </section>
    <!-- END: Gallery Filters -->

    <!-- BEGIN: Gallery Grid -->
    <section class="py-24 bg-[#0F0F0F]">
        <div class="max-w-7xl mx-auto px-6">
            <div id="galleryGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($galleryItems as $item): ?>
                <div class="gallery-item group relative overflow-hidden bg-brand-dark rounded-sm border border-white/5 hover:border-brand-red/30 transition-all duration-300 cursor-pointer" 
                     data-category="<?php echo $item['category']; ?>"
                     data-id="<?php echo $item['id']; ?>"
                     onclick="openLightbox(<?php echo $item['id']; ?>)">
                    
                    <!-- Image Container -->
                    <div class="aspect-[4/3] overflow-hidden bg-brand-dark">
                        <img src="/../../assets/01_READY/<?php echo $item['image']; ?>" 
                             alt="<?php echo htmlspecialchars($item['title']); ?>"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                             loading="lazy">
                        
                        <!-- Overlay on Hover -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    
                    <!-- Info Overlay -->
                    <div class="absolute bottom-0 left-0 right-0 p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="inline-block px-2 py-1 bg-brand-red text-white text-[10px] font-bold tracking-wider uppercase mb-2">
                                <?php echo str_replace('-', ' ', $item['category']); ?>
                            </span>
                            <h3 class="text-xl font-bold text-white mb-1">
                                <?php echo htmlspecialchars($item['title']); ?>
                            </h3>
                            <p class="text-sm text-gray-300 mb-2">
                                <?php echo htmlspecialchars($item['description']); ?>
                            </p>
                            <p class="text-xs text-gray-400">
                                <svg class="inline w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                <?php echo htmlspecialchars($item['location']); ?>
                            </p>
                        </div>
                    </div>
                    
                    <!-- View Icon -->
                    <div class="absolute top-4 right-4 w-10 h-10 bg-brand-red rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                        </svg>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- No Results Message -->
            <div id="noResults" class="hidden text-center py-24">
                <svg class="w-24 h-24 text-gray-600 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                <h3 class="text-2xl font-bold text-gray-400 mb-2">No Projects Found</h3>
                <p class="text-gray-500">Try selecting a different category filter.</p>
            </div>
        </div>
    </section>
    <!-- END: Gallery Grid -->

    <!-- BEGIN: CTA Section -->
    <section class="py-24 bg-brand-dark border-t border-white/5">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-bold tracking-tight text-white mb-6">
                Ready for Your Own<br/>
                <span class="text-brand-red">Transformation?</span>
            </h2>
            <p class="text-xl text-gray-300 mb-10 max-w-2xl mx-auto">
                Every project starts with a free consultation. Let's discuss how we can bring factory-finish quality to your home.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:<?php echo preg_replace('/[^0-9]/', '', SITE_PHONE); ?>" 
                   class="px-8 py-4 bg-brand-red hover:bg-red-700 text-white text-base font-bold tracking-widest transition-all duration-300 rounded-sm shadow-lg hover:shadow-brand-red/50">
                    CALL <?php echo SITE_PHONE; ?>
                </a>
                <a href="/contact.php" 
                   class="px-8 py-4 bg-white/10 hover:bg-white/20 text-white text-base font-bold tracking-widest transition-all duration-300 rounded-sm border border-white/20">
                    REQUEST QUOTE
                </a>
            </div>
        </div>
    </section>
    <!-- END: CTA Section -->

    <!-- BEGIN: Lightbox Modal -->
    <div id="lightboxModal" class="fixed inset-0 bg-black/95 z-50 hidden items-center justify-center p-4">
        <button onclick="closeLightbox()" 
                class="absolute top-6 right-6 w-12 h-12 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center text-white transition-colors z-10">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        
        <button onclick="prevImage()" 
                class="absolute left-6 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center text-white transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        
        <button onclick="nextImage()" 
                class="absolute right-6 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center text-white transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
        
        <div class="max-w-6xl w-full">
            <img id="lightboxImage" 
                 src="" 
                 alt="" 
                 class="w-full h-auto rounded-sm shadow-2xl">
            
            <div id="lightboxInfo" class="mt-6 text-center">
                <h3 id="lightboxTitle" class="text-2xl font-bold text-white mb-2"></h3>
                <p id="lightboxDescription" class="text-gray-300 mb-2"></p>
                <p id="lightboxLocation" class="text-sm text-gray-400"></p>
            </div>
        </div>
    </div>
    <!-- END: Lightbox Modal -->

    <!-- Gallery JavaScript Embedded -->
    <script>
        // Gallery data for JavaScript
        const galleryData = <?php echo json_encode($galleryItems); ?>;
        let currentImageIndex = 0;
        let filteredImages = [...galleryData];

        /**
         * Initialize gallery filters
         */
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Update active state
                    filterButtons.forEach(btn => {
                        btn.classList.remove('active', 'bg-brand-red', 'shadow-lg', 'shadow-brand-red/50');
                        btn.classList.add('bg-white/5', 'text-gray-300');
                    });
                    
                    this.classList.add('active', 'bg-brand-red', 'shadow-lg', 'shadow-brand-red/50');
                    this.classList.remove('bg-white/5', 'text-gray-300');
                    this.classList.add('text-white');
                    
                    // Filter gallery
                    filterGallery(this.dataset.filter);
                });
            });
        });

        /**
         * Filter gallery items by category
         * @param {string} category - Category to filter by
         */
        function filterGallery(category) {
            const items = document.querySelectorAll('.gallery-item');
            const noResults = document.getElementById('noResults');
            let visibleCount = 0;
            
            items.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                    visibleCount++;
                    
                    // Stagger animation
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, visibleCount * 50);
                } else {
                    item.style.display = 'none';
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.9)';
                }
            });
            
            // Update filtered images for lightbox navigation
            if (category === 'all') {
                filteredImages = [...galleryData];
            } else {
                filteredImages = galleryData.filter(img => img.category === category);
            }
            
            // Show/hide no results message
            noResults.classList.toggle('hidden', visibleCount > 0);
        }

        /**
         * Open lightbox with specific image
         * @param {number} imageId - ID of the image to display
         */
        function openLightbox(imageId) {
            const image = filteredImages.find(img => img.id === imageId);
            if (!image) return;
            
            currentImageIndex = filteredImages.findIndex(img => img.id === imageId);
            displayLightboxImage(image);
            
            const modal = document.getElementById('lightboxModal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        /**
         * Close the lightbox modal
         */
        function closeLightbox() {
            const modal = document.getElementById('lightboxModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = '';
        }

        /**
         * Display image in lightbox
         * @param {Object} image - Image data object
         */
        function displayLightboxImage(image) {
            document.getElementById('lightboxImage').src = `/../../assets/01_READY/${image.image}`;
            document.getElementById('lightboxImage').alt = image.title;
            document.getElementById('lightboxTitle').textContent = image.title;
            document.getElementById('lightboxDescription').textContent = image.description;
            document.getElementById('lightboxLocation').textContent = image.location;
        }

        /**
         * Navigate to previous image in lightbox
         */
        function prevImage() {
            currentImageIndex = (currentImageIndex - 1 + filteredImages.length) % filteredImages.length;
            displayLightboxImage(filteredImages[currentImageIndex]);
        }

        /**
         * Navigate to next image in lightbox
         */
        function nextImage() {
            currentImageIndex = (currentImageIndex + 1) % filteredImages.length;
            displayLightboxImage(filteredImages[currentImageIndex]);
        }

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            const modal = document.getElementById('lightboxModal');
            if (!modal.classList.contains('hidden')) {
                if (e.key === 'Escape') closeLightbox();
                if (e.key === 'ArrowLeft') prevImage();
                if (e.key === 'ArrowRight') nextImage();
            }
        });

        // Close lightbox on background click
        document.getElementById('lightboxModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeLightbox();
            }
        });
    </script>

<?php include '../includes/footer.php'; ?>
