# Filament Cherry Markdown

![Banner](https://banners.beyondco.de/Filament%20Cherry%20Markdown.png?theme=light&packageManager=composer+require&packageName=nekoding%2Ffilament-cherry-markdown&pattern=architect&style=style_1&description=Cherry+Markdown+editor+for+filamentphp&md=1&showWatermark=0&fontSize=100px&images=template)

<!-- ALL-CONTRIBUTORS-BADGE:START - Do not remove or modify this section -->

[![All Contributors](https://img.shields.io/badge/all_contributors-1-orange.svg?style=flat-square)](#contributors-)

<!-- ALL-CONTRIBUTORS-BADGE:END -->

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

<!-- ALL-CONTRIBUTORS-LIST:START - Do not remove or modify this section -->
<!-- prettier-ignore-start -->
<!-- markdownlint-disable -->
<table>
  <tbody>
    <tr>
      <td align="center" valign="top" width="14.28%"><a href="https://blog.enggartivandi.com"><img src="https://avatars.githubusercontent.com/u/64598048?v=4?s=100" width="100px;" alt="Enggar Tivandi"/><br /><sub><b>Enggar Tivandi</b></sub></a><br /><a href="https://github.com/nekoding/filament-cherry-markdown/commits?author=nekoding" title="Code">💻</a></td>
    </tr>
  </tbody>
</table>

<!-- markdownlint-restore -->
<!-- prettier-ignore-end -->

<!-- ALL-CONTRIBUTORS-LIST:END -->

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).

## Contributors ✨

Thanks goes to these wonderful people ([emoji key](https://allcontributors.org/docs/en/emoji-key)):

<!-- ALL-CONTRIBUTORS-LIST:START - Do not remove or modify this section -->
<!-- prettier-ignore-start -->
<!-- markdownlint-disable -->
<!-- markdownlint-restore -->
<!-- prettier-ignore-end -->

<!-- ALL-CONTRIBUTORS-LIST:END -->

This project follows the [all-contributors](https://github.com/all-contributors/all-contributors) specification. Contributions of any kind welcome!
