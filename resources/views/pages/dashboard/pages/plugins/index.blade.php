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

        <div
            class="rounded-lg overflow-hidden border border-neutral-200/60 bg-white text-neutral-700 shadow-sm w-[380px]">
            <div class="relative">
                <img src="" class="w-full h-auto" />
            </div>
            <div class="p-7">
                <div class="flex justify-between w-full flex-fol">
                    <h2 class="mb-2 text-lg font-bold leading-none tracking-tight">Product Name</h2>
                    <div class="inline-flex items-center justify-center mb-2">
                        <span
                            class="hidden bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Badge</span>
                        <span
                            class="hidden bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Badge</span>
                        <span
                            class="bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Not Active</span>
                    </div>
                </div>

                <p class="mt-2 mb-5 text-neutral-500">This card element can be used to display a product, post, or any other
                    type of data.</p>
                <button
                    class="inline-flex items-center justify-center w-full h-10 px-4 py-2 text-sm font-medium text-white transition-colors rounded-md focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none bg-neutral-950 hover:bg-neutral-950/90">
                    View
                </button>
            </div>
        </div>

        <div
            class="rounded-lg overflow-hidden border border-neutral-200/60 bg-white text-neutral-700 shadow-sm w-[380px]">
            <a class="w-full h-full" href="#" wire:navigate>
                <div class="flex flex-col items-center justify-center h-full">
                    <iconify-icon icon="ic:round-plus" class="text-dark dark:text-light text-9xl"></iconify-icon>
                </div>
            </a>
        </div>

    </div>
    <!-- Body -->
</div>
