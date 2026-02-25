<x-public-layout>
    <section class="relative overflow-hidden bg-brand-dark py-16">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1600&q=80" alt="" class="h-full w-full object-cover opacity-30">
        </div>
        <div class="absolute inset-0 bg-[radial-gradient(60%_50%_at_20%_10%,rgba(34,211,238,0.25),transparent_60%),radial-gradient(50%_40%_at_80%_0%,rgba(59,130,246,0.35),transparent_55%)]"></div>
        <div class="max-w-7xl mx-auto px-4 relative">
            <h1 class="text-4xl md:text-5xl font-bold text-white">About Us</h1>
            <p class="text-slate-300 mt-3 max-w-2xl">Learn more about Innotech-Systems Ltd and our mission.</p>
        </div>
    </section>

    <section class="pt-16 pb-20 bg-gradient-to-b from-slate-50 to-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <div class="lg:col-span-7 rounded-2xl border border-slate-200 bg-white p-8 shadow-[0_32px_70px_-40px_rgba(15,23,42,0.75)]">
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-brand-primary mb-3">Who We Are</p>
                    <h2 class="text-3xl md:text-4xl font-bold text-brand-dark mb-4">A trusted digital partner for modern organizations</h2>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        INNOTECH-SYSTEMS LTD is a Malawian-registered IT company focused on delivering reliable, secure, and scalable technology solutions. We help organizations improve efficiency, strengthen their digital presence, and adapt confidently to an evolving technology landscape.
                    </p>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                        <div class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-center text-sm font-semibold text-brand-dark">Innovation</div>
                        <div class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-center text-sm font-semibold text-brand-dark">Integrity</div>
                        <div class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-center text-sm font-semibold text-brand-dark">Reliability</div>
                        <div class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-center text-sm font-semibold text-brand-dark">Client Focus</div>
                    </div>
                </div>

                <div class="lg:col-span-5 space-y-4">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-[0_24px_45px_-35px_rgba(15,23,42,0.8)]">
                        <h3 class="text-xl font-bold text-brand-dark mb-2">Our Mission</h3>
                        <p class="text-gray-600 text-sm">Provide reliable, innovative, and intelligent IT solutions that empower organizations through technology.</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-[0_24px_45px_-35px_rgba(15,23,42,0.8)]">
                        <h3 class="text-xl font-bold text-brand-dark mb-2">Our Vision</h3>
                        <p class="text-gray-600 text-sm">Become a trusted IT solutions provider delivering high-quality digital systems locally and internationally.</p>
                    </div>
                    <div class="rounded-2xl border border-brand-cyan/30 bg-brand-cyan/5 p-6">
                        <h3 class="text-xl font-bold text-brand-dark mb-2">Work With Us</h3>
                        <p class="text-sm text-gray-700 mb-4">Let's plan and build technology solutions that move your organization forward.</p>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-lg border border-brand-cyan/50 px-4 py-2 text-xs font-bold uppercase tracking-wide text-brand-primary transition hover:bg-brand-cyan hover:text-brand-dark">
                            Start a Project
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-public-layout>
