<x-public-layout>
    <section id="contact" class="scroll-mt-32 relative overflow-hidden bg-brand-dark py-16">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1600&q=80" alt="" class="h-full w-full object-cover opacity-30">
        </div>
        <div class="absolute inset-0 bg-[radial-gradient(60%_50%_at_20%_10%,rgba(34,211,238,0.25),transparent_60%),radial-gradient(50%_40%_at_80%_0%,rgba(59,130,246,0.35),transparent_55%)]"></div>
        <div class="max-w-7xl mx-auto px-4 relative">
            <h1 class="text-4xl md:text-5xl font-bold text-white">Contact Us</h1>
            <p class="text-slate-300 mt-3 max-w-2xl">Tell us about your project and we will get back to you.</p>
        </div>
    </section>

    <section class="pt-16 pb-20 bg-gradient-to-b from-slate-50 to-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-8 shadow-[0_20px_40px_-30px_rgba(15,23,42,0.45)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_34px_70px_-40px_rgba(15,23,42,0.75)] hover:border-brand-cyan/40">
                    <div class="pointer-events-none absolute -right-20 -top-20 h-52 w-52 rounded-full bg-brand-cyan/15 blur-3xl"></div>
                    <div class="pointer-events-none absolute -left-24 -bottom-24 h-60 w-60 rounded-full bg-brand-primary/10 blur-3xl"></div>
                    <div class="relative mb-6">
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-brand-primary">Send Inquiry</p>
                        <h2 class="mt-2 text-2xl font-bold text-brand-dark">Let's discuss your project</h2>
                        <p class="mt-2 text-sm text-slate-500">Share your requirements and our team will respond with a tailored solution.</p>
                    </div>
                    @if (session('status'))
                        <div class="mb-6 rounded-xl border border-green-200 bg-green-50 text-green-700 px-4 py-3">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.submit') }}" class="relative space-y-5">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-brand-dark mb-2" for="name">Full Name</label>
                                <input id="name" name="name" type="text" required class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3.5 transition focus:outline-none focus:ring-2 focus:ring-brand-cyan/40 focus:border-brand-cyan/50" placeholder="Your name">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-brand-dark mb-2" for="email">Email</label>
                                <input id="email" name="email" type="email" required class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3.5 transition focus:outline-none focus:ring-2 focus:ring-brand-cyan/40 focus:border-brand-cyan/50" placeholder="you@example.com">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-brand-dark mb-2" for="phone">Phone</label>
                                <input id="phone" name="phone" type="tel" class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3.5 transition focus:outline-none focus:ring-2 focus:ring-brand-cyan/40 focus:border-brand-cyan/50" placeholder="+265 ...">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-brand-dark mb-2" for="service">Service</label>
                                <select id="service" name="service" class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3.5 transition focus:outline-none focus:ring-2 focus:ring-brand-cyan/40 focus:border-brand-cyan/50">
                                    <option>Web Development</option>
                                    <option>Mobile Apps</option>
                                    <option>Desktop Apps</option>
                                    <option>Graphic & UI/UX</option>
                                    <option>AI & Data Analytics</option>
                                    <option>API Integration</option>
                                    <option>IT Training</option>
                                    <option>ICT Supply</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-brand-dark mb-2" for="message">Project Details</label>
                            <textarea id="message" name="message" rows="5" required class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3.5 transition focus:outline-none focus:ring-2 focus:ring-brand-cyan/40 focus:border-brand-cyan/50" placeholder="Tell us about your needs..."></textarea>
                        </div>
                        <div class="flex flex-wrap items-center justify-between gap-4 rounded-xl border border-slate-200/90 bg-slate-50/70 px-4 py-3">
                            <p class="text-xs font-medium text-slate-600">Response time: within 24 hours.</p>
                            <button type="submit" class="inline-flex items-center justify-center rounded-lg bg-brand-cyan px-6 py-3 font-bold text-brand-dark transition hover:bg-brand-primary hover:text-white shadow-[0_20px_35px_-20px_rgba(34,211,238,0.7)]">
                                Submit Request
                            </button>
                        </div>
                    </form>
                </div>

                <div class="rounded-2xl border border-slate-200/90 bg-white p-8 shadow-[0_32px_70px_-40px_rgba(15,23,42,0.75)]">
                    <h2 class="text-2xl font-bold text-brand-dark mb-2">Contact Details</h2>
                    <p class="text-slate-500 mb-6">Prefer direct contact? Choose the channel that works best for you.</p>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="rounded-xl border border-slate-200 bg-slate-50/70 p-4 transition duration-300 hover:-translate-y-0.5 hover:shadow-[0_20px_35px_-30px_rgba(15,23,42,0.6)] hover:border-brand-cyan/40 hover:bg-white">
                            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-brand-primary">Email</p>
                            <a href="mailto:info@innotech-systems.mw" class="mt-2 block text-sm font-semibold text-brand-dark hover:text-brand-primary transition">info@innotech-systems.mw</a>
                        </div>
                        <div class="rounded-xl border border-slate-200 bg-slate-50/70 p-4 transition duration-300 hover:-translate-y-0.5 hover:shadow-[0_20px_35px_-30px_rgba(15,23,42,0.6)] hover:border-brand-cyan/40 hover:bg-white">
                            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-brand-primary">Phone</p>
                            <a href="tel:+265884629056" class="mt-2 block text-sm font-semibold text-brand-dark hover:text-brand-primary transition">+265 884629056</a>
                        </div>
                        <div class="rounded-xl border border-slate-200 bg-slate-50/70 p-4 transition duration-300 hover:-translate-y-0.5 hover:shadow-[0_20px_35px_-30px_rgba(15,23,42,0.6)] hover:border-brand-cyan/40 hover:bg-white">
                            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-brand-primary">Location</p>
                            <p class="mt-2 text-sm font-semibold text-brand-dark">Malawi</p>
                        </div>
                        <div class="rounded-xl border border-brand-cyan/30 bg-brand-cyan/5 p-4">
                            <p class="text-sm text-slate-600">Need enterprise support or a proposal?</p>
                            <a href="mailto:info@innotech-systems.mw?subject=Enterprise%20IT%20Solution%20Request" class="mt-2 inline-flex items-center text-sm font-bold text-brand-primary hover:text-brand-dark transition">Request a custom proposal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-public-layout>
