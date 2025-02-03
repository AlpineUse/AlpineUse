@extends('app')

@section('slot')
    <div class="flex flex-col items-center justify-center min-h-screen py-8">
        <div class="w-full max-w-xs leading-6">
            <div class="flex justify-start px-2 mb-6">
                <a href="{{ route('home.index') }}" class="flex items-center gap-3 cursor-pointer" wire:navigate>
                    <div class="inline-flex items-center justify-center gap-x-3">
                        <img class="w-8 dark:hidden" src="{{ asset('assets') }}/images/icons/icon.webp" alt="logo" />
                        <img class="hidden w-8 dark:block" src="{{ asset('assets') }}/images/icons/icon-white.webp"
                            alt="logo" />
                        <span class="text-xl font-bold text-zinc-950 dark:text-zinc-50">AlpineUse</span>
                    </div>
                </a>
            </div>

            <div class="mt-2 mb-0">
                {{ $slot }}
            </div>
        </div>
    </div>
@endsection
