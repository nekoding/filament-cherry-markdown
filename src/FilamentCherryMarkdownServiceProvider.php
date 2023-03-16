<?php

namespace Nekoding\FilamentCherryMarkdown;

use Filament\Facades\Filament;
use Filament\PluginServiceProvider;
use Illuminate\Support\ServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentCherryMarkdownServiceProvider extends PluginServiceProvider
{

    public static string $name = "filament-cherry-markdown";

    public function bootingPackage()
    {
        Filament::registerScripts([
            'cherry-markdown-editor' => __DIR__ . '/../dist/plugin.js',
        ], true);

        Filament::registerStyles([
            // 'https://pro.fontawesome.com/releases/v5.15.4/css/all.css',
            'https://cdn.jsdelivr.net/npm/cherry-markdown/dist/cherry-markdown.min.css',
            'spatie-markdown-editor' => __DIR__ . '/../resources/css/plugin.css',
        ]);
    }
}
