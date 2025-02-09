@props([
    'type' => 'text',
    'placeholder' => null,
    'required' => true,
    'autofocus' => false,
    'disabled' => false,
    'label' => null,
    'icon' => null,
    'iconClass' => '',
    'iconStyle' => 'start', // 'start' or 'end'
    'size' => 'lg', // 'xs', 'sm', 'md', 'lg', 'xl'
    'success' => null,
    'error' => null,
    'loading' => false,
    'showPassword' => false, // Password toggle
    'class' => null,
    'wire' => null,
])

<div class="flex flex-col w-full">
    @if($label)
        <label class="w-full text-start text-zinc-900 dark:text-zinc-50">
            {{ $label }}
            @if($required)
                <span class="text-danger-light dark:text-danger-dark">*</span>
            @endif
            :
        </label>
    @endif

    <div class="relative mt-2 rounded-lg shadow">
        @if($icon && $iconStyle === 'start')
            <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                <i class="{{ $icon }} {{ $iconClass }} text-zinc-400"></i>
            </div>
        @endif

        <input
            type="{{ $type === 'password' && $showPassword ? 'text' : $type }}"
            placeholder="{{ $placeholder ?? $label }}"
            @if ($required) required @endif
            autocomplete="{{ $type }}"
            {{ $attributes }}
            wire:loading.attr="disabled"
            
            class="w-full p-2 transition duration-100 ease-in-out rounded-lg border-2 placeholder-secondary-dark/70 bg-secondary-DEFAULT-50 dark:bg-secondary-DEFAULT-950 text-dark dark:text-white dark:placeholder-secondary-light/70 border-secondary-light focus:ring-primary-400 focus:border-primary-400 dark:border-secondary-dark form-input focus:outline-none 
            @class([
                'text-xs py-0.5' => $size === 'xs',
                'text-sm py-1' => $size === 'sm',
                'text-base py-1.5' => $size === 'md',
                'text-lg py-2' => $size === 'lg',
                'text-xl py-3' => $size === 'xl',
                'border-red-400 text-red-400' => $error,
                'border-green-400 text-green-400' => $success,
                'opacity-70 cursor-not-allowed' => $loading,
                'pl-10' => $icon && $iconStyle === 'start',
                'pr-10' => $icon && $iconStyle === 'end',
                $class,
            ])"
        />

        @if($icon && ($iconStyle === 'end' || $type === 'password'))
            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                <i class="{{ $type === 'password' ? ($showPassword ? 'mdi:eye-outline' : 'mdi:eye-off-outline') : $icon }} {{ $iconClass }} text-zinc-400 cursor-pointer"
                   @if($type === 'password') wire:click="toggleShowPassword" @endif>
                </i>
            </div>
        @endif
    </div>

    @error($error)<p class="mt-1 text-xs text-red-400">{{ $error }}</p>@enderror
    @if ($success)
        <p class="mt-1 text-xs text-green-400">{{ $success }}</p>
    @endif
</div>

<style>
    .dark-autofill input:-webkit-autofill,
    .dark-autofill input:-webkit-autofill:hover,
    .dark-autofill input:-webkit-autofill:focus,
    .dark-autofill input:-webkit-autofill:active {
        -webkit-text-fill-color: #fafafa !important;
        -webkit-box-shadow: 0 0 0 30px #27272a inset !important;
        transition: all 0.2s ease-in-out;
        border-radius: 1.25px !important;
        border-color: #27272a !important;
    }

    .light-autofill input:-webkit-autofill,
    .light-autofill input:-webkit-autofill:hover,
    .light-autofill input:-webkit-autofill:focus,
    .light-autofill input:-webkit-autofill:active {
        -webkit-text-fill-color: #09090b !important;
        -webkit-box-shadow: 0 0 0 30px #fafafa inset !important;
        transition: all 0.2s ease-in-out;
        border-radius: 1.25px !important;
        border-color: #27272a !important;
    }
</style>
