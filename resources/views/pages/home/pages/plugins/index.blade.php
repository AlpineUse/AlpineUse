<div>
    <div class="flex flex-col w-full min-h-screen px-4 mx-auto md:py-4 xs:py-8 md:mt-5 max-w-7xl sm:py-12">

        <div
            class="flex flex-row justify-between pb-4 border-b border-secondary-light dark:border-secondary-dark text-dark dark:text-light text-start">
            <div>
                <h2 class="m-0 text-2xl font-bold leading-8 tracking-tight">
                    Plugins
                </h2>
                <p class="m-0 text-secondary-dark/60 dark:text-secondary-light/60">
                    Here's a All Plugin For Alpine.js for you !
                </p>
            </div>
            {{-- <div class="p-1.5">
                <button type="button"
                    class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide transition-colors duration-100 bg-white border-2 rounded-md text-neutral-900 hover:text-white border-neutral-900 hover:bg-neutral-900">
                    View
                </button>
            </div> --}}
        </div>

        {{-- <div class="flex items-center justify-between mt-4">
            <div class="flex border rounded-sm border-secondary-light dark:border-secondary-dark">
                <button
                    class="inline-flex items-center justify-center text-gray-600 transition size-10 border-e border-secondary-light dark:border-secondary-dark hover:bg-gray-50 hover:text-gray-700">
                    <iconify-icon icon="foundation:list" class="text-2xl text-dark dark:text-light"></iconify-icon>
                </button>
                <button
                    class="inline-flex items-center justify-center text-gray-600 transition size-10 hover:bg-gray-50 hover:text-gray-700">
                    <iconify-icon icon="mingcute:grid-fill" class="text-2xl text-dark dark:text-light"></iconify-icon>
                </button>
            </div>
        </div> --}}

        <ul class="grid gap-4 mt-4 sm:grid-cols-2 lg:grid-cols-4">

            @forelse ($plugins as $plugin)
                <li>
                    <div class="p-3 border rounded-lg border-secondary-light dark:border-secondary-dark">
                        <div class="my-7">
                            <img src="https://alpinejs.dev/alpine_long.svg" />
                        </div>

                        <div class="flex flex-row items-center justify-between w-full mb-3">
                            <div>
                                <h3 class="text-xl text-dark dark:text-light">
                                    Basic Tee
                                </h3>
                            </div>
                            <div>
                                <span
                                    class="bg-transparent text-green-500 border border-neutral-300 flex items-center text-xs font-semibold px-2.5 py-0.5 rounded-full">
                                    <span class="block w-1.5 h-1.5 -ml-0.5 mr-1 bg-green-500 rounded-full"></span>
                                    <span>New</span>
                                </span>
                            </div>
                        </div>

                        <div class="mt-1">
                            <p class="text-sm text-secondary-dark/70 dark:text-secondary-light/70">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s
                            </p>
                        </div>

                        <div class="flex flex-row w-full gap-2 mt-3">
                            <a href="{{ route('home.docs.index', ['url' => 'introduction']) }}" class="w-full"
                                wire:navigate>
                                <x-elements.button class="w-full rounded-lg" size="sm" secondary>View
                                    Document</x-elements.button>
                            </a>
                        </div>

                    </div>
                </li>
            @empty
                <li class="w-full col-span-full">
                    <div class="flex flex-col items-center justify-center gap-y-2">
                        <iconify-icon icon="ph:empty"
                            class="text-9xl text-secondary-dark/60 dark:text-secondary-light/60"></iconify-icon>
                        <h1 class="text-2xl text-secondary-dark/60 dark:text-secondary-light/60">Empty Plugin !</h1>
                    </div>
                </li>
            @endforelse

            <button @click="useTheme = 'light'">light</button>
            <button @click="useTheme = 'dark'">dark</button>
        </ul>
    </div>
</div>
