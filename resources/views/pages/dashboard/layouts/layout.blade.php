@extends('app')

@section('slot')
    <div class="w-full h-full">
        <div class="flex flex-col w-full h-full min-h-screen">
            <!-- Header -->
            @include('pages.dashboard.components.header')
            <!-- Header -->

            <!-- Body -->
            <div class="w-full h-full mx-2 mt-1 animate__animated animate__fadeIn animate__faster xs:p-2 md:p-6">
                {{ $slot }}
            </div>
            <!-- Body -->

            <!-- Footer -->
            @include('pages.dashboard.components.footer')
            <!-- Footer -->
        </div>
    </div>
@endsection
