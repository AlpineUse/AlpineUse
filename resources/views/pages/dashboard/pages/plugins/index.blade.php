<div>
    <!-- Head -->
    <div class="border-0 border-solid text-dark dark:text-light text-start">
        <h2 class="m-0 text-2xl font-bold leading-8 tracking-tight">
            Plugins Dashboard Control
        </h2>
        <p class="m-0 text-secondary-dark/60 dark:text-secondary-light/60">
            Here's a List Plugins of AlpineUse Create for you :)
        </p>
    </div>
    <!-- Head -->

    <!-- Body -->
    <div class="flex gap-2 mt-3 -m-1 s:flex-col sm:flex-col md:flex-row lg:flex-row xl:flex-row">

        @foreach ($plugins as $plugin)
            <div
                class="rounded-lg overflow-hidden border border-neutral-200/60 bg-white text-neutral-700 shadow-sm w-[380px] h-auto">
                <div class="flex flex-col p-7">
                    <div class="flex justify-between w-full flex-fol">
                        <h2 class="mb-2 text-lg font-bold leading-none tracking-tight">{{ $plugin->name }}</h2>


                        <div class="inline-flex items-center justify-center mb-2">
                            {{-- @if ($plugin->status == 'active')
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Badge</span>
                                <span
                                    class="bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Not
                                    Active</span>
                            @else
                                <span
                                    class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Badge</span>
                            @endif --}}
                        </div>
                    </div>

                    <p class="h-16 mt-2 mb-5 text-neutral-500">
                        {{ $plugin->desc }}
                    </p>
                    
                    <div class="bottom-0 flex flex-row items-end justify-end w-full max-w-sm gap-4 mt-12">
                        <a href="{{ route('dashboard.plugins.view', ['id' => $plugin->id]) }}" class="w-full" wire:navigate>
                            <x-elements.button class="w-full rounded-lg" size="sm" primary>Edit Plugin</x-elements.button>
                        </a>
                    </div>
                    <div class="flex flex-col items-center justify-center w-full mt-2">
                        <a class="cursor-pointer text-danger-light dark:text-danger-dark" wire:confirm="are you sure to delete this plugin ?" wire:click="delete({{ $plugin->id }})">Delete Plugin</a>
                    </div>
                </div>
            </div>
        @endforeach

        <div
            class="rounded-lg overflow-hidden border border-neutral-200/60 bg-white text-neutral-700 shadow-sm w-[380px] h-64">
            <a class="w-full h-full" wire:click="create">
                <div class="flex flex-col items-center justify-center h-full">
                    <iconify-icon icon="ic:round-plus" class="text-dark dark:text-light text-9xl"></iconify-icon>
                </div>
            </a>
        </div>

    </div>
    <!-- Body -->
</div>
