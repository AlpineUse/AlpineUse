<div>

    <!-- Head -->
    <div class="text-dark dark:text-light text-start">
        <h2 class="m-0 text-2xl font-bold leading-8 tracking-tight">
            Admin Plugins Control
        </h2>
        <p class="m-0 text-secondary-dark/60 dark:text-secondary-light/60">
            Here's a list of AlpineUse Plugins !
        </p>
    </div>
    <!-- Head -->

    <!-- Table Controls -->
    <div class="w-full mt-8 mb-0 leading-6 text-dark dark:text-light">
        <div class="flex items-center justify-between text-black">

            <!-- Search Form -->
            <div class="flex items-center flex-1">
                <input
                    class="flex w-40 h-8 px-3 py-1 m-0 text-sm leading-5 duration-150 ease-in-out bg-transparent border border-solid rounded-md lg:w-64 border-zinc-200"
                    placeholder="Filter Plugins ...">
                <button
                    class="inline-flex items-center justify-center h-8 gap-2 px-3 py-0 my-0 ml-2 mr-0 text-xs font-medium leading-4 text-center normal-case duration-150 ease-in-out bg-white border border-dashed rounded-md cursor-pointer whitespace-nowrap bg-none border-zinc-200">

                    Search
                </button>
            </div>
            <!-- Search Form -->

            <!-- Add New -->
            <button wire:click="create"
                class="items-center justify-center hidden h-8 gap-2 px-3 py-0 my-0 ml-auto mr-0 text-xs font-medium leading-4 text-center normal-case duration-150 ease-in-out bg-white border border-solid rounded-md cursor-pointer whitespace-nowrap bg-none lg:flex border-zinc-200 outline-offset-2">
                New <iconify-icon icon="ic:baseline-plus" class="text-dark"></iconify-icon>
            </button>
            <!-- Add New -->

        </div>

        <div class="relative w-full mt-4 mb-0 overflow-auto text-black border border-solid rounded-md border-zinc-200">
            <table class="w-full text-sm leading-5 border-0 border-collapse border-solid border-zinc-200 indent-0">
                <thead>
                    <tr class="duration-150 ease-in-out border-t-0 border-b border-solid border-x-0 border-zinc-200">
                        <th
                            class="h-10 px-2 font-medium text-left align-middle text-secondary-dark/80 dark:text-secondary-light/80">
                            Name
                        </th>
                        <th
                            class="h-10 px-2 font-medium text-left align-middle text-secondary-dark/80 dark:text-secondary-light/80">
                            Url
                        </th>
                        <th
                            class="h-10 px-2 font-medium text-left align-middle text-secondary-dark/80 dark:text-secondary-light/80">
                            Status
                        </th>
                        <th
                            class="h-10 px-2 font-medium text-left align-middle text-secondary-dark/80 dark:text-secondary-light/80">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="border-0 border-solid border-secondary-dark/60 dark:border-secondary-light/60">
                    @forelse ($plugins as $item)
                        <tr
                            class="duration-150 ease-in-out border-t-0 border-b border-solid text-secondary-dark dark:text-secondary-light border-x-0 border-zinc-200">
                            <td class="p-2 align-middle">
                                {{ $item->name }}
                            </td>
                            <td class="p-2 align-middle">
                                <a href="{{ route('home.docs.index', ['url' => $item->name]) }}" target="_blank">
                                    <iconify-icon icon="solar:link-bold"
                                        class="text-xl text-dark dark:text-light"></iconify-icon>
                                </a>
                            </td>
                            <td class="p-2 align-middle">
                                <button>
                                    @if ($item->status === 'active')
                                        <span wire:confirm="Are you sure?"
                                            wire:click="status('{{ $item->id }}','non-active')"
                                            class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Active</span>
                                    @else
                                        <span wire:confirm="Are you sure?"
                                            wire:click="status('{{ $item->id }}','active')"
                                            class="bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">non-Active</span>
                                    @endif
                                </button>
                            </td>
                            <td class="p-2 align-middle">
                                <a href="{{ route('admin.plugins.view', ['id' => $item->id]) }}" wire:navigate>
                                    <iconify-icon icon="tabler:edit"
                                        class="text-xl text-dark dark:text-light"></iconify-icon>
                                </a>
                                <button wire:confirm="Are you sure?" wire:click="delete({{ $item->id }})">
                                    <iconify-icon icon="tabler:trash"
                                        class="text-xl text-danger-light dark:text-danger-dark"></iconify-icon>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr
                            class="duration-150 ease-in-out border-t-0 border-b border-solid border-x-0 border-zinc-200">
                            <td class="p-2 align-middle text-secondary-dark/60 dark:text-secondary-light/60">
                                Plugin Not Found
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
