<x-public-layout>
    <section class="relative overflow-hidden bg-brand-dark py-16">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1600&q=80" alt="" class="h-full w-full object-cover opacity-30">
        </div>
        <div class="absolute inset-0 bg-[radial-gradient(60%_50%_at_20%_10%,rgba(34,211,238,0.25),transparent_60%),radial-gradient(50%_40%_at_80%_0%,rgba(59,130,246,0.35),transparent_55%)]"></div>
        <div class="max-w-7xl mx-auto px-4 relative">
            <h1 class="text-4xl md:text-5xl font-bold text-white">Contact Us</h1>
            <p class="text-slate-300 mt-3 max-w-2xl">Tell us about your project and we will get back to you.</p>
        </div>
    </section>

    <section class="pt-16 pb-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-white border border-slate-100 rounded-2xl p-8 shadow-[0_30px_60px_-35px_rgba(15,23,42,0.7)]">
                    @if (session('status'))
                        <div class="mb-6 rounded-xl border border-green-200 bg-green-50 text-green-700 px-4 py-3">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.submit') }}" class="space-y-5">
                        @csrf
                        <div>
                            <label class="block text-sm font-semibold text-brand-dark mb-2" for="name">Full Name</label>
                            <input id="name" name="name" type="text" required class="w-full rounded-xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-brand-cyan/40" placeholder="Your name">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-brand-dark mb-2" for="email">Email</label>
                            <input id="email" name="email" type="email" required class="w-full rounded-xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-brand-cyan/40" placeholder="you@example.com">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-brand-dark mb-2" for="phone">Phone</label>
                            <input id="phone" name="phone" type="tel" class="w-full rounded-xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-brand-cyan/40" placeholder="+265 ...">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-brand-dark mb-2" for="service">Service</label>
                            <select id="service" name="service" class="w-full rounded-xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-brand-cyan/40">
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
                        <div>
                            <label class="block text-sm font-semibold text-brand-dark mb-2" for="message">Project Details</label>
                            <textarea id="message" name="message" rows="5" required class="w-full rounded-xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-brand-cyan/40" placeholder="Tell us about your needs..."></textarea>
                        </div>
                        <button type="submit" class="inline-flex items-center justify-center px-6 py-3 rounded-full bg-brand-cyan text-brand-dark font-bold hover:bg-white hover:text-brand-dark transition shadow-[0_20px_35px_-20px_rgba(34,211,238,0.7)]">
                            Submit Request
                        </button>
                    </form>
                </div>

                <div class="bg-brand-dark text-white rounded-2xl p-8 shadow-[0_30px_60px_-35px_rgba(15,23,42,0.7)]">
                    <h2 class="text-2xl font-bold mb-4">Contact Details</h2>
                    <p class="text-slate-300 mb-6">Prefer direct contact? Reach out and we will respond quickly.</p>
                    <div class="space-y-4 text-sm text-slate-300">
                        <div>
                            <p class="font-semibold text-white">Email</p>
                            <p>info@innotech-systems.mw</p>
                        </div>
                        <div>
                            <p class="font-semibold text-white">Phone</p>
                            <p>+265 884629056</p>
                        </div>
                        <div>
                            <p class="font-semibold text-white">Location</p>
                            <p>Malawi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-public-layout>
