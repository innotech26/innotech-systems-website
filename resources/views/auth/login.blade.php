<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-brand-dark">
        <div class="absolute inset-0 bg-[radial-gradient(60%_50%_at_20%_10%,rgba(34,211,238,0.25),transparent_60%),radial-gradient(50%_40%_at_80%_0%,rgba(59,130,246,0.35),transparent_55%)]"></div>
        <div class="relative w-full max-w-md mx-auto px-6 py-10">
            <div class="bg-white/95 backdrop-blur rounded-2xl border border-white/40 shadow-[0_30px_60px_-35px_rgba(15,23,42,0.7)] p-8">
                <div class="text-center mb-6">
                    <h1 class="text-2xl font-bold text-brand-dark">Welcome Back</h1>
                    <p class="text-sm text-slate-500 mt-1">Sign in to manage Innotech Systems</p>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full rounded-xl border-slate-200 focus:ring-brand-cyan/40" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full rounded-xl border-slate-200 focus:ring-brand-cyan/40"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-between">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-slate-300 text-brand-cyan shadow-sm focus:ring-brand-cyan/40" name="remember">
                            <span class="ms-2 text-sm text-slate-600">{{ __('Remember me') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="text-sm text-brand-primary hover:text-brand-cyan transition" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>

                    <x-primary-button class="w-full justify-center bg-brand-cyan text-brand-dark hover:bg-brand-primary">
                        {{ __('Log in') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
