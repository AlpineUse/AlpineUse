<div>
    <div class="flex flex-row w-full">
        <div>
            <livewire:pages.home.components.aside />
        </div>

        <div class="flex flex-col w-full min-h-screen mx-4 my-4 prose text-start text-dark dark:text-light dark:prose-invert"
            x-data="{ show: true }" x-init="document.addEventListener('livewire:navigate', () => { show = false });" :class="show ? 'xyz-in' : 'xyz-out'" xyz="fade">
            @php
                $content = json_decode($plugin->body, true);
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
                    } elseif ($block['type'] == 'code') {
                        $htmlContent .= '<pre><code>' . e($block['data']['code']) . '</code></pre>';
                    }
                }

                print $htmlContent;
            @endphp

        </div>
    </div>
</div>