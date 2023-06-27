# Data Dome

This will enable Data Dome's [javascript tags](https://docs.datadome.co/docs/javascript-tag#privacy). Data dome required changes to the hosting service (ie Nginx) See the documentation [here](https://docs.datadome.co/docs).

## Installation

You can install the package via composer:

```bash
composer require astrogoat/data-dome
```

## Usage

```php
$dataDome = new Astrogoat\DataDome();
echo $dataDome->echoPhrase('Hello, Astrogoat!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits


- [Brett Michalick](https://github.com/bmmage)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
