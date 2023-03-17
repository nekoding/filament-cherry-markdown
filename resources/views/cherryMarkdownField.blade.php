<x-forms::field-wrapper
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :hint-action="$getHintAction()"
    :hint-color="$getHintColor()"
    :hint-icon="$getHintIcon()"
    :required="$isRequired()"
    :state-path="$getStatePath()"
>

    <script>
        function debounce(func, timeout = 300) {
            let timer;
            return (...args) => {
                clearTimeout(timer);
                timer = setTimeout(() => {
                    func.apply(this, args);
                }, timeout);
            };
        }

        let cherryEditorConfiguration = @json(config('filament-cherry-markdown.editor_config'));
    </script>

    <div
        x-data="{ state: $wire.{{ $applyStateBindingModifiers('entangle(\'' . $getStatePath() . '\')') }} }"
        x-init="cherryEditor = new Cherry({
            id: 'cherry-editor',
            value: state,
            editor: {
                height: cherryEditorConfiguration.height || '100%',
                defaultModel: cherryEditorConfiguration.default_model || 'edit&preview',
            },
            toolbars: {
                toolbar: [
                    @if ($hasToolbarButton('bold')) 'bold', @endif
                    @if ($hasToolbarButton('italic')) 'italic', @endif
                    @if ($hasToolbarButton('strikethrough')) 'strikethrough', @endif '|',
                    @if ($hasToolbarButton('color')) 'color', @endif
                    @if ($hasToolbarButton('header')) 'header', @endif '|',
                    @if ($hasToolbarButton('list')) 'list', @endif {
                        insert: [
                            @if ($hasToolbarButton('image')) 'image', @endif
                            @if ($hasToolbarButton('audio')) 'audio', @endif
                            @if ($hasToolbarButton('video')) 'video', @endif
                            @if ($hasToolbarButton('link')) 'link', @endif
                            @if ($hasToolbarButton('hr')) 'hr', @endif
                            @if ($hasToolbarButton('br')) 'br', @endif
                            @if ($hasToolbarButton('code')) 'code', @endif
                            @if ($hasToolbarButton('formula')) 'formula', @endif
                            @if ($hasToolbarButton('toc')) 'toc', @endif
                            @if ($hasToolbarButton('table')) 'table', @endif
                            @if ($hasToolbarButton('line-table')) 'line-table', @endif
                            @if ($hasToolbarButton('bar-table')) 'bar-table', @endif
                            @if ($hasToolbarButton('pdf')) 'pdf', @endif
                            @if ($hasToolbarButton('word')) 'word', @endif
                        ]
                    },
                    @if ($hasToolbarButton('graph')) 'graph', @endif
                    @if ($hasToolbarButton('settings')) 'settings', @endif
                ]
            },
            locale: cherryEditorConfiguration.locale || 'zh_CN',
        });
        
        cherryEditor.onChange(debounce((e) => {
            state = String(e.markdown)
        }))"
        wire:ignore
    >
        <div id="cherry-editor"></div>
    </div>
</x-forms::field-wrapper>
