@props([
    // Colors
    'primary' => false,
    'secondary' => false,
    'success' => false,
    'warning' => false,
    'danger' => false,
    
    // Icons
    'icon' => '',
    'iconClass' => '',
    'iconStyle' => 'default',
    
    'size' => 'lg',
    'loading' => false,
])

<button
    {{ $attributes->class([
        'w-full transition-all duration-500 cursor-pointer',
        'bg-primary-light dark:bg-primary-dark text-primary hover:bg-primary-light hover:opacity-70 dark:hover:bg-primary-dark dark:hover:opacity-70' => $primary,
        'bg-secondary-light dark:bg-secondary-dark text-secondary-foreground-light dark:text-secondary-foreground-dark hover:bg-secondary-light hover:opacity-70 dark:hover:bg-secondary-dark dark:hover:opacity-70' => $secondary,
        'bg-success-light dark:bg-success-dark text-success-foreground-light dark:text-success-foreground-dark hover:bg-success-light hover:opacity-70 dark:hover:bg-success-dark dark:hover:opacity-70' => $success,
        'bg-warning-light dark:bg-warning-dark text-warning-foreground-light dark:text-warning-foreground-dark hover:bg-warning-light hover:opacity-70 dark:hover:bg-warning-dark dark:hover:opacity-70' => $warning,
        'bg-danger-light dark:bg-danger-dark text-danger-foreground-light dark:text-danger-foreground-dark hover:bg-danger-light hover:opacity-70 dark:hover:bg-danger-dark dark:hover:opacity-70' => $danger,
        'py-2' => $size === 'xs',
        'py-3' => $size === 'sm',
        'py-4' => $size === 'md',
        'py-5' => $size === 'lg',
        'py-6' => $size === 'xl',
        'disabled:opacity-70 disabled:cursor-progress cursor-progress' => $loading,
    ])->merge(['disabled' => $loading]) }}
>
    @if($icon && $iconStyle === 'between')
        <div class="flex flex-row items-center justify-between w-full">
            <div class="flex flex-row items-center flex-1 text-start">
                @if($loading)
                    <svg @class([
                        $iconClass,
                        'size-2' => $size === 'xs',
                        'size-3' => $size === 'sm',
                        'size-4' => $size === 'md',
                        'size-5' => $size === 'lg',
                        'size-6' => $size === 'xl',
                        'text-primary-foreground-light dark:text-primary-foreground-dark' => $primary,
                        'text-secondary-foreground-light dark:text-secondary-foreground-dark' => $secondary,
                        'text-success-foreground-light dark:text-success-foreground-dark' => $success,
                        'text-warning-foreground-light dark:text-warning-foreground-dark' => $warning,
                        'text-danger-foreground-light dark:text-danger-foreground-dark' => $danger,
                    ]) class="inline-block animate-spin me-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                @endif
                <span @class([
                    'font-bold',
                    'text-xs' => $size === 'xs',
                    'text-sm' => $size === 'sm',
                    'text-md' => $size === 'md',
                    'text-lg' => $size === 'lg',
                    'text-xl' => $size === 'xl',
                ])>
                    {{ $loading ? __('Loading...') : $slot }}
                </span>
            </div>
            <div class="flex-2 text-end">
                <span :name="$icon" @class([
                    $iconClass,
                    'size-3' => $size === 'xs',
                    'size-4' => $size === 'sm',
                    'size-5' => $size === 'md',
                    'size-6' => $size === 'lg',
                    'size-7' => $size === 'xl',
                    'text-primary-foreground-light dark:text-primary-foreground-dark' => $primary,
                    'text-secondary-foreground-light dark:text-secondary-foreground-dark' => $secondary,
                    'text-success-foreground-light dark:text-success-foreground-dark' => $success,
                    'text-warning-foreground-light dark:text-warning-foreground-dark' => $warning,
                    'text-danger-foreground-light dark:text-danger-foreground-dark' => $danger,
                ]) />
            </div>
        </div>
    @else
        <div class="flex flex-row items-center justify-center gap-x-2">
            @if($loading)
                <svg @class([
                    $iconClass,
                    'size-2' => $size === 'xs',
                    'size-3' => $size === 'sm',
                    'size-4' => $size === 'md',
                    'size-5' => $size === 'lg',
                    'size-6' => $size === 'xl',
                    'text-primary-foreground-light dark:text-primary-foreground-dark' => $primary,
                    'text-secondary-foreground-light dark:text-secondary-foreground-dark' => $secondary,
                    'text-success-foreground-light dark:text-success-foreground-dark' => $success,
                    'text-warning-foreground-light dark:text-warning-foreground-dark' => $warning,
                    'text-danger-foreground-light dark:text-danger-foreground-dark' => $danger,
                ]) class="inline-block animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            @endif
            
            <span @class([
                'font-bold',
                'text-xs' => $size === 'xs',
                'text-sm' => $size === 'sm',
                'text-md' => $size === 'md',
                'text-lg' => $size === 'lg',
                'text-xl' => $size === 'xl',
            ])>
                {{ $loading ? __('Loading...') : $slot }}
            </span>

            @if($icon && !$loading)
                <span :name="$icon" @class([
                    $iconClass,
                    'size-3' => $size === 'xs',
                    'size-4' => $size === 'sm',
                    'size-5' => $size === 'md',
                    'size-6' => $size === 'lg',
                    'size-7' => $size === 'xl',
                    'text-primary-foreground-light dark:text-primary-foreground-dark' => $primary,
                    'text-secondary-foreground-light dark:text-secondary-foreground-dark' => $secondary,
                    'text-success-foreground-light dark:text-success-foreground-dark' => $success,
                    'text-warning-foreground-light dark:text-warning-foreground-dark' => $warning,
                    'text-danger-foreground-light dark:text-danger-foreground-dark' => $danger,
                ]) />
            @endif
        </div>
    @endif
</button>