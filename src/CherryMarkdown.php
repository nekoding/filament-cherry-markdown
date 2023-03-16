<?php

namespace Nekoding\FilamentCherryMarkdown;

use Filament\Forms\Components\Concerns;
use Filament\Forms\Components\Contracts\HasFileAttachments;
use Filament\Forms\Components\Field;

class CherryMarkdown extends Field implements HasFileAttachments
{
    use Concerns\HasFileAttachments;

    protected string $view = 'filament-cherry-markdown::cherryMarkdownField';
}
