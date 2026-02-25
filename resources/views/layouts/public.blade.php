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
                        <a href="{{ route('home') }}" class="text-2xl font-bold text-white tracking-widest">
                            INNOTECH<span class="text-brand-cyan">-SYSTEMS</span>
                        </a>
                    </div>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden sm:flex sm:items-center sm:ms-6 space-x-8">
                    <a href="{{ route('home') }}" class="text-white hover:text-brand-cyan transition font-medium">Home</a>
                    <a href="#about" class="text-white hover:text-brand-cyan transition font-medium">About Us</a>
                    <a href="#services" class="text-white hover:text-brand-cyan transition font-medium">Services</a>
                    <a href="#contact" class="px-5 py-2 bg-brand-cyan text-brand-dark font-bold rounded-full hover:bg-brand-primary hover:text-white transition">Contact Us</a>
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
    <main class="pt-20">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-brand-dark text-white pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <div>
                <h3 class="text-xl font-bold mb-4 text-brand-cyan">INNOTECH-SYSTEMS LTD</h3>
                <p class="text-gray-300 text-sm">Providing reliable, innovative, and intelligent IT solutions that empower organizations through technology in Malawi and beyond.</p>
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
                <p class="text-gray-300 text-sm">Phone: +265 999 XXX XXX</p>
            </div>
        </div>
        <div class="text-center border-t border-gray-700 pt-8 text-sm text-gray-500">
            &copy; {{ date('Y') }} Innotech-Systems Ltd. All rights reserved.
        </div>
    </footer>
</body>
</html>