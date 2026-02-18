<?php
include_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'DT Painter'; ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Professional painting services.'; ?>">
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
    
    <!-- Cloudflare Turnstile -->
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

    <!-- Tailwind CSS v3 (CDN for Rapid Prototyping) -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    
    <!-- Google Fonts: Inter, Archivo Black, JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Inter:wght@300;400;600;700;800&family=JetBrains+Mono:wght@300;400&display=swap" rel="stylesheet">

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            red: '#FF1E1E', // Vibrant red
                            navy: '#1A2A44', 
                            dark: '#0A0A0A', // Deep neutral-950
                            gray: '#1F1F1F', 
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Archivo Black', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                    animation: {
                        'flow-path': 'flow 20s linear infinite',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        flow: {
                            '0%': { strokeDashoffset: '1000' },
                            '100%': { strokeDashoffset: '0' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        }
                    }
                }
            }
        }
    </script>

    <!-- Custom Styles (Animations & Glassmorphism) -->
    <style>
        .glass-morphism {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .gradient-text {
            background: linear-gradient(to bottom, #FFFFFF 0%, rgba(255, 255, 255, 0.4) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        /* Keep existing CSS file for fallback/specifics, but Tailwind takes precedence */
    </style>
    
    <!-- Legacy CSS (Optional, keep for specific component compat if needed) -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <?php if (isset($extra_css)) echo $extra_css; ?>
</head>
<body class="bg-brand-dark text-white font-sans selection:bg-brand-red selection:text-white">

    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 glass-morphism border-b border-white/5 py-3 lg:py-4 transition-all duration-300" id="main-nav">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 flex justify-between items-center h-16">
            
            <!-- Logo (Image) -->
            <div class="flex-shrink-0 flex items-center gap-3 relative z-50">
                <a href="/" class="flex items-center gap-2">
                    <img src="/assets/images/logo.jpg" alt="DT Painter Logo" class="h-10 w-auto border border-white/10 rounded-sm">
                    <span class="sr-only">DT Painter</span>
                </a>
            </div>

            <!-- Mobile: Center Call Button -->
            <div class="lg:hidden flex-1 flex justify-center">
                 <a href="tel:<?php echo defined('SITE_PHONE') ? preg_replace('/[^0-9]/', '', SITE_PHONE) : '5551234567'; ?>" class="flex items-center gap-3 bg-brand-red px-8 py-3 rounded-full shadow-lg hover:bg-red-600 transition-colors">
                    <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span class="text-sm font-bold text-white tracking-widest uppercase">Call Us</span>
                 </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex gap-8 text-sm font-medium tracking-widest uppercase text-white items-center">
                <a class="hover:text-brand-red transition-colors" href="/">Home</a>
                
                <!-- Services Dropdown -->
                <div class="relative group">
                    <button class="flex items-center gap-1 hover:text-brand-red transition-colors focus:outline-none py-4">
                        Services
                        <svg class="w-4 h-4 text-gray-400 group-hover:text-brand-red transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <!-- Dropdown Menu -->
                    <div class="absolute top-full left-0 mt-0 w-64 bg-[#0A0A0A] border border-white/10 rounded-sm shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform origin-top-left z-50">
                        <div class="py-2 flex flex-col">
                            <a href="/services/cabinet-refinishing.php" class="px-5 py-3 hover:bg-white/5 hover:text-brand-red transition-colors border-b border-white/5 flex items-center justify-between group/item">
                                Cabinet Refinishing
                                <span class="text-brand-red opacity-0 group-hover/item:opacity-100 transition-opacity">→</span>
                            </a>
                            <a href="/services/interior-painting.php" class="px-5 py-3 hover:bg-white/5 hover:text-brand-red transition-colors border-b border-white/5 flex items-center justify-between group/item">
                                Interior Painting
                                <span class="text-brand-red opacity-0 group-hover/item:opacity-100 transition-opacity">→</span>
                            </a>
                            <a href="/services/exterior-painting.php" class="px-5 py-3 hover:bg-white/5 hover:text-brand-red transition-colors border-b border-white/5 flex items-center justify-between group/item">
                                Exterior Painting
                                <span class="text-brand-red opacity-0 group-hover/item:opacity-100 transition-opacity">→</span>
                            </a>
                            <a href="/services/drywall-texture.php" class="px-5 py-3 hover:bg-white/5 hover:text-brand-red transition-colors border-b border-white/5 flex items-center justify-between group/item">
                                Drywall & Texture
                                <span class="text-brand-red opacity-0 group-hover/item:opacity-100 transition-opacity">→</span>
                            </a>
                            <a href="/services/wallpaper-removal.php" class="px-5 py-3 hover:bg-white/5 hover:text-brand-red transition-colors border-b border-white/5 flex items-center justify-between group/item">
                                Wallpaper Removal
                                <span class="text-brand-red opacity-0 group-hover/item:opacity-100 transition-opacity">→</span>
                            </a>
                            <a href="/services/pressure-washing.php" class="px-5 py-3 hover:bg-white/5 hover:text-brand-red transition-colors flex items-center justify-between group/item">
                                Pressure Washing
                                <span class="text-brand-red opacity-0 group-hover/item:opacity-100 transition-opacity">→</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Areas Served Dropdown -->
                <div class="relative group">
                    <button class="flex items-center gap-1 hover:text-brand-red transition-colors focus:outline-none py-4">
                        Areas Served
                        <svg class="w-4 h-4 text-gray-400 group-hover:text-brand-red transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute top-full left-0 mt-0 w-56 bg-[#0A0A0A] border border-white/10 rounded-sm shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform origin-top-left z-50">
                        <div class="py-2 flex flex-col">
                            <a href="/area-served/coral-springs.php" class="px-5 py-3 hover:bg-white/5 hover:text-brand-red transition-colors border-b border-white/5 flex items-center justify-between group/item">
                                Coral Springs
                                <span class="text-brand-red opacity-0 group-hover/item:opacity-100 transition-opacity">→</span>
                            </a>
                            <a href="/area-served/boca-raton.php" class="px-5 py-3 hover:bg-white/5 hover:text-brand-red transition-colors border-b border-white/5 flex items-center justify-between group/item">
                                Boca Raton
                                <span class="text-brand-red opacity-0 group-hover/item:opacity-100 transition-opacity">→</span>
                            </a>
                            <!-- 
                            <a href="/area-served/parkland.php" class="px-5 py-3 hover:bg-white/5 hover:text-brand-red transition-colors border-b border-white/5 flex items-center justify-between group/item">
                                Parkland
                                <span class="text-brand-red opacity-0 group-hover/item:opacity-100 transition-opacity">→</span>
                            </a>
                            <a href="/area-served/coconut-creek.php" class="px-5 py-3 hover:bg-white/5 hover:text-brand-red transition-colors border-b border-white/5 flex items-center justify-between group/item">
                                Coconut Creek
                                <span class="text-brand-red opacity-0 group-hover/item:opacity-100 transition-opacity">→</span>
                            </a>
                            <a href="/area-served/margate.php" class="px-5 py-3 hover:bg-white/5 hover:text-brand-red transition-colors border-b border-white/5 flex items-center justify-between group/item">
                                Margate
                                <span class="text-brand-red opacity-0 group-hover/item:opacity-100 transition-opacity">→</span>
                            </a>
                            <a href="/area-served/tamarac.php" class="px-5 py-3 hover:bg-white/5 hover:text-brand-red transition-colors flex items-center justify-between group/item">
                                Tamarac
                                <span class="text-brand-red opacity-0 group-hover/item:opacity-100 transition-opacity">→</span>
                            </a>
                            -->
                        </div>
                    </div>
                </div>

                <a class="hover:text-brand-red transition-colors" href="/gallery/">Gallery</a>
                <a class="hover:text-brand-red transition-colors" href="/about.php">About</a>
                <a class="hover:text-brand-red transition-colors" href="/contact.php">Contact</a>
            </div>

            <!-- CTAs (Desktop) -->
            <div class="hidden lg:flex gap-4 items-center">
                 <a href="tel:<?php echo defined('SITE_PHONE') ? preg_replace('/[^0-9]/', '', SITE_PHONE) : '5551234567'; ?>" class="text-brand-red font-bold tracking-widest hover:text-white transition-colors">
                    <?php echo defined('SITE_PHONE') ? SITE_PHONE : '(555) 123-4567'; ?>
                 </a>
                <a href="#quote" class="px-6 py-2 bg-brand-red hover:bg-red-700 transition-all text-sm font-semibold tracking-tighter text-white rounded-sm shadow-brand-glow">GET QUOTE</a>
            </div>
            
            <!-- Mobile Menu Button -->
            <div class="lg:hidden flex items-center z-[70]">
                 <button id="mobile-menu-btn" class="text-white p-2 focus:outline-none relative">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                 </button>
            </div>
        </div>
        
        <!-- Mobile Menu Overlay -->
        <div id="mobile-menu" class="fixed top-0 left-0 w-full h-screen bg-brand-dark/95 backdrop-blur-xl z-[60] hidden flex-col pt-24 px-6 gap-6 overflow-y-auto transition-opacity duration-300">
             <a href="/" class="text-2xl font-bold text-white border-b border-white/5 pb-4">Home</a>
             <div class="flex flex-col gap-4">
                <span class="text-xs font-bold text-brand-red uppercase tracking-widest">Services</span>
                <a href="/services/cabinet-refinishing.php" class="text-lg text-gray-300 pl-4 border-l border-white/10 hover:border-brand-red hover:text-white transition-all">Cabinet Refinishing</a>
                <a href="/services/interior-painting.php" class="text-lg text-gray-300 pl-4 border-l border-white/10 hover:border-brand-red hover:text-white transition-all">Interior Painting</a>
                <a href="/services/exterior-painting.php" class="text-lg text-gray-300 pl-4 border-l border-white/10 hover:border-brand-red hover:text-white transition-all">Exterior Painting</a>
                <a href="/services/drywall-texture.php" class="text-lg text-gray-300 pl-4 border-l border-white/10 hover:border-brand-red hover:text-white transition-all">Drywall & Texture</a>
                <a href="/services/wallpaper-removal.php" class="text-lg text-gray-300 pl-4 border-l border-white/10 hover:border-brand-red hover:text-white transition-all">Wallpaper Removal</a>
                <a href="/services/pressure-washing.php" class="text-lg text-gray-300 pl-4 border-l border-white/10 hover:border-brand-red hover:text-white transition-all">Pressure Washing</a>
             </div>
             <a href="/gallery/" class="text-2xl font-bold text-white border-b border-white/5 pb-4 mt-2">Gallery</a>
             <div class="flex flex-col gap-4 border-b border-white/5 pb-4">
                <span class="text-xs font-bold text-brand-red uppercase tracking-widest mt-2">Areas Served</span>
                <a href="/area-served/coral-springs.php" class="text-lg text-gray-300 pl-4 border-l border-white/10 hover:border-brand-red hover:text-white transition-all">Coral Springs</a>
                <a href="/area-served/boca-raton.php" class="text-lg text-gray-300 pl-4 border-l border-white/10 hover:border-brand-red hover:text-white transition-all">Boca Raton</a>
                <!--
                <a href="/area-served/parkland.php" class="text-lg text-gray-300 pl-4 border-l border-white/10 hover:border-brand-red hover:text-white transition-all">Parkland</a>
                <a href="/area-served/coconut-creek.php" class="text-lg text-gray-300 pl-4 border-l border-white/10 hover:border-brand-red hover:text-white transition-all">Coconut Creek</a>
                <a href="/area-served/margate.php" class="text-lg text-gray-300 pl-4 border-l border-white/10 hover:border-brand-red hover:text-white transition-all">Margate</a>
                <a href="/area-served/tamarac.php" class="text-lg text-gray-300 pl-4 border-l border-white/10 hover:border-brand-red hover:text-white transition-all">Tamarac</a>
                -->
             </div>
             <a href="/about.php" class="text-2xl font-bold text-white border-b border-white/5 pb-4">About</a>
             <a href="/contact.php" class="text-2xl font-bold text-white border-b border-white/5 pb-4">Contact</a>
             <div class="mt-8 space-y-4">
                 <a href="tel:<?php echo defined('SITE_PHONE') ? preg_replace('/[^0-9]/', '', SITE_PHONE) : '5551234567'; ?>" class="flex items-center justify-center gap-2 w-full py-4 bg-brand-red rounded-sm text-white font-bold shadow-lg">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                    Call <?php echo defined('SITE_PHONE') ? SITE_PHONE : '(555) 123-4567'; ?>
                 </a>
                 <a href="#quote" class="block w-full text-center py-4 border border-white/20 hover:bg-white/5 rounded-sm text-white font-bold uppercase tracking-widest">Start My Home Transformation</a>
             </div>
        </div>
        
        <script>
            // Mobile Menu Logic
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            const nav = document.getElementById('main-nav');
            
            // Toggle Menu
            if(btn && menu) {
                btn.addEventListener('click', () => {
                    menu.classList.toggle('hidden');
                    menu.classList.toggle('flex');
                    
                    // Body scroll lock
                    document.body.style.overflow = menu.classList.contains('flex') ? 'hidden' : '';
                    
                    // Toggle Icon
                    const isOpen = menu.classList.contains('flex');
                    btn.innerHTML = isOpen 
                        ? '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>'
                        : '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>';
                });
            }

            // Sticky Nav Background on Scroll
            window.addEventListener('scroll', () => {
                if (window.scrollY > 20) {
                    nav.classList.add('bg-[#0A0A0A]/90', 'backdrop-blur-md', 'shadow-lg');
                } else {
                    nav.classList.remove('bg-[#0A0A0A]/90', 'backdrop-blur-md', 'shadow-lg');
                }
            });
        </script>
    </nav>
