<div>
    <div class="flex flex-row w-full">
        <aside
            class="relative flex flex-col w-full min-h-screen px-4 pt-6 pb-4 leading-6 border-e border-secondary-light/50 dark:border-secondary-dark/50 gap-x-4 lg:sticky lg:top-16 lg:flex lg:basis-72 basis-full text-slate-50">
            <ul class="flex flex-col gap-y-0.5 text-dark dark:text-white" x-data="{ hash: window.location.hash }"
                @hashchange.window="hash = window.location.hash">
                <li class="flex flex-col">
                    <a href="#Introduction"
                        x-bind:class="{
                            (hash === '#Contribution') ? 'bg-slate-800 text-sky-300' :
                            'bg-light dark:bg-dark text-dark dark:text-white' }"
                        class="relative flex flex-row justify-between p-2 text-sm font-semibold leading-5 duration-150 ease-in-out rounded-md cursor-pointer outline-2">
                        Introduction
                    </a>
                </li>
                <li class="flex flex-col">
                    <a href="#Contribution"
                        x-bind:class="{
                            (hash === '#Contribution') ? 'bg-slate-800 text-sky-300' :
                            'bg-light dark:bg-dark text-dark dark:text-white' }"
                        class="relative flex flex-row justify-between p-2 text-sm font-semibold leading-5 duration-150 ease-in-out rounded-md cursor-pointer outline-2">
                        Contribution Guide
                    </a>
                </li>
            </ul>
        </aside>

        <div class="flex flex-col w-full min-h-screen mx-4 my-4 gap-y-10">
            <div class="w-full" id="#Introduction">
                @include('components.elements.markdown.index', [
                    'path' => 'views/pages/home/pages/docs/markdown/Introduction.md',
                ])
            </div>

            <div class="w-full" id="#Contribution">
                @include('components.elements.markdown.index', [
                    'path' => 'views/pages/home/pages/docs/markdown/Contribution.md',
                ])
            </div>
        </div>
    </div>
</div>
