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

                if (isset($content['blocks']) && is_array($content['blocks'])) {
                    foreach ($content['blocks'] as $block) {
                        switch ($block['type']) {
                            case 'header':
                                $level = $block['data']['level'] ?? 1;
                                // For headers we assume plain text (you can adjust if needed)
                                $text = e($block['data']['text'] ?? '');
                                $htmlContent .= "<h{$level}>{$text}</h{$level}>";
                                break;

                            case 'paragraph':
                                // Allow <a> tags so that links render as HTML.
                                // Adjust allowed tags if needed.
                                $allowedTags = '<a>';
                                $text = strip_tags($block['data']['text'] ?? '', $allowedTags);
                                $htmlContent .= "<p>{$text}</p>";
                                break;

                            case 'list':
                                $tag = ($block['data']['style'] ?? 'unordered') === 'ordered' ? 'ol' : 'ul';
                                $htmlContent .= "<{$tag}>";
                                if (isset($block['data']['items']) && is_array($block['data']['items'])) {
                                    foreach ($block['data']['items'] as $item) {
                                        $htmlContent .= '<li>' . e($item) . '</li>';
                                    }
                                }
                                $htmlContent .= "</{$tag}>";
                                break;

                            case 'image':
                                $src = e($block['data']['file']['url'] ?? '');
                                $caption = $block['data']['caption'] ?? '';
                                $htmlContent .= '<figure>';
                                $htmlContent .= '<img src="' . $src . '" alt="' . e($caption) . '">';
                                if ($caption) {
                                    $htmlContent .= '<figcaption>' . $caption . '</figcaption>';
                                }
                                $htmlContent .= '</figure>';
                                break;

                            case 'quote':
                                $text = $block['data']['text'] ?? '';
                                $caption = $block['data']['caption'] ?? '';
                                $htmlContent .= '<blockquote>';
                                $htmlContent .= $text;
                                if ($caption) {
                                    $htmlContent .= '<footer>' . $caption . '</footer>';
                                }
                                $htmlContent .= '</blockquote>';
                                break;

                            case 'code':
                                $code = e($block['data']['code'] ?? '');
                                $htmlContent .= '<pre><code>' . $code . '</code></pre>';
                                break;

                            case 'delimiter':
                                $htmlContent .= '<hr>';
                                break;

                            case 'checklist':
                                $htmlContent .= '<ul class="checklist">';
                                if (isset($block['data']['items']) && is_array($block['data']['items'])) {
                                    foreach ($block['data']['items'] as $item) {
                                        $checked = !empty($item['checked']) ? 'checked' : '';
                                        $htmlContent .= '<li>';
                                        $htmlContent .= '<input type="checkbox" disabled ' . $checked . '>';
                                        $htmlContent .= '<span>' . e($item['text'] ?? '') . '</span>';
                                        $htmlContent .= '</li>';
                                    }
                                }
                                $htmlContent .= '</ul>';
                                break;

                            case 'table':
                                $htmlContent .= '<table>';
                                if (!empty($block['data']['content']) && is_array($block['data']['content'])) {
                                    foreach ($block['data']['content'] as $row) {
                                        $htmlContent .= '<tr>';
                                        foreach ($row as $cell) {
                                            $htmlContent .= '<td>' . e($cell) . '</td>';
                                        }
                                        $htmlContent .= '</tr>';
                                    }
                                }
                                $htmlContent .= '</table>';
                                break;

                            case 'embed':
                                $data = $block['data'];
                                $embedUrl = e($data['embed'] ?? '');
                                $caption = $data['caption'] ?? '';
                                $htmlContent .= '<div class="embed">';
                                $htmlContent .=
                                    '<a href="' . $embedUrl . '" target="_blank" rel="nofollow">' . $embedUrl . '</a>';
                                if ($caption) {
                                    $htmlContent .= '<div class="embed-caption">' . $caption . '</div>';
                                }
                                $htmlContent .= '</div>';
                                break;

                            case 'raw':
                                // Output raw HTML (ensure this is safe)
                                $htmlContent .= $block['data']['html'] ?? '';
                                break;

                            default:
                                if (!empty($block['data']['text'])) {
                                    $htmlContent .= '<p>' . $block['data']['text'] . '</p>';
                                }
                                break;
                        }
                    }
                }
            @endphp

            {!! $htmlContent !!}

        </div>
    </div>
</div>
