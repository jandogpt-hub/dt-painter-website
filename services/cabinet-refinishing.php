<?php
$pageTitle = 'Cabinet Refinishing & Painting in Coral Springs';
$pageDescription = 'Professional cabinet painting and refinishing services. Get a factory-like finish for your kitchen cabinets at a fraction of the cost of replacement.';
include '../includes/header.php';
?>

<!-- Service Hero -->
<section class="hero">
    <div class="container">
        <h1>Professional Cabinet Refinishing</h1>
        <p>Give your kitchen a high-end, factory-like finish without the cost of a full remodel.</p>
        <div class="hero-cta">
            <a href="tel:<?php echo preg_replace('/[^0-9]/', '', SITE_PHONE); ?>" class="btn btn-secondary">Get a Free Estimate</a>
        </div>
    </div>
</section>

<!-- Main Content Section -->
<section class="section">
    <div class="container">
        <div class="grid-2">
            <div class="service-content">
                <h2>Transform Your Kitchen in Days, Not Weeks</h2>
                <p>Are your cabinets looking dated, worn, or simply not your style? You don't need to spend tens of thousands on a full kitchen replacement. Our professional cabinet refinishing process can transform your existing cabinets with a durable, beautiful finish that looks brand new.</p>
                
                <h3>Why Choose Refinishing?</h3>
                <ul class="mb-3">
                    <li><strong>Cost-Effective:</strong> Save up to 70% compared to the cost of new cabinets.</li>
                    <li><strong>Fast Turnaround:</strong> Most projects are completed in just 4-6 days.</li>
                    <li><strong>Durable Finish:</strong> We use industrial-grade coatings specifically designed for cabinetry.</li>
                    <li><strong>Eco-Friendly:</strong> Keep your perfectly good cabinets out of the landfill.</li>
                </ul>
            </div>
            <div class="service-image">
                <img src="<?php echo get_dt_image('-AQBLKKXxNxBP0vnaNmCf8PJGMgwSNGXjQxewNvVz5SATHOWluAUZplRGexZrd6UkBeIcyNlD4MptfVo-g_s0_mhocfp.jpg'); ?>" alt="Professional Cabinet Refinishing Transformation" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- Our Process Section -->
<section class="section section-light">
    <div class="container">
        <h2 class="text-center mb-4">Our Professional Process</h2>
        <div class="grid-3">
            <div class="card text-center">
                <div class="card-body">
                    <h3>1. Preparation</h3>
                    <p>We remove all doors and drawer fronts. Total masking of your kitchen ensures your floors and appliances are protected.</p>
                </div>
            </div>
            <div class="card text-center">
                <div class="card-body">
                    <h3>2. Cleaning & Sanding</h3>
                    <p>Cabinets are thoroughly degreased and sanded to ensure maximum adhesion for the new finish.</p>
                </div>
            </div>
            <div class="card text-center">
                <div class="card-body">
                    <h3>3. Professional Spraying</h3>
                    <p>We use HVLP sprayers to apply multiple coats of primer and finish, creating a smooth, brush-mark-free surface.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trust & FAQs -->
<section class="section">
    <div class="container">
        <h2 class="text-center mb-4">Frequently Asked Questions</h2>
        <div class="faq-list" style="max-width: 800px; margin: 0 auto;">
            <div class="mb-3">
                <h4>How long does the finish last?</h4>
                <p>With proper care, our factory-grade finish will last as long as new cabinets. It is resistant to chipping, moisture, and common kitchen cleaners.</p>
            </div>
            <div class="mb-3">
                <h4>Do I need to empty my cabinets?</h4>
                <p>Only the countertops and top drawers need to be cleared. We mask off the cabinet interiors so you can leave your items inside.</p>
            </div>
            <div class="mb-3">
                <h4>Can you paint any type of cabinet?</h4>
                <p>Yes! We can refinish solid wood, oak, maple, and even high-quality MDF or laminate cabinets.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section section-dark">
    <div class="container text-center">
        <h2 class="mb-2">Ready for a Kitchen Refresh?</h2>
        <p class="mb-4">Contact us today for a free, detailed quote on your cabinet project.</p>
        <a href="tel:<?php echo preg_replace('/[^0-9]/', '', SITE_PHONE); ?>" class="btn btn-secondary">Call <?php echo SITE_PHONE; ?></a>
        <a href="/contact.php" class="btn btn-primary">Book an Estimate Online</a>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
