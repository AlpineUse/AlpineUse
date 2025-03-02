<div>
    <div class="flex flex-col w-full min-h-screen mx-auto md:py-4 xs:py-8 md:mt-5 max-w-5xl px-4 sm:py-12">

        <div
            class="flex flex-row justify-between pt-4 pb-4 border-b border-secondary-light dark:border-secondary-dark text-dark dark:text-light text-start">
            <div>
                <h2 class="m-0 text-2xl font-bold leading-8 tracking-tight">
                    Plugins
                </h2>
                <p class="m-0 text-secondary-dark/60 dark:text-secondary-light/60">
                    Here's a All Plugin For Alpine.js for you !
                </p>
            </div>
        </div>

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
                                    {{ $plugin->name }}
                                </h3>
                            </div>
                            <div>
                                @if($plugin->created_at && $plugin->created_at->gt(\Carbon\Carbon::now()->subDays(3)))
                                <span
                                    class="bg-transparent text-green-500 border border-neutral-300 flex items-center text-xs font-semibold px-2.5 py-0.5 rounded-full">
                                    <span class="block w-1.5 h-1.5 -ml-0.5 mr-1 bg-green-500 rounded-full"></span>
                                    <span>New</span>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="mt-1">
                            <p class="text-sm text-secondary-dark/70 dark:text-secondary-light/70">
                                {{ $plugin->desc }}
                            </p>
                        </div>

                        <div class="flex flex-row w-full gap-2 mt-3">
                            <a href="{{ route('home.docs.plugins', ['url' => $plugin->url]) }}" class="w-full"
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
            
        </ul>
    </div>
</div>
