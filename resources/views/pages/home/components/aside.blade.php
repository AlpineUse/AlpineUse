<div>
    <aside wire:ignore.self
        class="relative flex flex-col w-full min-h-screen px-4 pt-6 pb-4 leading-6 border-e border-secondary-light/50 dark:border-secondary-dark/50 gap-x-4 lg:sticky lg:top-16 lg:flex lg:basis-72 basis-full">
        <div>
            <ul class="flex flex-col gap-y-3 text-dark dark:text-white">
                @foreach ($documents as $document)
                    <li class="flex flex-col rounded-xl border border-secondary-dark/10 dark:border-secondary-light/10"
                        wire:key="{{ $document->id }}">
                        <a class="relative flex flex-row justify-start items-center mx-2 gap-x-2 p-2 text-sm font-semibold leading-5 duration-150 ease-in-out rounded-md cursor-pointer"
                            href="{{ route('home.docs.index', ['url' => $document->url]) }}" wire:navigate>
                            <iconify-icon icon="solar:book-outline"
                                class="text-2xl text-dark dark:text-light"></iconify-icon> {{ $document->title }}
                        </a>
                    </li>
                @endforeach
                <ul x-data="{ show: $persist(false).using(sessionStorage) }"
                    class="flex flex-col rounded-xl border border-secondary-dark/10 dark:border-secondary-light/10">
                    <li>
                        <a x-on:click="show = ! show"
                            class="relative flex flex-row justify-start items-center mx-2 gap-x-2 p-2 text-sm font-semibold leading-5 duration-150 ease-in-out rounded-md cursor-pointer">
                            <iconify-icon icon="mingcute:plus-line"
                                class="text-2xl text-dark dark:text-light transition"
                                :class="{ 'rotate-45': show }"></iconify-icon> Plugins
                        </a>
                    </li>
                    <div class="mb-2 flex flex-col gap-y-2" x-show="show">
                        @foreach ($plugins as $plugin)
                            <a href="{{ route('home.docs.plugins', [ 'url' => $plugin->url ]) }}" class="cursor-pointer">
                                <li class="flex text-sm items-center flex-row mx-6 gap-x-2">
                                    - <iconify-icon icon="la:star-of-life"
                                        class="text-2xl text-dark dark:text-light ms-2 rotate-45"></iconify-icon>
                                    <p>{{ $plugin->name }}</p>
                                </li>
                            </a>
                        @endforeach
                    </div>
                </ul>
            </ul>
        </div>
    </aside>
</div>
