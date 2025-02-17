<div>
    <div class="flex flex-row w-full">
        <aside
            class="relative flex flex-col w-full min-h-screen px-4 pt-6 pb-4 leading-6 border-e border-secondary-light/50 dark:border-secondary-dark/50 gap-x-4 lg:sticky lg:top-16 lg:flex lg:basis-72 basis-full text-slate-50">
            <ul class="flex flex-col gap-y-0.5 text-dark dark:text-white">
                @foreach ($documents as $item)
                    <li class="flex flex-col" wire:key="{{ $item->id }}">
                        <a class="relative flex flex-row justify-between p-2 text-sm font-semibold leading-5 duration-150 ease-in-out rounded-md cursor-pointer outline-2"
                            href="{{ route('home.docs.index', ['url' => $item->url]) }}" wire:navigate>
                            {{ $item->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </aside>

        <div class="flex flex-col w-full min-h-screen mx-4 my-4 prose text-start text-dark dark:text-light dark:prose-invert">
            @php
                $content = json_decode($document->body, true);
                $htmlContent = '';

                foreach ($content['blocks'] as $block) {
                    if ($block['type'] == 'header') {
                        $htmlContent .=
                            '<h' .
                            e($block['data']['level']) .
                            '>' .
                            e($block['data']['text']) .
                            '</h' .
                            e($block['data']['level']) .
                            '>';
                    } elseif ($block['type'] == 'paragraph') {
                        $htmlContent .= '<p>' . e($block['data']['text']) . '</p>';
                    }
                }

                print $htmlContent;
            @endphp
        </div>
    </div>
</div>
