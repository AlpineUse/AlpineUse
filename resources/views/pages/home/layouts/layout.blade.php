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
                        <li>
                            <a href="https://x.com/AlpineUseOrg" target="_blank">
                                <iconify-icon icon="prime:twitter"
                                    class="text-2xl text-dark dark:text-light"></iconify-icon>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Navbar -->
        </div>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            sessionStorage.setItem('back_path', getPathFromUrl(window.location.href));
        });

        function getPathFromUrl(url) {
            try {
                return new URL(url).pathname;
            } catch (error) {
                console.error('Invalid URL:', url);
                return '/';
            }
        }

        function getPathWithoutLastSegment(path) {
            const segments = path.replace(/\/+$/, '').split('/');
            if (segments.length > 2) {
                return '/' + segments.slice(1, -1).join('/');
            }
            return path;
        }
    </script>

    <main class="max-w-5xl mx-auto px-2" x-data="{ pageIn: false, pageOut: false }" x-init="// =-> خروج الصفحة
    document.addEventListener('livewire:navigate', (event) => {
        sessionStorage.setItem('back_path', getPathFromUrl(window.location.href));
        sessionStorage.setItem('next_path', getPathFromUrl(event.detail.url.href));
    
        const backPath = sessionStorage.getItem('back_path') || '/';
        const nextPath = sessionStorage.getItem('next_path') || '/';
    
        (nextPath === backPath || getPathWithoutLastSegment(nextPath) === getPathWithoutLastSegment(backPath)) ? pageOut = false: pageOut = true;
    });
    
    // =-> دخول الصفحة
    document.addEventListener('livewire:navigated', () => {
        sessionStorage.setItem('current_path', getPathFromUrl(window.location.href));
    
        const currentPath = sessionStorage.getItem('current_path') || '/';
        const backPath = sessionStorage.getItem('back_path') || '/';
    
        (currentPath === backPath || getPathWithoutLastSegment(currentPath) === getPathWithoutLastSegment(backPath)) ? pageIn = false: pageIn = true;
    });"
        :class="{ 'xyz-in': pageIn, 'xyz-out': pageOut }" xyz="fade">

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
