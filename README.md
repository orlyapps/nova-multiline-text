# BelongsTo Field with Dependency

[![Latest Version on Packagist](https://img.shields.io/packagist/v/orlyapps/nova-multiline-text.svg?style=flat-square)](https://packagist.org/packages/Orlyapps/nova-multiline-text)
[![Total Downloads](https://img.shields.io/packagist/dt/orlyapps/nova-multiline-text.svg?style=flat-square)](https://packagist.org/packages/Orlyapps/nova-multiline-text)

![Sample](https://raw.githubusercontent.com/orlyapps/nova-multiline-text/master/docs/index.png)
![Sample](https://raw.githubusercontent.com/orlyapps/nova-multiline-text/master/docs/detail.png)

## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require orlyapps/nova-multiline-text
```

## Usage

Use this field in your Nova Resource

```php
// ...
use Orlyapps\NovaMultilineText\MultilineText;
// ...

public function fields(Request $request)
{
    return [
        ID::make()->sortable(),
        MultilineText::make('Company', function () {
            return [$this->company->name, $this->department->name, $this->location->name];
        }),
        MultilineText::make('Company', function () {
            return ['First Line highlighted', 'Second Line', 'Lorem Ipsum'];
        }),
         MultilineText::make('Company', function () {
            return ['First Line', 'Second Line', 'Lorem Ipsum'];
        })->highlightFirst(false),

    ];
}
```

### Security

If you discover any security related issues, please email info@orlyapps.de instead of using the issue tracker.

## Credits

-   [Orlyapps](https://github.com/orlyapps)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
