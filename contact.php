<?php
/**
 * Contact Us Page
 * Professional contact form with Cloudflare Turnstile spam protection
 */
$pageTitle = 'Contact DT Painter | Free Quote for Cabinet Refinishing in Coral Springs';
$pageDescription = 'Get a free, no-obligation quote for cabinet refinishing, exterior painting, or popcorn removal. Call (954) 250-7399 or fill out our contact form. Licensed & insured in Coral Springs, FL.';
include 'includes/header.php';
?>

    <!-- BEGIN: Hero Section -->
    <section class="relative min-h-[50vh] flex items-center bg-brand-dark overflow-hidden pt-20">
        <!-- Background Pattern -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 40px 40px;"></div>
            <div class="absolute top-1/4 right-1/4 w-96 h-96 bg-brand-red/10 rounded-full blur-[120px]"></div>
        </div>

        <!-- Content Container -->
        <div class="max-w-7xl mx-auto px-6 relative z-10 w-full py-16">
            <div class="max-w-3xl">
                <span class="px-3 py-1 bg-brand-red text-white text-[10px] font-bold tracking-[0.2em] uppercase rounded-sm inline-block mb-6">
                    Free Consultation
                </span>
                
                <h1 class="text-5xl md:text-7xl font-extrabold leading-[0.95] tracking-tighter text-white mb-8">
                    Let's Discuss<br/>
                    <span class="text-brand-red">Your Project</span>
                </h1>
                
                <p class="text-xl text-gray-300 font-light leading-relaxed max-w-2xl">
                    Ready to transform your home with factory-finish cabinet refinishing or premium painting services? Get a detailed, no-obligation quote from our licensed team.
                </p>
            </div>
        </div>
    </section>
    <!-- END: Hero Section -->

    <!-- BEGIN: Contact Section -->
    <section class="py-24 bg-brand-dark border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16">
                <!-- Contact Information -->
                <div>
                    <div class="mb-12">
                        <span class="text-brand-red font-mono text-xs tracking-[0.5em] uppercase mb-4 block">Get In Touch</span>
                        <h2 class="text-4xl md:text-5xl font-bold tracking-tight text-white mb-6">
                            Multiple Ways to<br/>
                            <span class="text-brand-red">Reach Us</span>
                        </h2>
                        <p class="text-gray-400 leading-relaxed">
                            Whether you need a quick estimate or want to discuss a complex project, we're here to help. Our team typically responds within 24 hours.
                        </p>
                    </div>

                    <!-- Contact Methods -->
                    <div class="space-y-8">
                        <!-- Phone -->
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-brand-red/10 text-brand-red rounded-sm">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-white font-bold mb-2">Call or Text</p>
                                <a href="tel:<?php echo defined('SITE_PHONE') ? preg_replace('/[^0-9]/', '', SITE_PHONE) : '9542507399'; ?>" 
                                   class="text-2xl font-bold text-brand-red hover:text-red-400 transition-colors">
                                    <?php echo defined('SITE_PHONE') ? SITE_PHONE : '(954) 250-7399'; ?>
                                </a>
                                <p class="text-sm text-gray-400 mt-1">Mon-Fri: 8:00 AM – 5:00 PM EST</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-brand-red/10 text-brand-red rounded-sm">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-white font-bold mb-2">Email Us</p>
                                <a href="mailto:<?php echo defined('SITE_EMAIL') ? SITE_EMAIL : 'info@dtpainter.com'; ?>" 
                                   class="text-lg text-brand-red hover:text-red-400 transition-colors">
                                    <?php echo defined('SITE_EMAIL') ? SITE_EMAIL : 'info@dtpainter.com'; ?>
                                </a>
                                <p class="text-sm text-gray-400 mt-1">We'll respond within 24 hours</p>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-brand-red/10 text-brand-red rounded-sm">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-white font-bold mb-2">Visit Our Office</p>
                                <p class="text-gray-300">
                                    <?php echo defined('BUSINESS_ADDRESS') ? BUSINESS_ADDRESS : '2500 NW 115th Dr, Coral Springs, FL 33065'; ?>
                                </p>
                                <p class="text-sm text-gray-400 mt-1">By appointment only</p>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="pt-8 border-t border-white/10">
                            <p class="text-white font-bold mb-4">Follow Us</p>
                            <div class="flex gap-4">
                                <a href="<?php echo defined('SOCIAL_FACEBOOK') ? SOCIAL_FACEBOOK : '#'; ?>" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="w-10 h-10 flex items-center justify-center bg-white/5 hover:bg-brand-red text-gray-400 hover:text-white transition-all rounded-sm">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
                                    </svg>
                                </a>
                                <a href="<?php echo defined('SOCIAL_INSTAGRAM') ? SOCIAL_INSTAGRAM : '#'; ?>" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="w-10 h-10 flex items-center justify-center bg-white/5 hover:bg-brand-red text-gray-400 hover:text-white transition-all rounded-sm">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
                                    </svg>
                                </a>
                                <a href="<?php echo defined('SOCIAL_LINKEDIN') ? SOCIAL_LINKEDIN : '#'; ?>" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="w-10 h-10 flex items-center justify-center bg-white/5 hover:bg-brand-red text-gray-400 hover:text-white transition-all rounded-sm">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-[#0F0F0F] border border-white/10 rounded-sm p-8">
                    <h3 class="text-2xl font-bold text-white mb-6">Request a Free Quote</h3>
                    
                    <form id="contactForm" method="POST" action="process-contact.php" class="space-y-6">
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-bold text-white mb-2">
                                Full Name <span class="text-brand-red">*</span>
                            </label>
                            <input type="text" 
                                   id="name" 
                                   name="name" 
                                   required
                                   class="w-full px-4 py-3 bg-brand-dark border border-white/10 text-white placeholder-gray-500 focus:border-brand-red focus:outline-none rounded-sm transition-colors">
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-bold text-white mb-2">
                                Email Address <span class="text-brand-red">*</span>
                            </label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   required
                                   class="w-full px-4 py-3 bg-brand-dark border border-white/10 text-white placeholder-gray-500 focus:border-brand-red focus:outline-none rounded-sm transition-colors">
                        </div>

                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-sm font-bold text-white mb-2">
                                Phone Number <span class="text-brand-red">*</span>
                            </label>
                            <input type="tel" 
                                   id="phone" 
                                   name="phone" 
                                   required
                                   class="w-full px-4 py-3 bg-brand-dark border border-white/10 text-white placeholder-gray-500 focus:border-brand-red focus:outline-none rounded-sm transition-colors">
                        </div>

                        <!-- Service Interest -->
                        <div>
                            <label for="service" class="block text-sm font-bold text-white mb-2">
                                Service Interested In <span class="text-brand-red">*</span>
                            </label>
                            <select id="service" 
                                    name="service" 
                                    required
                                    class="w-full px-4 py-3 bg-brand-dark border border-white/10 text-white focus:border-brand-red focus:outline-none rounded-sm transition-colors">
                                <option value="">Select a service...</option>
                                <option value="Cabinet Refinishing">Cabinet Refinishing</option>
                                <option value="Exterior Painting">Exterior Painting</option>
                                <option value="Interior Painting">Interior Painting</option>
                                <option value="Popcorn Ceiling Removal">Popcorn Ceiling Removal</option>
                                <option value="Commercial Painting">Commercial Painting</option>
                                <option value="Pressure Washing">Pressure Washing</option>
                                <option value="Garage Door Restoration">Garage Door Restoration</option>
                                <option value="Other">Other / Not Sure</option>
                            </select>
                        </div>

                        <!-- City -->
                        <div>
                            <label for="city" class="block text-sm font-bold text-white mb-2">
                                City / Neighborhood
                            </label>
                            <input type="text" 
                                   id="city" 
                                   name="city" 
                                   placeholder="e.g., Coral Springs, Parkland"
                                   class="w-full px-4 py-3 bg-brand-dark border border-white/10 text-white placeholder-gray-500 focus:border-brand-red focus:outline-none rounded-sm transition-colors">
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-bold text-white mb-2">
                                Project Details <span class="text-brand-red">*</span>
                            </label>
                            <textarea id="message" 
                                      name="message" 
                                      rows="5" 
                                      required
                                      placeholder="Tell us about your project, timeline, and any specific requirements..."
                                      class="w-full px-4 py-3 bg-brand-dark border border-white/10 text-white placeholder-gray-500 focus:border-brand-red focus:outline-none rounded-sm transition-colors resize-none"></textarea>
                        </div>

                        <!-- Cloudflare Turnstile -->
                        <div id="turnstile-container" class="cf-turnstile" data-sitekey="REPLACE_WITH_YOUR_TURNSTILE_SITE_KEY"></div>

                        <!-- Submit Button -->
                        <button type="submit" 
                                class="w-full px-8 py-4 bg-brand-red hover:bg-red-700 text-white text-base font-bold tracking-widest transition-all duration-300 rounded-sm shadow-lg hover:shadow-brand-red/50">
                            GET FREE QUOTE
                        </button>

                        <!-- Privacy Notice -->
                        <p class="text-xs text-gray-500 leading-relaxed">
                            By submitting this form, you agree to our privacy policy. We will never share your information with third parties. Licensed & Insured • CC #13-P-18294-X
                        </p>
                    </form>

                    <!-- Success/Error Messages (Hidden by default) -->
                    <div id="formSuccess" class="hidden mt-6 p-4 bg-green-500/10 border border-green-500/20 rounded-sm">
                        <p class="text-green-400 font-bold">✓ Thank you! We'll contact you within 24 hours.</p>
                    </div>
                    <div id="formError" class="hidden mt-6 p-4 bg-red-500/10 border border-red-500/20 rounded-sm">
                        <p class="text-red-400 font-bold">⚠ There was an error. Please try again or call us directly.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Contact Section -->

    <!-- BEGIN: Service Areas Map -->
    <section class="py-24 bg-[#0F0F0F] border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold tracking-tight text-white mb-6">
                    Proudly Serving <span class="text-brand-red">South Florida</span>
                </h2>
                <p class="text-gray-400 max-w-2xl mx-auto">
                    DT Painter provides licensed cabinet refinishing and painting services throughout Broward County and surrounding areas.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto">
                <div class="text-center p-6 bg-brand-dark border border-white/5 rounded-sm hover:border-brand-red/30 transition-all">
                    <p class="text-white font-bold">Coral Springs</p>
                </div>
                <div class="text-center p-6 bg-brand-dark border border-white/5 rounded-sm hover:border-brand-red/30 transition-all">
                    <p class="text-white font-bold">Parkland</p>
                </div>
                <div class="text-center p-6 bg-brand-dark border border-white/5 rounded-sm hover:border-brand-red/30 transition-all">
                    <p class="text-white font-bold">Coconut Creek</p>
                </div>
                <div class="text-center p-6 bg-brand-dark border border-white/5 rounded-sm hover:border-brand-red/30 transition-all">
                    <p class="text-white font-bold">Margate</p>
                </div>
                <div class="text-center p-6 bg-brand-dark border border-white/5 rounded-sm hover:border-brand-red/30 transition-all">
                    <p class="text-white font-bold">Tamarac</p>
                </div>
                <div class="text-center p-6 bg-brand-dark border border-white/5 rounded-sm hover:border-brand-red/30 transition-all">
                    <p class="text-white font-bold">Boca Raton</p>
                </div>
                <div class="text-center p-6 bg-brand-dark border border-white/5 rounded-sm hover:border-brand-red/30 transition-all">
                    <p class="text-white font-bold">Fort Lauderdale</p>
                </div>
                <div class="text-center p-6 bg-brand-dark border border-white/5 rounded-sm hover:border-brand-red/30 transition-all">
                    <p class="text-white font-bold">Pompano Beach</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Service Areas Map -->

    <!-- Load Contact Form JavaScript -->
    <script src="assets/js/contact-form.js"></script>
    
    <!-- Load Cloudflare Turnstile Script -->
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

<?php include 'includes/footer.php'; ?>
