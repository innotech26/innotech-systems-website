<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Innotech Systems</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-800">
    <div class="min-h-screen flex">
        <aside class="w-64 bg-brand-dark text-white hidden lg:flex flex-col">
            <div class="px-6 py-5 text-lg font-bold tracking-widest">ADMIN</div>
            <nav class="px-4 space-y-2 text-sm">
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded-lg hover:bg-white/10">Dashboard</a>
                <a href="{{ route('admin.services.index') }}" class="block px-4 py-2 rounded-lg hover:bg-white/10">Services</a>
                <a href="{{ route('admin.projects.index') }}" class="block px-4 py-2 rounded-lg hover:bg-white/10">Projects</a>
                <a href="{{ route('admin.news.index') }}" class="block px-4 py-2 rounded-lg hover:bg-white/10">News</a>
                <a href="{{ route('admin.messages.index') }}" class="block px-4 py-2 rounded-lg hover:bg-white/10">Messages</a>
                <a href="{{ route('home') }}" class="block px-4 py-2 rounded-lg hover:bg-white/10">Back to Site</a>
            </nav>
        </aside>

        <div class="flex-1">
            <header class="bg-white border-b border-slate-200">
                <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
                    <div class="font-semibold">Admin Panel</div>
                    <div class="text-sm text-slate-500">{{ auth()->user()->email ?? '' }}</div>
                </div>
            </header>

            <main class="max-w-6xl mx-auto px-6 py-8">
                @if (session('status'))
                    <div class="mb-6 rounded-xl border border-green-200 bg-green-50 text-green-700 px-4 py-3">
                        {{ session('status') }}
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
