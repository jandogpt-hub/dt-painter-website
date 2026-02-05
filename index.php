<?php
$pageTitle = 'Professional Painting Services in Coral Springs';
$pageDescription = 'DT Painter offers expert interior, exterior, and cabinet painting services in Coral Springs, FL. 5-star rated, licensed & insured.';
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Transform Your Space with Premium Painting</h1>
        <p>Coral Springs' trusted painting professionals. Interior, exterior, and cabinet refinishing with a 5-star reputation.</p>
        <div class="hero-cta">
            <a href="tel:<?php echo preg_replace('/[^0-9]/', '', SITE_PHONE); ?>" class="btn btn-secondary">Call Now</a>
            <a href="/contact.php" class="btn btn-primary">Get a Free Quote</a>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="section">
    <div class="container">
        <h2 class="text-center mb-4">Our Services</h2>
        <div class="grid-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Interior Painting</h3>
                    <p>Transform your living spaces with professional interior painting that lasts.</p>
                    <a href="/services/interior-painting.php" class="btn btn-primary">Learn More</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Exterior Painting</h3>
                    <p>Protect and beautify your home's exterior with our expert painting services.</p>
                    <a href="/services/exterior-painting.php" class="btn btn-primary">Learn More</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Cabinet Refinishing</h3>
                    <p>Give your kitchen a stunning new look without the cost of replacement.</p>
                    <a href="/services/cabinet-refinishing.php" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trust Signals -->
<section class="section section-light">
    <div class="container text-center">
        <h2 class="mb-4">Why Choose DT Painter?</h2>
        <div class="grid-3">
            <div>
                <h3>⭐ 5.0 Stars</h3>
                <p>83+ verified reviews from happy customers</p>
            </div>
            <div>
                <h3>🛡️ Licensed & Insured</h3>
                <p>CC #13-P-18294-X - Your peace of mind</p>
            </div>
            <div>
                <h3>🏆 Best of 2023</h3>
                <p>Award-winning service you can trust</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section section-dark">
    <div class="container text-center">
        <h2 class="mb-2">Ready to Transform Your Space?</h2>
        <p class="mb-4">Get a free, no-obligation quote today.</p>
        <a href="tel:<?php echo preg_replace('/[^0-9]/', '', SITE_PHONE); ?>" class="btn btn-secondary">Call <?php echo SITE_PHONE; ?></a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
