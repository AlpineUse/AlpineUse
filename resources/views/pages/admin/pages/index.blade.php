<div class="flex flex-col items-start justify-start w-full leading-6">

    <!-- Head -->
    <div class="border-0 border-solid text-dark dark:text-light text-start">
        <h2 class="m-0 text-2xl font-bold leading-8 tracking-tight">
            Admin Dashboard Control
        </h2>
        <p class="m-0 text-secondary-dark/60 dark:text-secondary-light/60">
            Here's a Card Analaytics of AlpineUse !
        </p>
    </div>
    <!-- Head -->

    <div class="flex w-full gap-2 mt-2 -m-1 xs:flex-col sm:flex-col md:flex-row lg:flex-row xl:flex-row">

        <div class="border border-solid xs:w-full md:w-1/2 bg-light dark:bg-dark rounded-xl border-zinc-800">
            <div
                class="flex flex-row gap-y-1.5 justify-between items-center px-6 pt-6 pb-2 border-0 border-solid border-zinc-800">
                <h1 class="m-0 text-lg font-medium leading-5 tracking-tight border-0 border-solid border-zinc-800">
                    Plugins
                </h1>
                <iconify-icon icon="clarity:plugin-line" class="text-2xl text-dark dark:text-light"></iconify-icon>
            </div>
            <div class="w-auto max-w-xs px-6 pt-0 pb-6 border-0 border-solid border-zinc-800">
                <div class="text-2xl font-bold leading-8 border-0 border-solid border-zinc-800">
                    {{ $plugins }}
                </div>
            </div>
        </div>

        <div class="border border-solid xs:w-full md:w-1/2 bg-light dark:bg-dark rounded-xl border-zinc-800">
            <div
                class="flex flex-row gap-y-1.5 justify-between items-center px-6 pt-6 pb-2 border-0 border-solid border-zinc-800">
                <h1 class="m-0 text-lg font-medium leading-5 tracking-tight border-0 border-solid border-zinc-800">
                    Documents
                </h1>
                <iconify-icon icon="solar:book-outline" class="text-2xl text-dark dark:text-light"></iconify-icon>
            </div>
            <div class="w-auto max-w-xs px-6 pt-0 pb-6 border-0 border-solid border-zinc-800">
                <div class="text-2xl font-bold leading-8 border-0 border-solid border-zinc-800">
                    {{ $docs }}
                </div>
            </div>
        </div>

    </div>
</div>
