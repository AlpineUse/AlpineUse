@extends('app')

@section('slot')
    <header class="duration-500 border-b bg-light dark:bg-dark border-secondary-light/50 dark:border-secondary-dark/50">
        <div class="flex items-center justify-between h-16 max-w-screen-lg px-4 mx-auto">
            <div class="flex items-center gap-4">
                <a class="inline-flex items-center justify-center gap-x-3" href="{{ route('home.index') }}" wire:navigate>
                    <img class="w-8 dark:hidden" src="{{ asset('assets') }}/images/icons/icon.webp" alt="logo" />
                    <img class="hidden w-8 dark:block" src="{{ asset('assets') }}/images/icons/icon-white.webp"
                        alt="logo" />
                    <span class="text-xl font-bold text-zinc-950 dark:text-zinc-50">AlpineUse</span>
                </a>
            </div>
            <div class="flex items-center gap-4">
                <!-- Navbar -->
                <div class="inline-flex flex-row items-center justify-center gap-x-2">
                    <ul class="flex flex-row items-center justify-center w-full mt-1.5 gap-x-5">
                        <li>
                            <a href="https://github.com/AlpineUse/AlpineUse" target="_blank">
                                <iconify-icon icon="mdi:github" class="text-3xl text-dark dark:text-light"></iconify-icon>
                            </a>
                        </li>
                        @if (Auth::Check())
                            <li>
                                <a href="{{ route('dashboard.index') }}" wire:navigate>
                                    <iconify-icon icon="material-symbols:dashboard"
                                        class="text-3xl text-dark dark:text-light"></iconify-icon>
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('auth.index') }}" wire:navigate>
                                    <iconify-icon icon="material-symbols:login"
                                        class="text-3xl text-dark dark:text-light"></iconify-icon>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <!-- Navbar -->
        </div>
        </div>
    </header>

    <main class="duration-500">
        {{ $slot }}
    </main>

    <footer class="duration-500 border-t bg-light dark:bg-dark border-secondary-light/50 dark:border-secondary-dark/50">
        <div class="flex items-center justify-center h-16 max-w-screen-xl px-4 mx-auto">
            <p class="text-xl font-bold text-center text-zinc-600 dark:text-zinc-300">
                Released under the MIT License.
            </p>
        </div>
    </footer>
@endsection
