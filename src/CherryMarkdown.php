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
    protected bool|array|Closure $bubbleButtons = ['h1', 'h2', 'h3', '|', 'checklist', 'quote', 'quickTable', 'code'];
    protected bool|array|Closure $floatButtons = ['h1', 'h2', 'h3', '|', 'checklist', 'quote', 'quickTable', 'code'];
    protected bool|array|Closure $toolbarButtons = [
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
        'settings',
        'panel',
        'detail'
    ];

    public function getBubbleButtons():bool|array
    {
        return $this->evaluate($this->bubbleButtons);
    }
    public function bubbleButtons(bool|array|Closure $bubbleButtons):static
    {
        $this->bubbleButtons=$bubbleButtons;
        return $this;
    }
    public function getFloatButtons():bool|array
    {
        return $this->evaluate($this->floatButtons);
    }
    public function floatButtons(bool|array|Closure $floatButtons):static
    {
        $this->floatButtons=$floatButtons;
        return $this;
    }
    public function disableFloatButtons():static
    {
        $this->floatButtons(false);
        return $this;
    }
    public function disableBubbleButtons():static
    {
        $this->bubbleButtons(false);
        return $this;
    }
}
