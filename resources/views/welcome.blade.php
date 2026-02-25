<x-public-layout>
    <!-- Hero Section -->
    <section class="relative bg-brand-dark overflow-hidden min-h-[85vh] flex items-center justify-center">
        <!-- Video Background -->
        <div class="absolute inset-0">
            <video class="w-full h-full object-cover" autoplay muted loop playsinline poster="https://images.unsplash.com/photo-1487058792275-0ad4aaf24ca7?auto=format&fit=crop&w=1600&q=80">
                <!-- Replace the source below with your video -->
                <source src="/videos/hero.mp4" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-gradient-to-b from-brand-dark/80 via-brand-dark/60 to-brand-dark/80"></div>
            <div class="absolute inset-0 bg-[radial-gradient(60%_50%_at_20%_10%,rgba(34,211,238,0.25),transparent_60%),radial-gradient(50%_40%_at_80%_0%,rgba(59,130,246,0.35),transparent_55%)]"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 text-center z-10">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 text-white/80 text-sm uppercase tracking-[0.2em] border border-white/10 mb-6">
                Digital Systems • Malawi
            </div>
            <h1 class="hero-text text-5xl md:text-7xl font-bold text-white mb-6">
                Innovative <span class="text-brand-cyan">Digital Solutions</span>
            </h1>
            <p class="hero-text text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
                Malawi's premier IT company specializing in secure, scalable software and modern technology systems.
            </p>
            <div class="hero-text flex flex-col sm:flex-row justify-center gap-4">
                <a href="#services" class="px-8 py-3 bg-brand-cyan text-brand-dark font-bold rounded-full hover:bg-white hover:text-brand-dark transition duration-300 shadow-[0_20px_35px_-20px_rgba(34,211,238,0.8)]">
                    Our Services
                </a>
                <a href="#about" class="px-8 py-3 border border-brand-cyan text-brand-cyan font-bold rounded-full hover:bg-brand-cyan hover:text-brand-dark transition duration-300">
                    Learn More
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-5 gap-8 items-start">
            <div class="lg:col-span-3 service-card rounded-2xl bg-white border border-slate-100 p-8 shadow-[0_30px_60px_-35px_rgba(15,23,42,0.7)]">
                <h2 class="text-brand-primary font-bold uppercase tracking-wide mb-2">About Us</h2>
                <h3 class="text-3xl md:text-4xl font-bold text-brand-dark mb-4">Building Modern, Secure, and Scalable Systems</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    INNOTECH-SYSTEMS LTD is a Malawian-registered IT company providing innovative digital solutions. We specialize in building modern technology systems that help clients improve efficiency, strengthen their digital presence, and adapt to a rapidly evolving digital environment.
                </p>
                <div class="flex flex-wrap gap-3">
                    <span class="inline-flex items-center px-4 py-2 rounded-full bg-brand-cyan/10 text-brand-dark text-sm font-semibold">Performance</span>
                    <span class="inline-flex items-center px-4 py-2 rounded-full bg-brand-primary/10 text-brand-dark text-sm font-semibold">Security</span>
                    <span class="inline-flex items-center px-4 py-2 rounded-full bg-brand-cyan/10 text-brand-dark text-sm font-semibold">Scalability</span>
                    <span class="inline-flex items-center px-4 py-2 rounded-full bg-brand-primary/10 text-brand-dark text-sm font-semibold">UI/UX</span>
                </div>
            </div>
            <div class="lg:col-span-2 grid gap-4">
                <div class="service-card rounded-2xl bg-white border border-slate-100 p-6 transition duration-300 hover:-translate-y-1 hover:shadow-[0_25px_50px_-35px_rgba(15,23,42,0.7)]">
                    <h4 class="text-lg font-bold text-brand-dark mb-2">Mission</h4>
                    <p class="text-sm text-gray-600">Reliable, innovative, and intelligent IT solutions that empower organizations.</p>
                </div>
                <div class="service-card rounded-2xl bg-white border border-slate-100 p-6 transition duration-300 hover:-translate-y-1 hover:shadow-[0_25px_50px_-35px_rgba(15,23,42,0.7)]">
                    <h4 class="text-lg font-bold text-brand-dark mb-2">Vision</h4>
                    <p class="text-sm text-gray-600">A trusted IT partner delivering high-quality systems locally and globally.</p>
                </div>
                <div class="service-card rounded-2xl bg-white border border-slate-100 p-6 transition duration-300 hover:-translate-y-1 hover:shadow-[0_25px_50px_-35px_rgba(15,23,42,0.7)]">
                    <h4 class="text-lg font-bold text-brand-dark mb-2">Approach</h4>
                    <p class="text-sm text-gray-600">Strategy-first delivery with measurable impact and long-term support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section id="why-us" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12 max-w-3xl mx-auto service-card">
                <h2 class="text-brand-primary font-bold uppercase tracking-wide mb-2">Why Choose Us</h2>
                <h3 class="text-4xl font-bold text-brand-dark">Built For Reliability And Impact</h3>
                <p class="text-gray-600 mt-4">We blend strategy, engineering, and support to deliver systems that scale with your organization.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="service-card group relative p-6 rounded-2xl bg-white border border-slate-100 transition duration-300 hover:-translate-y-1 hover:shadow-[0_30px_60px_-35px_rgba(15,23,42,0.7)] hover:border-brand-cyan/40">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-brand-cyan/10 via-transparent to-brand-primary/10 opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative">
                        <div class="w-12 h-12 bg-brand-dark rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-cyan transition duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-brand-dark mb-2">Trusted Delivery</h4>
                        <p class="text-sm text-gray-600">On-time execution with clear milestones and measurable outcomes.</p>
                    </div>
                </div>
                <div class="service-card group relative p-6 rounded-2xl bg-white border border-slate-100 transition duration-300 hover:-translate-y-1 hover:shadow-[0_30px_60px_-35px_rgba(15,23,42,0.7)] hover:border-brand-cyan/40">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-brand-cyan/10 via-transparent to-brand-primary/10 opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative">
                        <div class="w-12 h-12 bg-brand-dark rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-cyan transition duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-brand-dark mb-2">Full-Stack Expertise</h4>
                        <p class="text-sm text-gray-600">From UX to infrastructure, we manage the entire technology lifecycle.</p>
                    </div>
                </div>
                <div class="service-card group relative p-6 rounded-2xl bg-white border border-slate-100 transition duration-300 hover:-translate-y-1 hover:shadow-[0_30px_60px_-35px_rgba(15,23,42,0.7)] hover:border-brand-cyan/40">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-brand-cyan/10 via-transparent to-brand-primary/10 opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative">
                        <div class="w-12 h-12 bg-brand-dark rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-cyan transition duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-brand-dark mb-2">Rapid Turnaround</h4>
                        <p class="text-sm text-gray-600">Agile delivery that gets you to market faster without quality loss.</p>
                    </div>
                </div>
                <div class="service-card group relative p-6 rounded-2xl bg-white border border-slate-100 transition duration-300 hover:-translate-y-1 hover:shadow-[0_30px_60px_-35px_rgba(15,23,42,0.7)] hover:border-brand-cyan/40">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-brand-cyan/10 via-transparent to-brand-primary/10 opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative">
                        <div class="w-12 h-12 bg-brand-dark rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-cyan transition duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-brand-dark mb-2">Local Support</h4>
                        <p class="text-sm text-gray-600">Hands-on support in Malawi with long-term partnership focus.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12 max-w-3xl mx-auto service-card">
                <h2 class="text-brand-primary font-bold uppercase tracking-wide mb-2">What We Do</h2>
                <h3 class="text-4xl font-bold text-brand-dark">Comprehensive IT Services</h3>
                <p class="text-gray-600 mt-4">From web development to AI integration, we offer end-to-end digital solutions.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="service-card group relative p-6 rounded-2xl bg-white border border-slate-100 transition duration-300 hover:-translate-y-1 hover:shadow-[0_30px_60px_-35px_rgba(15,23,42,0.7)] hover:border-brand-cyan/40">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-brand-cyan/10 via-transparent to-brand-primary/10 opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative">
                        <div class="mb-4 h-28 rounded-xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1487014679447-9f8336841d58?auto=format&fit=crop&w=800&q=80" alt="Web development" class="h-full w-full object-cover">
                        </div>
                        <div class="w-12 h-12 bg-brand-dark rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-cyan transition duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-brand-dark mb-2">Web Development</h4>
                        <p class="text-sm text-gray-600">Responsive, high-performance websites using Laravel, Node.js, and React.</p>
                    </div>
                </div>

                <div class="service-card group relative p-6 rounded-2xl bg-white border border-slate-100 transition duration-300 hover:-translate-y-1 hover:shadow-[0_30px_60px_-35px_rgba(15,23,42,0.7)] hover:border-brand-cyan/40">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-brand-cyan/10 via-transparent to-brand-primary/10 opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative">
                        <div class="mb-4 h-28 rounded-xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit=crop&w=800&q=80" alt="Mobile apps" class="h-full w-full object-cover">
                        </div>
                        <div class="w-12 h-12 bg-brand-dark rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-cyan transition duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-brand-dark mb-2">Mobile Apps</h4>
                        <p class="text-sm text-gray-600">Cross-platform (Android & iOS) applications developed using Flutter.</p>
                    </div>
                </div>

                <div class="service-card group relative p-6 rounded-2xl bg-white border border-slate-100 transition duration-300 hover:-translate-y-1 hover:shadow-[0_30px_60px_-35px_rgba(15,23,42,0.7)] hover:border-brand-cyan/40">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-brand-cyan/10 via-transparent to-brand-primary/10 opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative">
                        <div class="mb-4 h-28 rounded-xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80" alt="Desktop software" class="h-full w-full object-cover">
                        </div>
                        <div class="w-12 h-12 bg-brand-dark rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-cyan transition duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-brand-dark mb-2">Desktop Apps</h4>
                        <p class="text-sm text-gray-600">Custom desktop solutions tailored to organizational workflows.</p>
                    </div>
                </div>

                <div class="service-card group relative p-6 rounded-2xl bg-white border border-slate-100 transition duration-300 hover:-translate-y-1 hover:shadow-[0_30px_60px_-35px_rgba(15,23,42,0.7)] hover:border-brand-cyan/40">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-brand-cyan/10 via-transparent to-brand-primary/10 opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative">
                        <div class="mb-4 h-28 rounded-xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1526498460520-4c246339dccb?auto=format&fit=crop&w=800&q=80" alt="UI UX design" class="h-full w-full object-cover">
                        </div>
                        <div class="w-12 h-12 bg-brand-dark rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-cyan transition duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-brand-dark mb-2">Graphic & UI/UX</h4>
                        <p class="text-sm text-gray-600">Digital branding, user interface design, and promotional creatives.</p>
                    </div>
                </div>
            </div>
            <div class="mt-8 text-center">
                <a href="{{ route('services') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-full border border-brand-cyan/60 text-brand-cyan font-semibold hover:bg-brand-cyan hover:text-brand-dark transition">
                    View All Services
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Projects -->
    <section id="projects" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12 max-w-3xl mx-auto service-card">
                <h2 class="text-brand-primary font-bold uppercase tracking-wide mb-2">Featured Projects</h2>
                <h3 class="text-4xl font-bold text-brand-dark">Selected Work And Case Studies</h3>
                <p class="text-gray-600 mt-4">A snapshot of platforms and systems we have delivered for clients.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($projects as $project)
                    <div class="service-card group relative overflow-hidden rounded-2xl bg-white border border-slate-100 transition duration-300 hover:-translate-y-1 hover:shadow-[0_30px_60px_-35px_rgba(15,23,42,0.7)]">
                        <div class="h-40">
                            @if ($project->image_url)
                                <img src="{{ $project->image_url }}" alt="{{ $project->title }}" class="h-full w-full object-cover">
                            @else
                                <div class="h-full w-full bg-[linear-gradient(120deg,rgba(34,211,238,0.2),rgba(59,130,246,0.25))]"></div>
                            @endif
                        </div>
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-brand-dark mb-2">{{ $project->title }}</h4>
                            <p class="text-sm text-gray-600 mb-4">{{ $project->summary }}</p>
                            @if ($project->category)
                                <span class="text-xs uppercase tracking-widest text-brand-primary">{{ $project->category }}</span>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center text-gray-500">No projects published yet.</div>
                @endforelse
            </div>
            <div class="mt-8 text-center">
                <a href="{{ route('projects') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-full border border-brand-cyan/60 text-brand-cyan font-semibold hover:bg-brand-cyan hover:text-brand-dark transition">
                    View All Projects
                </a>
            </div>
        </div>
    </section>

    <!-- Latest News -->
    <section id="news" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12 max-w-3xl mx-auto service-card">
                <h2 class="text-brand-primary font-bold uppercase tracking-wide mb-2">Latest News</h2>
                <h3 class="text-4xl font-bold text-brand-dark">Updates From Innotech</h3>
                <p class="text-gray-600 mt-4">Announcements, launches, and insights from our team.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($news as $post)
                    <article class="service-card group relative p-6 rounded-2xl bg-white border border-slate-100 transition duration-300 hover:-translate-y-1 hover:shadow-[0_30px_60px_-35px_rgba(15,23,42,0.7)]">
                        <p class="text-xs uppercase tracking-widest text-brand-primary mb-2">Update</p>
                        <h4 class="text-xl font-bold text-brand-dark mb-2">{{ $post->title }}</h4>
                        <p class="text-sm text-gray-600 mb-4">{{ $post->excerpt }}</p>
                        <span class="text-xs text-gray-400">
                            {{ ($post->published_at ?? $post->created_at)->format('F j, Y') }}
                        </span>
                    </article>
                @empty
                    <div class="col-span-full text-center text-gray-500">No updates published yet.</div>
                @endforelse
            </div>
            <div class="mt-8 text-center">
                <a href="{{ route('news') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-full border border-brand-cyan/60 text-brand-cyan font-semibold hover:bg-brand-cyan hover:text-brand-dark transition">
                    View All Updates
                </a>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-brand-dark relative overflow-hidden border-t border-brand-primary/30">
        <div class="absolute -top-20 right-0 w-72 h-72 bg-brand-primary/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-20 left-0 w-72 h-72 bg-brand-cyan/5 rounded-full blur-3xl"></div>
        <div class="max-w-4xl mx-auto px-4 text-center relative">
            <h2 class="text-3xl font-bold text-white mb-6">Ready to Strengthen Your Digital Presence?</h2>
            <p class="text-slate-300 mb-8">Join our client base of satisfied businesses and organizations.</p>
            <a href="{{ route('contact') }}" class="inline-block px-10 py-4 bg-white/10 text-brand-cyan font-bold rounded-full border border-brand-cyan/60 hover:bg-brand-cyan hover:text-brand-dark transition duration-300 transform hover:-translate-y-1">
                Get a Quote
            </a>
        </div>
    </section>
</x-public-layout>
