    <!-- BEGIN: Footer -->
    <footer class="bg-brand-dark border-t border-white/5 pt-24 pb-12 text-white">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12 mb-20">
            <div class="space-y-6">
                <!-- Logo/Brand Area -->
                <div class="flex items-center gap-2">
                     <a href="/" class="block">
                        <img src="/assets/images/logo.jpg" alt="DT Painter" class="h-12 w-auto border border-white/10 rounded-sm">
                     </a>
                </div>
                <p class="text-gray-500 text-xs leading-relaxed max-w-xs">
                    Licensed Cabinet Refinishing & Residential Painting Specialist for Coral Springs and Parkland homeowners. Factory-grade finishes without the renovation price tag.
                </p>
                <div class="text-xs text-brand-red font-mono border border-brand-red/20 inline-block px-2 py-1 rounded bg-brand-red/5">
                    License: CC #13-P-18294-X
                </div>
            </div>
            <div>
                <h4 class="text-xs font-bold tracking-widest uppercase mb-8 text-white">Services</h4>
                <ul class="space-y-4 text-xs text-gray-400 font-medium">
                    <li><a class="hover:text-brand-red transition-colors" href="/services/cabinet-refinishing.php">Cabinet Refinishing</a></li>
                    <li><a class="hover:text-brand-red transition-colors" href="/services/interior-painting.php">Interior Painting</a></li>
                    <li><a class="hover:text-brand-red transition-colors" href="/services/exterior-painting.php">Exterior Painting</a></li>
                    <li><a class="hover:text-brand-red transition-colors" href="/services/drywall-texture.php">Drywall & Texture</a></li>
                    <li><a class="hover:text-brand-red transition-colors" href="/services/pressure-washing.php">Pressure Washing</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-xs font-bold tracking-widest uppercase mb-8 text-white">Service Areas</h4>
                <ul class="space-y-4 text-xs text-gray-400 font-medium">
                    <li><a class="hover:text-brand-red transition-colors" href="/area-served/coral-springs.php">Coral Springs</a></li>
                    <li><a class="hover:text-brand-red transition-colors" href="/area-served/boca-raton.php">Boca Raton</a></li>
                    <!--
                    <li><a class="hover:text-brand-red transition-colors" href="/area-served/parkland.php">Parkland</a></li>
                    <li><a class="hover:text-brand-red transition-colors" href="/area-served/coconut-creek.php">Coconut Creek</a></li>
                    <li><a class="hover:text-brand-red transition-colors" href="/area-served/margate.php">Margate</a></li>
                    <li><a class="hover:text-brand-red transition-colors" href="/area-served/tamarac.php">Tamarac</a></li>
                    -->
                </ul>
            </div>
            <div>
                <h4 class="text-xs font-bold tracking-widest uppercase mb-8 text-white">Contact</h4>
                <ul class="space-y-4 text-xs text-gray-400 font-medium">
                    <li class="flex items-start gap-3">
                        <div class="w-1.5 h-1.5 rounded-full bg-brand-red mt-1.5"></div>
                        <span>2500 NW 115th Dr,<br>Coral Springs, FL 33065</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-1.5 h-1.5 rounded-full bg-brand-red"></div>
                        <a href="mailto:info@dtpainter.com" class="hover:text-white transition-colors">info@dtpainter.com</a>
                    </li>
                     <li class="flex items-center gap-3">
                        <div class="w-1.5 h-1.5 rounded-full bg-brand-red"></div>
                        <a href="tel:<?php echo defined('SITE_PHONE') ? preg_replace('/[^0-9]/', '', SITE_PHONE) : '5551234567'; ?>" class="hover:text-white transition-colors text-white font-bold"><?php echo defined('SITE_PHONE') ? SITE_PHONE : '(555) 123-4567'; ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <div
            class="max-w-7xl mx-auto px-6 pt-12 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
            <p class="text-[10px] text-gray-500 tracking-widest uppercase">© <?php echo date('Y'); ?> DT Painter, LLC. All Rights Reserved.</p>
            <div class="flex gap-8">
                <a class="text-[10px] text-gray-500 tracking-widest uppercase hover:text-white transition-colors"
                    href="/privacy.php">Privacy Policy</a>
                <a class="text-[10px] text-gray-500 tracking-widest uppercase hover:text-white transition-colors"
                    href="/terms.php">Terms of Service</a>
            </div>
        </div>
    </footer>
    <!-- END: Footer -->
</body>
</html>
