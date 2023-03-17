<?php

namespace Nekoding\FilamentCherryMarkdown;

use Closure;
use Filament\Forms\Components\Concerns;
use Filament\Forms\Components\Contracts\HasFileAttachments;
use Filament\Forms\Components\Field;

class CherryMarkdown extends Field implements HasFileAttachments
{
    use Concerns\HasFileAttachments;
    use Concerns\InteractsWithToolbarButtons;

    protected string $view = 'filament-cherry-markdown::cherryMarkdownField';

    protected array|Closure $toolbarButtons = [
        'bold',
        'italic',
        'strikethrough',
        'color',
        'header',
        'list',
        'image',
        'audio',
        'link',
        'hr',
        'br',
        'code',
        'formula',
        'toc',
        'table',
        'line-table',
        'bar-table',
        'pdf',
        'word',
        'graph',
        'settings'
    ];
}
