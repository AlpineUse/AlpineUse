@extends('app')

@section('slot')
<header class="duration-500 border-b bg-light dark:bg-dark border-secondary-light/50 dark:border-secondary-dark/50">
    <div class="flex items-center justify-between h-16 max-w-screen-lg px-4 mx-auto">
        <div class="flex items-center gap-4">
            <div class="inline-flex items-center justify-center gap-x-3">
                <img class="w-8 dark:hidden" src="{{ asset('assets') }}/images/icons/icon.webp" alt="logo" />
                <img class="hidden w-8 dark:block" src="{{ asset('assets') }}/images/icons/icon-white.webp" alt="logo" />
                <span class="text-xl font-bold text-zinc-950 dark:text-zinc-50">AlpineUse</span>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <!-- Navbar -->
            <div class="inline-flex flex-row items-center justify-center gap-x-2">
                <div class="relative z-30 rounded-lg cursor-pointer">
                    <a href="https://github.com/AlpineUse/AlpineUse" rel="noreferrer" target="_blank" class="text-gray-900 hover:opacity-75">
                        <span class="sr-only"> GitHub </span>
                    </a>
                </div>
                                        <span class="icon-[material-symbols-light--16mp-sharp]"></span>
                <div>
                    {{-- <x-darkmode /> --}}
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
        <p class="text-xl text-center text-zinc-600 dark:text-zinc-300">
            Released under the MIT License.
        </p>
    </div>
</footer>
@endsection