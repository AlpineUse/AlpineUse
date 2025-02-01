@php $title = $__env->yieldContent('code'); @endphp

<!DOCTYPE html>
<html class="scroll-smooth" x-data="{ theme: localStorage.getItem('vueuse-color-scheme') }" x-init="$watch('theme', (val) => localStorage.setItem('theme', val));
window.addEventListener('DOMContentLoaded', function() {
    if (theme == null || theme == 'true' || theme == 'false') { theme = 'auto'; }
    const mediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
    mediaQuery.addEventListener('change', (e) => { if (theme === 'auto') { document.documentElement.classList.toggle('dark', e.matches); } });
})"
    :class="{ 'dark': theme === 'dark' || theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches }">

<head>
    <!-- Base Meta -->
    <title>{{ env('APP_NAME') }} - {{ $title ?? '' }}</title>

    <meta property="og:image" content="{{ env('APP_URL') }}/assets/images/icons/icon.png" />
    <meta property="og:type" content="website" />
    <meta property="twitter:image" content="{{ env('APP_URL') }}/assets/images/icons/icon.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="twitter:url" content="{{ url()->current() }}" />

    <meta charset="UTF-8" />
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Meta -->

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="{{ env('APP_URL') }}/assets/images/icons/icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{ env('APP_URL') }}/assets/images/icons/icon.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="{{ env('APP_URL') }}/assets/images/icons/icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ env('APP_URL') }}/assets/images/icons/icon.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ env('APP_URL') }}/assets/images/icons/icon.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ env('APP_URL') }}/assets/images/icons/icon.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ env('APP_URL') }}/assets/images/icons/icon.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{ env('APP_URL') }}/assets/images/icons/icon.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ env('APP_URL') }}/assets/images/icons/icon.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ env('APP_URL') }}/assets/images/icons/icon.png" />

    <link rel="icon" type="image/png" sizes="192x192" href="{{ env('APP_URL') }}/assets/images/icons/icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ env('APP_URL') }}/assets/images/icons/icon.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="{{ env('APP_URL') }}/assets/images/icons/icon.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ env('APP_URL') }}/assets/images/icons/icon.png" />

    <link rel="shortcut icon" href="{{ env('APP_URL') }}/assets/images/icons/icon.png" />
    <!-- Favicon -->

    <!-- Setup -->
    <script>
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            if (localStorage.getItem("theme") == 'system' || localStorage.getItem("theme") == 'dark') {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.add('light');
            }
        } else {
            if (localStorage.getItem("theme") == 'system' || localStorage.getItem("theme") == 'light') {
                document.documentElement.classList.add('light');
            } else {
                document.documentElement.classList.add('dark');
            }
        }

        @if (env('APP_ENV') == 'production')
            document.addEventListener("contextmenu", function(e) {
                e.preventDefault();
            });
        @endif
    </script>
    <!-- Setup -->

    <!-- Assets -->
    @vite(['resources/css/app.css'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @laravelPWA
    <!-- Assets -->
</head>

<body class="transition-all duration-500 bg-light dark:bg-dark">
    <!-- Body -->
    <main>
        <div class="grid h-screen px-4 place-content-center">
            <div class="flex flex-col gap-4 text-center">
                <h1 class="font-bold text-gray-300 text-9xl dark:text-gray-600">@yield('code')</h1>
            </div>
        </div>
    </main>
    <!-- Body -->
</body>

</html>
