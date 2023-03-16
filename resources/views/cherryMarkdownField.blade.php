<x-forms::field-wrapper :id="$getId()" :label="$getLabel()" :label-sr-only="$isLabelHidden()" :helper-text="$getHelperText()" :hint="$getHint()"
    :hint-action="$getHintAction()" :hint-color="$getHintColor()" :hint-icon="$getHintIcon()" :required="$isRequired()" :state-path="$getStatePath()">
    <div x-data="" x-init="editor = new Cherry({
        id: 'cherry-editor',
        locale: 'en_US',
        editor: {
            height: '500px',
        },
        forceAppend: true
    })" wire:ignore="true">
        <div id="cherry-editor"></div>
    </div>
</x-forms::field-wrapper>
