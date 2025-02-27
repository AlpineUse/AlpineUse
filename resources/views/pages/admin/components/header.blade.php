<aside
    class="flex-col h-full min-h-screen xl:flex hidden border-e border-secondary-dark/30 dark:border-secondary-light/30">
    <div class="p-2 border-b border-secondary-dark/30 dark:border-secondary-light/30">
        <div
            class="inline-flex items-center justify-center gap-2 text-sm font-medium transition-colors border rounded-md shadow-sm whitespace-nowrap ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 w-9">
            <x-elements.logo />
        </div>
    </div>

    <nav class="grid gap-1 p-2">
        <!-- Navbar -->
        @include('pages.admin.components.navbar')
        <!-- Navbar -->
    </nav>
    
    <nav class="flex flex-col p-2 mt-auto border-t gap-y-2 border-secondary-dark/30 dark:border-secondary-light/30">
        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent hover:text-accent-foreground h-9 w-9 mt-auto rounded-lg"
            href="{{ route('home.index') }}" wire:navigate>
            <iconify-icon icon="material-symbols:home-outline"
                class="text-2xl text-dark dark:text-light"></iconify-icon>
        </a>
        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent hover:text-accent-foreground h-9 w-9 mt-auto rounded-lg"
            href="{{ route('auth.logout') }}" wire:navigate>
            <iconify-icon icon="material-symbols:logout" class="text-2xl text-dark dark:text-light"></iconify-icon>
        </a>
    </nav>
</aside>
