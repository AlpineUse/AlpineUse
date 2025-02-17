<div>
    <div class="flex flex-col xs:mb-20 md:mb-0 gap-y-3">
        <div>
            <x-elements.input label="Title" wire:model="title" />
        </div>
        <div>
            <x-elements.input label="URL" wire:model="url" />
        </div>
        <div wire:ignore>
            <div id="editorjs"
                class="z-30 flex flex-col h-screen min-w-full p-2 overflow-y-scroll prose border shadow max-h-[28rem] rounded-2xl text-start bg-secondary-light/10 dark:bg-secondary-dark/10 text-dark dark:text-light dark:prose-invert border-secondary-dark/30 dark:border-secondary-light/30">
            </div>
        </div>
        <x-elements.button size="sm" class="rounded-lg" wire:click="save" primary>حفظ</x-elements.button>
    </div>

    <!-- تحميل Editor.js وأدواته اللازمة -->
    <style>
        .ce-popover__container {
            margin-bottom: 7vh;
        }

        <style>:root {
            /* background color */
            --main: #111827;

            /* Toolbar and popover */
            --primary: #0f172a;

            /* On hover or selected */
            --selected: rgba(255, 255, 255, 0.2);

            /* Border color */
            --border: #1e293b;

            /* Text and icon colors */
            --text: white;
        }

        * {
            padding: 0;
            margin: 0;
            font-family: sans-serif;
        }

        .dark {
            background-color: var(--main);
        }

        .dark .ce-toolbar__plus,
        .dark .ce-toolbar__settings-btn,
        .dark .ce-popover-item__title,
        .dark .ce-popover-item__icon {
            color: var(--text);
        }

        .dark .cdx-search-field.ce-popover__search {
            background-color: #1e293b4d;
            border-color: var(--border);
        }

        .dark .cdx-search-field__input {
            color: var(--text);
        }

        .dark .cdx-block,
        .dark .ce-block {
            color: var(--text);
        }

        .dark .ce-inline-toolbar,
        .dark .ce-conversion-tool__icon,
        .dark .ce-popover-item__icon,
        .dark .tc-popover__item-icon {
            color: var(--text);
            background-color: var(--primary);
            border-color: var(--border);
        }

        .dark .ce-popover,
        .dark .ce-conversion-toolbar,
        .dark .ce-inline-toolbar,
        .dark .tc-popover {
            background-color: var(--primary);
            border-color: var(--border);
            box-shadow: 0 3px 15px -3px var(--border);
        }

        .dark .ce-inline-tool:hover,
        .dark .ce-inline-toolbar__dropdown:hover,
        .dark .ce-toolbar__plus:hover,
        .dark .ce-toolbar__settings-btn:hover,
        .dark .ce-conversion-tool:hover,
        .dark .ce-popover-item:hover {
            background-color: var(--selected);
        }

        .dark *::selection,
        .dark .ce-block.ce-block--selected .ce-block__content {
            background-color: var(--selected);
        }

        .dark .ce-popover__items {
            scrollbar-color: var(--border) var(--main);
        }

        /* table class wrapper */
        .dark .tc-wrap,
        .dark .tc-wrap * {
            --color-border: var(--border);
            --color-text-secondary: var(--text);
            --color-background: var(--selected);
            --toggler-dots-color: var(--selected);
            --toggler-dots-color-hovered: var(--text);
        }

        @media (max-width: 650px) {

            .dark .ce-toolbar__settings-btn,
            .dark .ce-toolbar__plus {
                background-color: var(--primary);
                border-color: var(--border);
                box-shadow: 0 3px 15px -3px var(--border);
            }
        }
    </style>

    @assets
        <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
        <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
        <script src="https://cdn.jsdelivr.net/npm/@editorjs/paragraph@latest"></script>
        <script src="https://cdn.jsdelivr.net/npm/@editorjs/list@1.10.0"></script>
        <script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@latest"></script>
        <script src="https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest"></script>
        <script src="https://cdn.jsdelivr.net/npm/@editorjs/checklist@latest"></script>
        <script src="https://cdn.jsdelivr.net/npm/@editorjs/warning@latest"></script>
        <script src="https://cdn.jsdelivr.net/npm/@editorjs/marker@latest"></script>
        <script src="https://cdn.jsdelivr.net/npm/@editorjs/code@latest"></script>
        <script src="https://cdn.jsdelivr.net/npm/@editorjs/delimiter@latest"></script>
        <script src="https://cdn.jsdelivr.net/npm/@editorjs/inline-code@latest"></script>
        <script src="https://cdn.jsdelivr.net/npm/@editorjs/link@latest"></script>
        <script src="https://cdn.jsdelivr.net/npm/@editorjs/embed@latest"></script>
        <script src="https://cdn.jsdelivr.net/npm/@editorjs/table@latest"></script>
    @endassets

    @script
        <script data-navigate-once>
            const editor = new EditorJS({
                holder: 'editorjs',
                autofocus: true,
                data: {!! !empty($body) ? $body : '{}' !!},
                tools: {
                    header: {
                        class: window.Header,
                        inlineToolbar: ['bold', 'marker', 'link'],
                        config: {
                            placeholder: 'Heading <h1></h1> Here'
                        }
                    },
                    paragraph: {
                        class: window.Paragraph,
                        inlineToolbar: ['bold', 'marker', 'link'],
                        config: {
                            placeholder: 'Paragraph <p></p> Here'
                        }
                    },
                    list: {
                        class: window.List,
                        inlineToolbar: ['bold', 'marker', 'link'],
                    },
                    image: window.SimpleImage,
                    checklist: window.Checklist,
                    quote: window.Quote,
                    warning: window.Warning,
                    marker: window.Marker,
                    code: window.CodeTool,
                    delimiter: window.Delimiter,
                    inlineCode: window.InlineCode,
                    linkTool: window.LinkTool,
                    embed: window.Embed,
                    table: window.Table
                },
                onChange: () => {
                    editor.save().then((content) => {
                        $wire.body = JSON.stringify(content);
                    }).catch((error) => console.error('Saving error:', error));
                }
            });
        </script>
    @endscript
</div>
