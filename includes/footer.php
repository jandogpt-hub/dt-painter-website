    </main>
    
    <footer>
        <div class="footer-container">
            <div class="footer-info">
                <h4><?php echo SITE_NAME; ?></h4>
                <p><?php echo BUSINESS_ADDRESS; ?></p>
                <p><a href="tel:<?php echo preg_replace('/[^0-9]/', '', SITE_PHONE); ?>"><?php echo SITE_PHONE; ?></a></p>
                <p><a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a></p>
            </div>
            <div class="footer-links">
                <h4>Services</h4>
                <ul>
                    <li><a href="/services/interior-painting.php">Interior Painting</a></li>
                    <li><a href="/services/exterior-painting.php">Exterior Painting</a></li>
                    <li><a href="/services/cabinet-refinishing.php">Cabinet Refinishing</a></li>
                    <li><a href="/services/pressure-washing.php">Pressure Washing</a></li>
                </ul>
            </div>
            <div class="footer-cta">
                <a href="tel:<?php echo preg_replace('/[^0-9]/', '', SITE_PHONE); ?>" class="btn btn-primary">Call Now</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo currentYear(); ?> <?php echo SITE_NAME; ?>. All rights reserved.</p>
            <p>Licensed & Insured | CC #13-P-18294-X</p>
        </div>
    </footer>
    
    <script src="<?php echo asset('js/main.js'); ?>"></script>
</body>
</html>
