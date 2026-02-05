<header class="site-header">
    <div class="header-container">
        <a href="/" class="logo">
            <img src="<?php echo asset('images/logo.png'); ?>" alt="<?php echo SITE_NAME; ?> Logo">
        </a>
        
        <nav class="main-nav">
            <ul class="nav-list">
                <li><a href="/">Home</a></li>
                <li class="has-dropdown">
                    <a href="#">Services</a>
                    <ul class="dropdown">
                        <li><a href="/services/interior-painting.php">Interior Painting</a></li>
                        <li><a href="/services/exterior-painting.php">Exterior Painting</a></li>
                        <li><a href="/services/cabinet-refinishing.php">Cabinet Refinishing</a></li>
                        <li><a href="/services/drywall-texture.php">Drywall & Texture</a></li>
                        <li><a href="/services/wallpaper-removal.php">Wallpaper Removal</a></li>
                        <li><a href="/services/pressure-washing.php">Pressure Washing</a></li>
                    </ul>
                </li>
                <li><a href="/gallery/">Gallery</a></li>
                <li><a href="/about.php">About</a></li>
                <li><a href="/contact.php">Contact</a></li>
            </ul>
        </nav>
        
        <a href="tel:<?php echo preg_replace('/[^0-9]/', '', SITE_PHONE); ?>" class="header-cta btn btn-primary">
            <?php echo SITE_PHONE; ?>
        </a>
        
        <button class="mobile-menu-toggle" aria-label="Toggle menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>
