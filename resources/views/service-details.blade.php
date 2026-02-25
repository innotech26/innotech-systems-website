<x-public-layout>
    <section class="relative overflow-hidden bg-brand-dark py-16">
        <div class="absolute inset-0">
            <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="h-full w-full object-cover opacity-25">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-brand-dark/85 via-brand-dark/70 to-brand-dark/90"></div>
        <div class="absolute inset-0 bg-[radial-gradient(60%_50%_at_20%_10%,rgba(34,211,238,0.25),transparent_60%),radial-gradient(50%_40%_at_80%_0%,rgba(59,130,246,0.35),transparent_55%)]"></div>
        <div class="max-w-5xl mx-auto px-4 relative">
            <a href="{{ route('services') }}" class="inline-flex items-center gap-2 text-sm text-brand-cyan hover:text-white transition">
                <span>&larr;</span>
                Back to Services
            </a>
            <h1 class="text-4xl md:text-5xl font-bold text-white mt-4">{{ $service['title'] }}</h1>
            <p class="text-slate-300 mt-4 max-w-3xl">Detailed information about this service and how it helps your organization.</p>
        </div>
    </section>

    <section class="py-16 bg-gradient-to-b from-slate-50 to-white">
        <div class="max-w-5xl mx-auto px-4">
            <div class="group rounded-2xl border border-slate-200 bg-white p-8 md:p-10 shadow-[0_20px_40px_-30px_rgba(15,23,42,0.45)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_34px_70px_-40px_rgba(15,23,42,0.75)] hover:border-brand-cyan/40">
                <h2 class="text-2xl font-bold text-brand-dark mb-5">Service Overview</h2>
                <div class="prose prose-slate max-w-none text-slate-700 leading-relaxed">
                    {!! nl2br(e($service['description'])) !!}
                </div>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-lg bg-brand-cyan px-6 py-3 font-bold text-brand-dark transition hover:bg-cyan-300">
                        Request This Service
                    </a>
                    <a href="{{ route('services') }}" class="inline-flex items-center justify-center rounded-lg border border-brand-cyan/50 px-6 py-3 text-sm font-bold uppercase tracking-wide text-brand-primary transition hover:bg-brand-cyan hover:text-brand-dark">
                        Explore Other Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    @if (! empty($relatedServices))
        <section class="pb-20 bg-white">
            <div class="max-w-7xl mx-auto px-4">
                <div class="mb-10">
                    <h3 class="text-3xl font-bold text-brand-dark">Related Services</h3>
                    <p class="text-slate-600 mt-2">Explore other solutions offered by Inno-Tech Systems.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach ($relatedServices as $item)
                        <article class="group rounded-2xl border border-slate-200 bg-white overflow-hidden shadow-[0_20px_40px_-30px_rgba(15,23,42,0.45)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_34px_70px_-40px_rgba(15,23,42,0.75)] hover:border-brand-cyan/40">
                            <div class="h-36">
                                <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="h-full w-full object-cover">
                            </div>
                            <div class="p-5">
                                <h4 class="text-lg font-bold text-brand-dark mb-2">{{ $item['title'] }}</h4>
                                <p class="text-sm text-slate-600 mb-4">{{ \Illuminate\Support\Str::limit($item['description'], 100) }}</p>
                                <a href="{{ route('services.show', $item['slug']) }}" class="inline-flex items-center gap-2 rounded-lg border border-brand-cyan/50 px-4 py-2 text-xs font-bold uppercase tracking-wide text-brand-primary transition hover:bg-brand-cyan hover:text-brand-dark">
                                    Learn More
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
</x-public-layout>
