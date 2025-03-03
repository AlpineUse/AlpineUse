<!DOCTYPE html>
<html lang="en" class="scroll-smooth" x-use-theme="light">

<head>
    <!-- Meta -->
    <title>{{ env('APP_NAME') }} - {{ $title }}</title>
    <meta name="description" content="{{ !empty($desc) ? $desc : '' }}" />

    <meta property="og:site_name" content="{{ $title }}" />
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:description" content="{{ !empty($desc) ? $desc : '' }}" />

    <meta property="twitter:title" content="{{ $title }}" />
    <meta property="twitter:description" content="{{ !empty($desc) ? $desc : '' }}" />
    <meta property="og:image" content="{{ env('APP_URL') }}/assets/images/icons/icon.webp" />
    <meta property="og:type" content="website" />
    <meta property="twitter:image" content="{{ env('APP_URL') }}/assets/images/icons/icon.webp" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="twitter:url" content="{{ url()->current() }}" />

    <meta charset="UTF-8" />
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Meta -->

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="{{ env('APP_URL') }}/assets/images/icons/icon.webp" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{ env('APP_URL') }}/assets/images/icons/icon.webp" />
    <link rel="apple-touch-icon" sizes="60x60" href="{{ env('APP_URL') }}/assets/images/icons/icon.webp" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ env('APP_URL') }}/assets/images/icons/icon.webp" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ env('APP_URL') }}/assets/images/icons/icon.webp" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ env('APP_URL') }}/assets/images/icons/icon.webp" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ env('APP_URL') }}/assets/images/icons/icon.webp" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{ env('APP_URL') }}/assets/images/icons/icon.webp" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ env('APP_URL') }}/assets/images/icons/icon.webp" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ env('APP_URL') }}/assets/images/icons/icon.webp" />

    <link rel="icon" type="image/png" sizes="192x192" href="{{ env('APP_URL') }}/assets/images/icons/icon.webp" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ env('APP_URL') }}/assets/images/icons/icon.webp" />
    <link rel="icon" type="image/png" sizes="96x96" href="{{ env('APP_URL') }}/assets/images/icons/icon.webp" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ env('APP_URL') }}/assets/images/icons/icon.webp" />

    <link rel="shortcut icon" href="{{ env('APP_URL') }}/assets/images/icons/icon.webp" />
    <!-- Favicon -->

    <!-- Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts
    <!-- Assets -->

    <!-- x-use-pwa -->
    <script>
        (function() {
            const htmlTag = document.documentElement;
            if (!htmlTag.hasAttribute("x-use-pwa")) return;

            const head = document.head;

            try {
                // استخراج البيانات من السمة x-use-pwa وتحويلها إلى JSON
                const pwaData = JSON.parse(htmlTag.getAttribute("x-use-pwa"));

                if (!Array.isArray(pwaData)) throw new Error("Invalid PWA data format");

                // إضافة عناصر الميتا
                pwaData.forEach(attrs => {
                    const meta = document.createElement("meta");
                    Object.keys(attrs).forEach(key => meta.setAttribute(key, attrs[key]));
                    head.appendChild(meta);
                });

                // استخراج بيانات manifest من x-use-pwa
                const manifestData = pwaData.find(item => item.rel === "manifest");

                if (manifestData) {
                    const manifest = {
                        name: manifestData.name || "Default Name",
                        short_name: manifestData.short_name || "Default Short Name",
                        description: manifestData.description || "A progressive web app example",
                        start_url: manifestData.start_url || "/",
                        display: manifestData.display || "standalone",
                        background_color: manifestData.background_color || "#ffffff",
                        theme_color: manifestData.theme_color || "#000000",
                        icons: manifestData.icons || [{
                            src: "/assets/images/icons/icon.webp",
                            sizes: "512x512",
                            type: "image/webp"
                        }]
                    };

                    // تحويل الـ manifest إلى JSON
                    const manifestBlob = new Blob([JSON.stringify(manifest)], {
                        type: 'application/json'
                    });
                    const manifestURL = URL.createObjectURL(manifestBlob);

                    const link = document.createElement("link");
                    link.rel = "manifest";
                    link.href = manifestURL;
                    head.appendChild(link);

                    console.log("Manifest injected successfully");
                }

                // إضافة الروابط الثابتة مثل الأيقونات
                pwaData.filter(item => item.rel && item.rel !== "manifest").forEach(attrs => {
                    const linkElement = document.createElement("link");
                    Object.keys(attrs).forEach(key => linkElement.setAttribute(key, attrs[key]));
                    head.appendChild(linkElement);
                });

                console.log("PWA meta tags and links injected successfully");
            } catch (error) {
                console.error("Error parsing x-use-pwa data:", error);
            }

            // تسجيل الـ Service Worker
            if ("serviceWorker" in navigator) {
                navigator.serviceWorker.register("/serviceworker.js", {
                        scope: "."
                    })
                    .then(reg => console.log("Laravel PWA: ServiceWorker registered with scope:", reg.scope))
                    .catch(err => console.log("Laravel PWA: ServiceWorker registration failed:", err));
            }
        })();
    </script>
    <!-- x-use-pwa -->

    {{-- <!-- x-use-protectrightclick -->
    <script>
        document.addEventListener("StartAlpineUse", () => {
            document.querySelectorAll("[x-use-protectrightclick]").forEach((el) => {
                const expression = el.getAttribute("x-use-protectrightclick");
                const shouldProtectRightClick = expression === undefined || expression === "" ? true :
                    expression === "true";

                if (shouldProtectRightClick) {
                    el.addEventListener("contextmenu", (event) => {
                        event.preventDefault(); // منع قائمة السياق من الظهور
                    });
                }
            });
        });
    </script>
    <!-- x-use-protectrightclick --> --}}

    <!-- x-use-splash -->
    {{-- <script>
        document.addEventListener("StartAlpineUse", () => {

            const styleUseSplash = document.createElement("style");
            styleUseSplash.textContent = `[x-cloak] { display: none !important; }`;
            document.head.appendChild(styleUseSplash);
            document.querySelectorAll("body *").forEach((el) => {
                el.setAttribute("x-cloak", "true");
            });

            document.querySelectorAll("[x-use-splash]").forEach((el) => {
                el.setAttribute("x-data", `{ useSplash: sessionStorage.getItem("useSplash") }`);
                el.setAttribute("x-init",
                    `sessionStorage.setItem("useSplash", 'true'), $watch('useSplash', (val) => { useSplash = val; });`
                    );
            });

            document.querySelectorAll("body").forEach((el) => {
                const StyleUseSplash = document.createElement("style");
                StyleUseSplash.textContent = `[x-cloak] { display: none !important; }`;
                document.head.appendChild(StyleUseSplash);
                el.setAttribute("x-cloak", "true");
            });

            document.addEventListener("alpine:init", () => {
                Alpine.directive("use-splash", (el, {
                    value,
                    expression
                }, {
                    evaluateLater,
                    effect
                }) => {
                    const duration = value ? parseInt(value) : 1000;

                    const evaluate = evaluateLater(expression);

                    effect(() => {
                        evaluate((result) => {
                            const useSplash = result !== undefined ? result : true;

                            if (useSplash) {
                                sessionStorage.setItem("useSplash", "true");

                                setTimeout(() => {
                                    sessionStorage.setItem("useSplash",
                                        "false");
                                }, duration);
                            } else {
                                el.style.display =
                                "none"; // إخفاء الـ splash إذا كانت false
                            }
                        });
                    });

                });
            });
        });
    </script> --}}
    <!-- x-use-splash -->
</head>

<body class="transition duration-500 ease-in-out bg-light dark:bg-dark">
    @yield('slot')

    <NoScript>
        <div class="fixed top-16 ltr:left-0 rtl:right-0 z-[1000] w-full h-full">
            <p class="text-sm text-center ltr:hidden">يرجى تشغيل محرك الجافاسكربت ليعمل الموقع بنجاح.</p>
            <p class="text-sm text-center rtl:hidden">Please enable the JavaScript to run successfully.</p>
        </div>
    </NoScript>
</body>

</html>
