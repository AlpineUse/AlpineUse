@extends('app')

@section('slot')
    <div class="w-full h-full">
        <div class="flex flex-row w-full h-full min-h-screen">
            <!-- Header -->
            @include('pages.admin.components.header')
            <!-- Header -->

            <!-- Body -->
            <div class="w-full h-full mx-2 mt-1 xs:p-2 md:p-6" x-data="{ show: true }"
                x-init="document.addEventListener('livewire:navigate', ()=> { show = false });" :class="show ? 'xyz-in' : 'xyz-out'"
                xyz="fade">
                {{ $slot }}
            </div>
            <!-- Body -->

            <!-- Footer -->
            @include('pages.admin.components.footer')
            <!-- Footer -->
        </div>
    </div>
@endsection
