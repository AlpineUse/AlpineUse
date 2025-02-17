<ul class="flex items-center justify-around h-full xs:flex-row-reverse sm:flex-row-reverse lg:flex-col xl:flex-col md:flex-col gap-y-2">
    <li>
        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent hover:text-accent-foreground h-9 w-9 mt-auto rounded-lg"
            href="{{ route(name: 'admin.index') }}" wire:navigate>
            <iconify-icon icon="{{ Route::currentRouteName() === 'admin.index' ? 'material-symbols:analytics' : 'material-symbols:analytics-outline' }}"
                class="text-2xl text-dark dark:text-light"></iconify-icon>
        </a>
    </li>
    <li>
        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent hover:text-accent-foreground h-9 w-9 mt-auto rounded-lg"
            href="{{ route('admin.plugins.index') }}" wire:navigate>
            <iconify-icon icon="{{ Route::currentRouteName() === 'admin.plugins.index' || Request::is('*/plugins/*') ? 'clarity:plugin-solid' : 'clarity:plugin-line' }}" class="text-2xl text-dark dark:text-light"></iconify-icon>
        </a>
    </li>
    <li>
        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent hover:text-accent-foreground h-9 w-9 mt-auto rounded-lg"
            href="{{ route('admin.docs.index') }}" wire:navigate>
            <iconify-icon icon="{{ Route::currentRouteName() === 'admin.docs.index' || Request::is('*/docs/*') ? 'solar:book-bold' : 'solar:book-outline' }}" class="text-2xl text-dark dark:text-light"></iconify-icon>
        </a>
    </li>
</ul>
