# Filament Cherry Markdown

Implementation Cherry Markdown Editor for Filamentphp. Inspired from [https://github.com/spatie/filament-markdown-editor](https://github.com/spatie/filament-markdown-editor)

## Installation

You can install the package via composer:

```bash
composer require nekoding/filament-cherry-markdown
```

## Usage

```php
use Nekoding\FilamentCherryMarkdown\CherryMarkdown;

public static function form(Form $form): Form
{
    return $form
        ->schema([
            // other fields ...
            CherryMarkdown::make('detail')
                ->fileAttachmentsDisk('public')
                ->fileAttachmentsVisibility('public')
                ->required(),
        ]);
}
```

### Testing

```bash
composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email enggartivandi@outlook.com instead of using the issue tracker.

## Credits

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
