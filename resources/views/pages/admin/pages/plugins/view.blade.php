<div>
    <div class="flex flex-col xs:mb-20 md:mb-0 gap-y-3">
        <div>
            <x-elements.input label="Name" wire:model="name" />
        </div>
        <div>
            <x-elements.input label="Desc" wire:model="desc" />
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

    @assets
        <!-- تحميل Editor.js وأدواته اللازمة -->

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
                data: {!! !empty($body) ? '`'.$body.'`' : '{}' !!},
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
