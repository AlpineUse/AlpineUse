@props([
    'logo' => null
])

<a class="inline-flex items-center justify-center gap-x-3" href="{{ route('home.index') }}" wire:navigate>
    <img class="w-8 dark:hidden" src="{{ asset('assets') }}/images/icons/icon.webp" alt="logo" />
    <img class="hidden w-8 dark:block" src="{{ asset('assets') }}/images/icons/icon-white.webp" alt="logo" />
    @if(!empty($logo))<span class="text-xl font-bold text-zinc-950 dark:text-zinc-50">AlpineUse</span>@endif
</a>