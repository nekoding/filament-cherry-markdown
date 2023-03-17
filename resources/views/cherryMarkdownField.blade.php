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
    <div
        x-data=""
        x-init="cherryEditor = new Cherry({
            id: 'x',
            value: state,
            locale: 'en_US',
            editor: {
                height: '500px',
            },
            forceAppend: true,
            callback: {}
        });
        
        cherryEditor.onChange(debounce((e) => {
            state = String(e.markdown)
        }))"
        wire:ignore
    >
        <div id="cherry-editor"></div>
    </div>
</x-forms::field-wrapper>
