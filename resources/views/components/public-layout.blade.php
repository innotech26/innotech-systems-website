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
<body class="font-sans antialiased text-gray-800 bg-gray-50">
    
    <!-- Navbar -->
    <nav x-data="{ open: false }" class="bg-brand-dark fixed w-full z-50 shadow-lg border-b border-brand-primary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('home') }}" class="flex items-center">
                            <img src="{{ asset('images/logo.png') }}" alt="Innotech Systems Logo" class="h-10 w-10 rounded-full bg-white p-1 shadow-sm">
                        </a>
                    </div>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden sm:flex sm:items-center sm:ms-6 space-x-8">
                    <a href="{{ route('home') }}" class="text-white hover:text-brand-cyan transition font-medium">Home</a>
                    <a href="{{ route('about') }}" class="text-white hover:text-brand-cyan transition font-medium">About Us</a>
                    <a href="{{ route('services') }}" class="text-white hover:text-brand-cyan transition font-medium">Services</a>
                    <a href="{{ route('projects') }}" class="text-white hover:text-brand-cyan transition font-medium">Projects</a>
                    <a href="{{ route('contact') }}" class="px-5 py-2 bg-brand-cyan text-brand-dark font-bold rounded-full hover:bg-brand-primary hover:text-white transition">Contact Us</a>
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
        <!-- Mobile Menu -->
        <div x-show="open" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" class="sm:hidden border-t border-brand-primary/40 bg-brand-dark/95 backdrop-blur">
            <div class="px-4 py-4 space-y-3">
                <a href="{{ route('home') }}" class="block text-white/90 hover:text-brand-cyan transition font-medium">Home</a>
                <a href="{{ route('about') }}" class="block text-white/90 hover:text-brand-cyan transition font-medium">About Us</a>
                <a href="{{ route('services') }}" class="block text-white/90 hover:text-brand-cyan transition font-medium">Services</a>
                <a href="{{ route('projects') }}" class="block text-white/90 hover:text-brand-cyan transition font-medium">Projects</a>
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-5 py-2 bg-brand-cyan text-brand-dark font-bold rounded-full hover:bg-brand-primary hover:text-white transition w-full">Contact Us</a>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="pt-20">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-brand-dark text-white pt-20 pb-10 border-t border-brand-primary/30">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-10 mb-10">
            <div>
                <h3 class="text-xl font-bold mb-4 text-brand-cyan">INNOTECH-SYSTEMS LTD</h3>
                <p class="text-gray-300 text-sm leading-relaxed">Providing reliable, innovative, and intelligent IT solutions that empower organizations through technology in Malawi and beyond.</p>
                <div class="mt-6 flex items-center gap-3">
                    <a href="mailto:info@innotech-systems.mw" class="text-sm text-white/80 hover:text-brand-cyan transition">info@innotech-systems.mw</a>
                    <span class="text-white/30">•</span>
                    <a href="tel:+265884629056" class="text-sm text-white/80 hover:text-brand-cyan transition">+265 884629056</a>
                </div>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4 text-brand-cyan">Core Values</h3>
                <ul class="text-gray-300 text-sm space-y-2">
                    <li>Innovation</li>
                    <li>Quality & Integrity</li>
                    <li>Reliability</li>
                    <li>Client-focused solutions</li>
                </ul>
            </div>
            <div id="contact">
                <h3 class="text-xl font-bold mb-4 text-brand-cyan">Contact</h3>
                <p class="text-gray-300 text-sm">Malawi</p>
                <p class="text-gray-300 text-sm mt-2">Email: info@innotech-systems.mw</p>
                <p class="text-gray-300 text-sm">Phone: +265 884629056</p>
                <div class="mt-4 inline-flex items-center gap-2 rounded-full border border-brand-cyan/40 px-4 py-2 text-xs uppercase tracking-[0.25em] text-brand-cyan/90">
                    Let’s Build
                </div>
            </div>
        </div>
        <div class="text-center border-t border-white/10 pt-8 text-sm text-gray-500">
            &copy; {{ date('Y') }} Innotech-Systems Ltd. All rights reserved.
        </div>
    </footer>
</body>
</html>
