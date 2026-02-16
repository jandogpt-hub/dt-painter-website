<?php
$pageTitle = 'Thank You | DT Painter';
$pageDescription = 'Thank you for contacting DT Painter. We have received your request and will be in touch shortly.';
include 'includes/header.php';
?>

<main class="min-h-[70vh] flex items-center justify-center bg-brand-dark relative overflow-hidden py-32">
    <!-- Background Elements -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-brand-red/10 rounded-full blur-[120px]"></div>
    </div>

    <!-- Content -->
    <div class="text-center relative z-10 px-6 max-w-2xl mx-auto">
        <div class="w-20 h-20 bg-green-500/10 rounded-full flex items-center justify-center mx-auto mb-8 border border-green-500/20">
            <svg class="w-10 h-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Message Sent!</h1>
        
        <p class="text-xl text-gray-300 mb-10 leading-relaxed">
            Thank you for requesting a quote. We've received your details and one of our specialists will be in touch within 24 hours.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/" class="px-8 py-4 bg-white/5 border border-white/10 hover:bg-white/10 text-white font-bold rounded-sm transition-all text-sm tracking-widest uppercase">
                Back to Home
            </a>
            <a href="tel:<?php echo defined('SITE_PHONE') ? preg_replace('/[^0-9]/', '', SITE_PHONE) : ''; ?>" 
               class="px-8 py-4 bg-brand-red hover:bg-red-700 text-white font-bold rounded-sm shadow-lg hover:shadow-brand-red/50 transition-all text-sm tracking-widest uppercase">
                Call Now
            </a>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
