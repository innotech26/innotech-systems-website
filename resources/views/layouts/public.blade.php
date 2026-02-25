<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Innotech-Systems Ltd - Innovative Digital Solutions</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-800 bg-gray-50"
    x-data="{ open: false, showTopBar: true, lastY: 0 }"
    x-init="window.addEventListener('scroll', () => { const y = window.scrollY; showTopBar = y < 20 || y < lastY; lastY = y; })">
    <div class="fixed top-0 inset-x-0 z-50 bg-brand-primary text-slate-100 border-b border-brand-cyan/30 transition-transform duration-300"
        :class="showTopBar ? 'translate-y-0' : '-translate-y-full'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="h-10 flex items-center justify-between text-xs sm:text-sm">
                <div class="flex items-center gap-4 sm:gap-6">
                    <a href="tel:+265884629056" class="inline-flex items-center gap-2 hover:text-brand-cyan transition">
                        <svg class="h-4 w-4 text-brand-cyan" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.12 4.2 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.33 1.78.62 2.62a2 2 0 0 1-.45 2.11L8 9.9a16 16 0 0 0 6.1 6.1l1.45-1.28a2 2 0 0 1 2.11-.45c.84.29 1.72.5 2.62.62A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        <span>+265 884629056</span>
                    </a>
                    <a href="mailto:info@innotech-systems.mw" class="inline-flex items-center gap-2 hover:text-brand-cyan transition">
                        <svg class="h-4 w-4 text-brand-cyan" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="m22 8-10 6L2 8"/>
                        </svg>
                        <span>info@innotech-systems.mw</span>
                    </a>
                </div>
                <a href="#" class="inline-flex items-center gap-2 hover:text-brand-cyan transition">
                    <svg class="h-4 w-4 text-brand-cyan" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M22 12a10 10 0 1 0-11.56 9.87v-6.99H7.9V12h2.54V9.8c0-2.5 1.49-3.9 3.78-3.9 1.09 0 2.23.2 2.23.2v2.46H15.2c-1.24 0-1.63.78-1.63 1.57V12h2.77l-.44 2.88h-2.33v6.99A10 10 0 0 0 22 12z"/>
                    </svg>
                    <span>Facebook</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="bg-brand-dark fixed w-full z-50 shadow-lg border-b border-brand-primary transition-all duration-300"
        :class="showTopBar ? 'top-10' : 'top-0'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('home') }}" class="flex items-center"><x-brand-logo /></a>
                    </div>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden sm:flex sm:items-center sm:ms-6 space-x-8">
                    <a href="{{ route('home') }}" class="relative text-white transition font-medium hover:text-brand-cyan after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-brand-cyan after:transition-all after:duration-300 hover:after:w-full">Home</a>
                    <a href="#about" class="relative text-white transition font-medium hover:text-brand-cyan after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-brand-cyan after:transition-all after:duration-300 hover:after:w-full">About Us</a>
                    <a href="#services" class="relative text-white transition font-medium hover:text-brand-cyan after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-brand-cyan after:transition-all after:duration-300 hover:after:w-full">Services</a>
                    <a href="#contact" class="relative text-white transition font-medium hover:text-brand-cyan after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-brand-cyan after:transition-all after:duration-300 hover:after:w-full">Contact</a>
                </div>

                <!-- Mobile Hamburger -->
                <div class="-me-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="text-white hover:text-brand-cyan transition">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main :class="showTopBar ? 'pt-[7.5rem]' : 'pt-20'">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-brand-dark text-white pt-20 pb-10 border-t border-brand-primary/30">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-10">
            <div class="lg:col-span-2">
                <div class="mb-4">
                    <x-brand-logo class="h-12 w-auto" />
                </div>
                <p class="text-gray-300 text-sm leading-relaxed max-w-xl">Providing reliable, innovative, and intelligent IT solutions that empower organizations through technology in Malawi and beyond.</p>
                <div class="mt-5 flex flex-wrap items-center gap-3">
                    <a href="tel:+265884629056" class="inline-flex items-center gap-2 rounded-lg border border-white/15 px-3 py-2 text-xs text-slate-200 transition hover:border-brand-cyan/60 hover:text-brand-cyan">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.12 4.2 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.33 1.78.62 2.62a2 2 0 0 1-.45 2.11L8 9.9a16 16 0 0 0 6.1 6.1l1.45-1.28a2 2 0 0 1 2.11-.45c.84.29 1.72.5 2.62.62A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        +265 884629056
                    </a>
                    <a href="mailto:info@innotech-systems.mw" class="inline-flex items-center gap-2 rounded-lg border border-white/15 px-3 py-2 text-xs text-slate-200 transition hover:border-brand-cyan/60 hover:text-brand-cyan">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="m22 8-10 6L2 8"/>
                        </svg>
                        info@innotech-systems.mw
                    </a>
                </div>
            </div>
            <div>
                <h3 class="text-lg font-bold mb-4 text-brand-cyan">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('home') }}" class="footer-quick-link"><span>Home</span></a></li>
                    <li><a href="{{ route('about') }}" class="footer-quick-link"><span>About Us</span></a></li>
                    <li><a href="#services" class="footer-quick-link"><span>Services</span></a></li>
                    <li><a href="{{ route('projects') }}" class="footer-quick-link"><span>Projects</span></a></li>
                    <li><a href="#contact" class="footer-quick-link"><span>Contact</span></a></li>
                </ul>
            </div>
            <div id="contact">
                <h3 class="text-lg font-bold mb-4 text-brand-cyan">Company</h3>
                <ul class="text-gray-300 text-sm space-y-2">
                    <li>Innovation</li>
                    <li>Quality & Integrity</li>
                    <li>Reliability</li>
                    <li>Client-focused solutions</li>
                </ul>
                <a href="#" class="mt-4 inline-flex items-center gap-2 rounded-lg border border-brand-cyan/40 px-4 py-2 text-xs font-semibold uppercase tracking-[0.16em] text-brand-cyan/90 transition hover:bg-brand-cyan hover:text-brand-dark">
                    Facebook
                </a>
            </div>
        </div>
        <div class="border-t border-white/10 pt-8 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between text-sm text-gray-400">
            <p>&copy; {{ date('Y') }} Innotech-Systems Ltd. All rights reserved.</p>
            <p>Built for secure and scalable digital transformation.</p>
        </div>
    </footer>
</body>
</html>
