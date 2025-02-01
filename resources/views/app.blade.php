<!DOCTYPE html>
<html class="scroll-smooth" x-alpineuse x-use-theme>
<head>
    <!-- Base Meta -->
    @if (!empty($title))
        <title>{{ env('APP_NAME') }} - {{ $title }}</title>
        <meta name="description" content="{{ !empty($desc) ? $desc : '' }}" />

        <meta property="og:site_name" content="{{ $title }}" />
        <meta property="og:title" content="{{ $title }}" />
        <meta property="og:description" content="{{ !empty($desc) ? $desc : '' }}" />

        <meta property="twitter:title" content="{{ $title }}" />
        <meta property="twitter:description" content="{{ !empty($desc) ? $desc : '' }}" />
    @else
        @inertiaHead
        @routes
    @endif

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
    @laravelPWA
    <!-- Assets -->

    <!-- AlpineUse -->
    
    <!-- x-alpineuse -->
    <script>
        const StartAlpineUse = new Event('StartAlpineUse');
        setTimeout(() => {
            document.dispatchEvent(StartAlpineUse);
        }, 0);

        document.addEventListener('StartAlpineUse', () => {

            document.querySelectorAll('[x-alpineuse]').forEach(el => {
                el.setAttribute("x-data", '');
            });

            console.log('StartAlpineUse Event, time is', Date.now());
        });
    </script>
    <!-- x-alpineuse -->

    <!-- x-use-theme -->
    <script>
        if (localStorage.getItem("useTheme") == undefined) {
            localStorage.setItem("useTheme", 'auto');
        }
        if (window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches) {
            if (localStorage.getItem("useTheme") == "auto" || localStorage.getItem("useTheme") == "dark") {
                document.documentElement.classList.add("dark");
            } else {
                document.documentElement.classList.add("light");
            }
        } else {
            if (localStorage.getItem("useTheme") == "auto" || localStorage.getItem("useTheme") == "light") {
                document.documentElement.classList.add("light");
            } else {
                document.documentElement.classList.add("dark");
            }
        }

        document.addEventListener("StartAlpineUse", () => {
            document.querySelectorAll("[x-use-theme]").forEach((el) => {
                el.setAttribute('x-data', '{ useTheme: localStorage.getItem("useTheme") }');
                el.setAttribute(
                    "x-init",
                    `
                        $watch('useTheme', (val) => { localStorage.setItem("useTheme", val); });
        
                        const mediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
                        mediaQuery.addEventListener('change', (e) => { 
                            if(useTheme === 'auto'){ 
                                document.documentElement.classList.toggle('dark', e.matches); 
                                } 
                            }
                        );
                        `
                );
                el.setAttribute("x-bind:class",
                    `{ dark: useTheme === 'dark' || (useTheme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) }`
                    );
            });
        });
    </script>
    <!-- x-use-theme -->

    {{-- <!-- x-use-hideScrollBar -->
    <script>
        document.addEventListener("alpine:init", () => {
            const styleUseHideScrollbar = document.createElement("style");
            styleUseHideScrollbar.textContent = `
                .usehideScrollbar {
                    -ms-overflow-style: none;
                    scrollbar-width: none;
                }
                .usehideScrollbar::-webkit-scrollbar {
                    display: none;
                }
            `;
            document.head.appendChild(styleUseHideScrollbar);

            Alpine.directive("use-hidescrollbar", (el, {
                expression
            }) => {
                // استخدام expression من الحجة مباشرة دون إعادة تعريفه
                const shouldHideScrollbar = expression === undefined || expression === "" || expression
                    .toLowerCase() === "true" ? true : false;

                if (shouldHideScrollbar) {
                    el.classList.add("usehideScrollbar");
                } else {
                    el.classList.remove("usehideScrollbar");
                }
            });
        });
    </script>
    <!-- x-use-hideScrollBar --> --}}

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

    <!-- x-use-longpress -->
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.directive("use-longpress", (el, {
                value,
                expression
            }, {
                evaluateLater,
                cleanup
            }) => {
                const duration = value || 500;
                let timeout;
                const evaluate = evaluateLater(expression);

                const StyleUseLongpress = document.createElement("style");
                StyleUseLongpress.textContent = `
                                .useLongpress, .useLongpress * {
                                    margin: 0;
                                    padding: 0;
                                    -webkit-tap-highlight-color: transparent !important;
                                    user-select: none !important;
                                    -webkit-user-select: none !important;
                                    -moz-user-select: none !important;
                                    -ms-user-select: none !important;
                                    -o-user-select: none !important;
                                    -webkit-user-drag: none !important;
                                    -webkit-overflow-scrolling: touch;
                                    scroll-behavior: smooth;
                                }
                            `;
                document.head.appendChild(StyleUseLongpress);
                el.classList.add("useLongpress");

                const startPress = () => {
                    timeout = setTimeout(() => {
                        evaluate();
                    }, duration);

                    el.addEventListener("contextmenu", (event) => {
                        event.preventDefault();
                    });
                };

                const cancelPress = () => {
                    clearTimeout(timeout);
                    el.addEventListener("contextmenu", (event) => {
                        event.preventDefault();
                    });
                };

                el.addEventListener("contextmenu", (event) => {
                    event.preventDefault();
                });

                el.addEventListener("mousedown", startPress);
                el.addEventListener("touchstart", startPress);
                el.addEventListener("mouseup", cancelPress);
                el.addEventListener("mouseleave", cancelPress);
                el.addEventListener("touchend", cancelPress);
                el.addEventListener("touchcancel", cancelPress);

                cleanup(() => {
                    el.removeEventListener("contextmenu", (event) => event.preventDefault());
                    el.removeEventListener("mousedown", startPress);
                    el.removeEventListener("touchstart", startPress);
                    el.removeEventListener("mouseup", cancelPress);
                    el.removeEventListener("mouseleave", cancelPress);
                    el.removeEventListener("touchend", cancelPress);
                    el.removeEventListener("touchcancel", cancelPress);
                });
            });
        });
    </script>

    <!-- x-use-longpress -->

    <!-- x-use-dbclick -->
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.directive("use-dbclick", (el, {
                expression
            }, {
                evaluateLater,
                cleanup
            }) => {
                const evaluate = evaluateLater(expression); // إعداد تنفيذ التعبير
                let lastClickTime = 0; // زمن النقر الأخير

                const StyleUseDbClick = document.createElement("style");
                StyleUseDbClick.textContent = `
                                        .useDbClick, .useDbClick * {
                                            touch-action: manipulation;
                                            pointer-events: auto;
                                                touch-action: none;
                                                -webkit-user-select: none;
                                                -moz-user-select: none;
                                                -ms-user-select: none;
                                                user-select: none;
                                        }
                                    `;
                document.head.appendChild(StyleUseDbClick);
                el.classList.add("useDbClick");

                // إجراء يتم تنفيذه عند النقر
                const handleClick = () => {
                    const currentTime = new Date().getTime();
                    // تحقق من الفرق بين النقرات
                    if (currentTime - lastClickTime < 200) {
                        evaluate(); // تنفيذ التعبير إذا كان الفارق أقل من 200 مللي ثانية
                    }
                    lastClickTime = currentTime; // تحديث زمن النقر الأخير
                };

                el.addEventListener("contextmenu", (event) => {
                    event.preventDefault();
                });

                // إضافة مستمع للنقر
                el.addEventListener("click", handleClick);

                // تنظيف الأحداث عند إزالة العنصر
                cleanup(() => {
                    el.removeEventListener("click", handleClick);
                });
            });
        });
    </script>
    <!-- x-use-dbclick -->

    <!-- x-use-tbclick -->
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.directive("use-tbclick", (el, {
                expression
            }, {
                evaluateLater,
                cleanup
            }) => {
                const evaluate = evaluateLater(expression); // إعداد تنفيذ التعبير
                let clickCount = 0; // عداد النقرات
                let lastClickTime = 0; // زمن النقر الأخير

                const StyleUseTbClick = document.createElement("style");
                StyleUseTbClick.textContent = `
                                        .useTbClick, .useTbClick * {
                                            touch-action: manipulation;
                                            pointer-events: auto;
                                                touch-action: none;
                                                -webkit-user-select: none;
                                                -moz-user-select: none;
                                                -ms-user-select: none;
                                                user-select: none;
                                        }
                                    `;
                document.head.appendChild(StyleUseTbClick);
                el.classList.add("useTbClick");

                // إجراء يتم تنفيذه عند النقر
                const handleClick = () => {
                    const currentTime = new Date().getTime();

                    // تحقق من الفرق بين النقرات
                    if (currentTime - lastClickTime < 200) {
                        clickCount++;
                        // إذا كانت ثلاث نقرات
                        if (clickCount === 3) {
                            evaluate(); // تنفيذ التعبير
                            clickCount = 0; // إعادة تعيين العداد
                        }
                    } else {
                        clickCount = 1; // إعادة تعيين العداد في حالة تجاوز 200 مللي ثانية
                    }
                    lastClickTime = currentTime; // تحديث زمن النقر الأخير
                };

                el.addEventListener("contextmenu", (event) => {
                    event.preventDefault();
                });

                // إضافة مستمع للنقر
                el.addEventListener("click", handleClick);

                // تنظيف الأحداث عند إزالة العنصر
                cleanup(() => {
                    el.removeEventListener("click", handleClick);
                });
            });
        });
    </script>
    <!-- x-use-tbclick -->

    <!-- x-use-share -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const isSupport = !!navigator.share;
            document.querySelectorAll("[x-use-share]").forEach((el) => {
                el.setAttribute('x-data', `{ isSupport: ${isSupport} }`);
            });
        });

        document.addEventListener('alpine:init', () => {
            Alpine.directive('use-share', (el, {
                expression
            }, {
                evaluate
            }) => {
                el.addEventListener('click', async () => {
                    const shareData = evaluate(expression);
                    if (navigator.share) {
                        try {
                            await navigator.share(shareData);
                            console.log('Success: useShare');
                        } catch (err) {
                            console.error('Failed: useShare', err);
                        }
                    } else {
                        console.error('useShare not supported');
                    }
                });
            });
        });
    </script>
    <!-- x-use-share -->

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

    <!-- Archive -->
    {{-- <script>
            document.addEventListener('alpine:init', () => {
    
                Alpine.directive('use-shortcut', (el, { expression, modifiers }, { evaluateLater, cleanup }) => {
                    const evaluate = evaluateLater(expression);
                    const keys = modifiers; // جميع المفاتيح المعدلة (مثل ctrl, alt, shift)
                    
                    const handleKeyPress = (event) => {
                        const keyPressed = keys[0]; // المفتاح الأساسي (مثل a, b, c)
    
                        // تحقق مما إذا كانت المفاتيح المطلوبة مضغوطة
                        const isCtrlPressed = keys.includes('ctrl') ? event.ctrlKey : true;
                        const isAltPressed = keys.includes('alt') ? event.altKey : true;
                        const isShiftPressed = keys.includes('shift') ? event.shiftKey : true;
    
                        if (isCtrlPressed && isAltPressed && isShiftPressed && event.key === keyPressed) {
                            evaluate();
                        }
                    };
    
                    // الاستماع إلى حدث keydown على مستوى النافذة
                    window.addEventListener('keydown', handleKeyPress);
    
                    // تنظيف عند إزالة العنصر
                    cleanup(() => {
                        window.removeEventListener('keydown', handleKeyPress);
                    });
                });
    
            Alpine.directive('use-key', (el, { expression, modifiers }, { evaluateLater, cleanup }) => {
                    const evaluate = evaluateLater(expression);
                    const key = modifiers[0]; // التقاط المفتاح الذي تم تحديده كمُعَدِّل (مثل q)
    
                    const handleKeyPress = (event) => {
                        if (event.key === key) {
                            evaluate();
                        }
                    };
    
                    // الاستماع إلى حدث keydown على مستوى النافذة
                    window.addEventListener('keydown', handleKeyPress);
    
                    // تنظيف عند إزالة العنصر
                    cleanup(() => {
                        window.removeEventListener('keydown', handleKeyPress);
                    });
                });
            });
        </script> --}}
    <!-- Archive -->
    <!-- AlpineUse -->
</head>

<body class="transition-all duration-500 bg-light dark:bg-dark">
    @if (!empty($title))
        @yield('slot')
    @else
        <!-- OR -->
        @inertia
    @endif

    <NoScript>
        <div class="fixed top-16 ltr:left-0 rtl:right-0 z-[1000] w-full h-full">
            <p class="text-sm text-center ltr:hidden">يرجى تشغيل محرك الجافاسكربت ليعمل الموقع بنجاح.</p>
            <p class="text-sm text-center rtl:hidden">Please enable the JavaScript to run successfully.</p>
        </div>
    </NoScript>
</body>

</html>
