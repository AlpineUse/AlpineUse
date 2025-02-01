<div class="h-full h-min-screen">
    <div class="flex flex-col items-center justify-center w-full my-20 items-self-center">
        <div class="relative w-64 mx-auto my-12 h-80 lg:flex lg:items-center lg:justify-center">
            <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-gradient-to-br from-[#c6f5ff] to-[#96e2f4] dark:from-[#427c89] dark:to-[#112a30] blur-2xl rounded-full"
                style="transform: translate(-50%, -50%);"></div>
            <img class="absolute block h-auto sm:h-64 top-1/2 left-1/2 dark:hidden"
                src="{{ asset('assets') }}/images/icons/icon.webp" alt="AlphineUse"
                style="max-width: 280px; transform: translate(-50%, -50%);" />
            <img class="absolute hidden h-auto sm:h-64 top-1/2 left-1/2 dark:block"
                src="{{ asset('assets') }}/images/icons/icon-white.webp" alt="AlphineUse"
                style="max-width: 280px; transform: translate(-50%, -50%);" />
        </div>
        <div class="max-w-3xl mx-auto text-center">
            <h1
                class="bg-gradient-to-r from-[#2d3441] via-[#7db1bd] to-[#455574] dark:from-[#96e2f4] dark:via-[#7ec7da] dark:to-[#96e2f4] bg-clip-text text-2xl font-extrabold text-transparent sm:text-4xl">
                Collection of Alpine.js <br /><span class=""> Extending Directives </span>
            </h1>
        </div>
        <div class="flex flex-row justify-center w-full max-w-sm gap-4 my-12">
            <x-elements.button class="w-full rounded-lg" size="sm" primary>Get
                Started</x-elements.button>

            <x-elements.button class="w-full rounded-lg" size="sm" secondary>Learn More</x-elements.button>
        </div>
    </div>
</div>