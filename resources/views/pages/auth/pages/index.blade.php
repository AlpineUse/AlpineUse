<div>
    <div class="relative px-2 leading-6 text-center text-black">
        <form wire:submit="submit" class="text-center">
            <x-elements.input icon="ic:baseline-email" label="Email" size="xl" type="email" placeholder="name@example.com" wire:model="email" error="email.error.message" />
            <x-elements.button type="submit" size="sm" class="mt-2 rounded-lg" primary>
                Sign up with Email
            </x-elements.button>
        </form>
    </div>
</div>
