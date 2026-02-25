<x-public-layout>
    <section class="relative overflow-hidden bg-brand-dark py-16">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1487058792275-0ad4aaf24ca7?auto=format&fit=crop&w=1600&q=80" alt="" class="h-full w-full object-cover opacity-30">
        </div>
        <div class="absolute inset-0 bg-[radial-gradient(60%_50%_at_20%_10%,rgba(34,211,238,0.25),transparent_60%),radial-gradient(50%_40%_at_80%_0%,rgba(59,130,246,0.35),transparent_55%)]"></div>
        <div class="max-w-7xl mx-auto px-4 relative">
            <h1 class="text-4xl md:text-5xl font-bold text-white">Projects</h1>
            <p class="text-slate-300 mt-3 max-w-2xl">A showcase of selected work and case studies.</p>
        </div>
    </section>

    <section class="pt-16 pb-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($projects as $project)
                    <div class="group rounded-2xl bg-white border border-slate-200 overflow-hidden transition duration-300 hover:-translate-y-1 hover:border-brand-cyan/40 hover:shadow-[0_30px_60px_-35px_rgba(15,23,42,0.7)]">
                        <div class="h-40">
                            @if ($project->image_url)
                                <img src="{{ $project->image_url }}" alt="{{ $project->title }}" class="h-full w-full object-cover">
                            @else
                                <div class="h-full w-full bg-[linear-gradient(120deg,rgba(34,211,238,0.2),rgba(59,130,246,0.25))]"></div>
                            @endif
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-brand-dark mb-2">{{ $project->title }}</h3>
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
        </div>
    </section>
</x-public-layout>
