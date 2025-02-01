@php $title = $__env->yieldContent('code'); @endphp
@extends('app')

@section('slot')
    <!-- Body -->
    <main>
        <div class="grid h-screen px-4 place-content-center">
            <div class="flex flex-col gap-4 text-center">
                <h1 class="font-bold text-gray-300 text-9xl dark:text-gray-600">@yield('code')</h1>
            </div>
        </div>
    </main>
    <!-- Body -->
@endsection
