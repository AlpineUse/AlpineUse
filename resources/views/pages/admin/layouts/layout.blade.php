@extends('app')

@section('slot')
    <div class="w-full h-full">
        <div class="flex flex-row w-full h-full min-h-screen">
            <!-- Header -->
            @include('pages.admin.components.header')
            <!-- Header -->

            <!-- Body -->
            <div class="w-full h-full p-6 mx-2 mt-1">
                {{ $slot }}
            </div>
            <!-- Body -->

            <!-- Footer -->
            @include('pages.admin.components.footer')
            <!-- Footer -->
        </div>
    </div>
@endsection
