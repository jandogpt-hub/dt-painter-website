<?php
include_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : (defined('SITE_NAME') ? SITE_NAME : '[SITE_NAME]'); ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : (defined('SITE_TAGLINE') ? SITE_TAGLINE : '[SITE_TAGLINE]'); ?>">
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
                            // Legacy properties for backward compatibility
                            red: '#FF1E1E',
                            navy: '#1A2A44',
                            dark: '#0A0A0A',
                            gray: '#1F1F1F',

                            // Precision design tokens — update these in CLIENT_PROFILE.md then propagate here
                            cobalt: '#1A56DB',
                            'cobalt-dark': '#1E429F',
                            gold: '#F59E0B',
                            'gold-dark': '#D97706',
                            alabaster: '#F9FAFB',
                            charcoal: '#1F2937',
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
    </style>

    <!-- Legacy CSS (Optional, keep for specific component compat if needed) -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <?php if (isset($extra_css)) echo $extra_css; ?>
</head>
<body class="bg-brand-alabaster text-brand-charcoal font-sans selection:bg-brand-cobalt selection:text-white">

    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-white/95 backdrop-blur-md shadow-sm border-b border-gray-200/80 py-3 lg:py-4 transition-all duration-300" id="main-nav">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 flex justify-between items-center h-16">

            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center gap-3 relative z-50">
                <a href="/" class="flex items-center gap-2">
                    <img src="/assets/images/logo.jpg" alt="<?php echo defined('SITE_NAME') ? SITE_NAME . ' Logo' : '[SITE_NAME] Logo'; ?>" class="h-10 w-auto border border-gray-200 rounded-sm">
                    <span class="sr-only"><?php echo defined('SITE_NAME') ? SITE_NAME : '[SITE_NAME]'; ?></span>
                </a>
            </div>

            <!-- Mobile: Center Call Button -->
            <div class="lg:hidden flex-1 flex justify-center">
                 <a href="tel:<?php echo defined('SITE_PHONE') ? preg_replace('/[^0-9]/', '', SITE_PHONE) : '5551234567'; ?>" class="flex items-center gap-3 bg-brand-cobalt px-8 py-3 rounded-full shadow-lg hover:bg-brand-cobalt-dark transition-colors">
                    <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span class="text-sm font-bold text-white tracking-widest uppercase">Call Us</span>
                 </a>
            </div>

            <!-- Desktop Menu — update service and area links to match CLIENT_PROFILE.md → Pages & Structure -->
            <div class="hidden lg:flex gap-8 text-sm font-medium tracking-widest uppercase text-brand-charcoal items-center">
                <a class="hover:text-brand-cobalt transition-colors" href="/">Home</a>

                <!-- Services Dropdown — replace placeholder links with client service pages -->
                <div class="relative group">
                    <button class="flex items-center gap-1 hover:text-brand-cobalt transition-colors focus:outline-none py-4">
                        Services
                        <svg class="w-4 h-4 text-gray-400 group-hover:text-brand-cobalt transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute top-full left-0 mt-0 w-64 bg-white border border-gray-200 rounded-sm shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform origin-top-left z-50">
                        <div class="py-2 flex flex-col">
                            <!-- [TODO: Add client service pages from CLIENT_PROFILE.md → Service Pages] -->
                            <a href="/services/[service-1].php" class="px-5 py-3 hover:bg-brand-alabaster hover:text-brand-cobalt transition-colors border-b border-gray-100 flex items-center justify-between group/item">
                                [Service 1]
                                <span class="text-brand-cobalt opacity-0 group-hover/item:opacity-100 transition-opacity">→</span>
                            </a>
                            <a href="/services/[service-2].php" class="px-5 py-3 hover:bg-brand-alabaster hover:text-brand-cobalt transition-colors flex items-center justify-between group/item">
                                [Service 2]
                                <span class="text-brand-cobalt opacity-0 group-hover/item:opacity-100 transition-opacity">→</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Areas Served Dropdown — remove if client doesn't need geo pages -->
                <div class="relative group">
                    <button class="flex items-center gap-1 hover:text-brand-cobalt transition-colors focus:outline-none py-4">
                        Areas Served
                        <svg class="w-4 h-4 text-gray-400 group-hover:text-brand-cobalt transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute top-full left-0 mt-0 w-56 bg-white border border-gray-200 rounded-sm shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform origin-top-left z-50">
                        <div class="py-2 flex flex-col">
                            <!-- [TODO: Add client geo pages from CLIENT_PROFILE.md → Geo Pages Needed] -->
                            <a href="/area-served/[city-1].php" class="px-5 py-3 hover:bg-brand-alabaster hover:text-brand-cobalt transition-colors border-b border-gray-100 flex items-center justify-between group/item">
                                [City 1]
                                <span class="text-brand-cobalt opacity-0 group-hover/item:opacity-100 transition-opacity">→</span>
                            </a>
                            <a href="/area-served/[city-2].php" class="px-5 py-3 hover:bg-brand-alabaster hover:text-brand-cobalt transition-colors flex items-center justify-between group/item">
                                [City 2]
                                <span class="text-brand-cobalt opacity-0 group-hover/item:opacity-100 transition-opacity">→</span>
                            </a>
                        </div>
                    </div>
                </div>

                <a class="hover:text-brand-cobalt transition-colors" href="/gallery/">Gallery</a>
                <a class="hover:text-brand-cobalt transition-colors" href="/about.php">About</a>
                <a class="hover:text-brand-cobalt transition-colors" href="/contact.php">Contact</a>
            </div>

            <!-- CTAs (Desktop) -->
            <div class="hidden lg:flex gap-4 items-center">
                 <a href="tel:<?php echo defined('SITE_PHONE') ? preg_replace('/[^0-9]/', '', SITE_PHONE) : '5551234567'; ?>" class="text-brand-cobalt font-bold tracking-widest hover:text-brand-cobalt-dark transition-colors">
                    <?php echo defined('SITE_PHONE') ? SITE_PHONE : '(555) 123-4567'; ?>
                 </a>
                <a href="/contact.php" class="px-6 py-2 bg-brand-cobalt hover:bg-brand-cobalt-dark transition-all text-sm font-semibold tracking-tighter text-white rounded-md">GET QUOTE</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden flex items-center z-[70]">
                 <button id="mobile-menu-btn" class="text-brand-charcoal p-2 focus:outline-none relative">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                 </button>
            </div>
        </div>

        <!-- Mobile Menu Overlay -->
        <div id="mobile-menu" class="fixed top-0 left-0 w-full h-screen bg-white/98 backdrop-blur-xl z-[60] hidden flex-col pt-24 px-6 gap-6 overflow-y-auto transition-opacity duration-300 text-brand-charcoal">
             <a href="/" class="text-2xl font-bold border-b border-gray-100 pb-4">Home</a>
             <div class="flex flex-col gap-4">
                <span class="text-xs font-bold text-brand-cobalt uppercase tracking-widest">Services</span>
                <!-- [TODO: Add client service pages from CLIENT_PROFILE.md → Service Pages] -->
                <a href="/services/[service-1].php" class="text-lg text-gray-600 pl-4 border-l border-gray-200 hover:border-brand-cobalt hover:text-brand-cobalt transition-all">[Service 1]</a>
                <a href="/services/[service-2].php" class="text-lg text-gray-600 pl-4 border-l border-gray-200 hover:border-brand-cobalt hover:text-brand-cobalt transition-all">[Service 2]</a>
             </div>
             <a href="/gallery/" class="text-2xl font-bold border-b border-gray-100 pb-4 mt-2">Gallery</a>
             <div class="flex flex-col gap-4 border-b border-gray-100 pb-4">
                <span class="text-xs font-bold text-brand-cobalt uppercase tracking-widest mt-2">Areas Served</span>
                <!-- [TODO: Add client geo pages from CLIENT_PROFILE.md → Geo Pages Needed] -->
                <a href="/area-served/[city-1].php" class="text-lg text-gray-600 pl-4 border-l border-gray-200 hover:border-brand-cobalt hover:text-brand-cobalt transition-all">[City 1]</a>
                <a href="/area-served/[city-2].php" class="text-lg text-gray-600 pl-4 border-l border-gray-200 hover:border-brand-cobalt hover:text-brand-cobalt transition-all">[City 2]</a>
             </div>
             <a href="/about.php" class="text-2xl font-bold border-b border-gray-100 pb-4">About</a>
             <a href="/contact.php" class="text-2xl font-bold border-b border-gray-100 pb-4">Contact</a>
             <div class="mt-8 space-y-4 pb-12">
                  <a href="tel:<?php echo defined('SITE_PHONE') ? preg_replace('/[^0-9]/', '', SITE_PHONE) : '5551234567'; ?>" class="flex items-center justify-center gap-2 w-full py-4 bg-brand-cobalt rounded-md text-white font-bold shadow-lg hover:bg-brand-cobalt-dark transition-colors">
                     <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                     Call <?php echo defined('SITE_PHONE') ? SITE_PHONE : '(555) 123-4567'; ?>
                  </a>
                  <a href="/contact.php" class="block w-full text-center py-4 border border-gray-200 hover:bg-brand-alabaster rounded-md font-bold uppercase tracking-widest">[TODO: CTA label from PRODUCT.md]</a>
             </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const btn = document.getElementById('mobile-menu-btn');
                const menu = document.getElementById('mobile-menu');
                const nav = document.getElementById('main-nav');

                if(btn && menu) {
                    btn.addEventListener('click', () => {
                        menu.classList.toggle('hidden');
                        menu.classList.toggle('flex');

                        document.body.style.overflow = menu.classList.contains('flex') ? 'hidden' : '';

                        const isOpen = menu.classList.contains('flex');
                        btn.innerHTML = isOpen
                            ? '<svg class="w-8 h-8 text-brand-charcoal" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>'
                            : '<svg class="w-8 h-8 text-brand-charcoal" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>';
                    });
                }

                window.addEventListener('scroll', () => {
                    if (window.scrollY > 20) {
                        nav.classList.add('bg-white/98', 'shadow-md');
                    } else {
                        nav.classList.remove('bg-white/98', 'shadow-md');
                    }
                });
            });
        </script>
    </nav>
