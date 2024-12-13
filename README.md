# This is my package tf2-faker

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cheddzy/tf2-faker.svg?style=flat-square)](https://packagist.org/packages/cheddzy/tf2-faker)
[![Total Downloads](https://img.shields.io/packagist/dt/cheddzy/tf2-faker.svg?style=flat-square)](https://packagist.org/packages/cheddzy/tf2-faker)

Package that helps you return random Team Fortress 2 names of weapons in factories.

## Installation

You can install the package via composer:

```bash
composer require cheddzy/tf2-faker --dev
```

## Usage

Provided for each TF2 class is a method to return a random weapon string in a factory:
```php
$this->faker->scoutWeapon();
```
As well as for specific slots per class:
```php
$this->faker->spyPrimary();
$this->faker->spyMelee();
$this->faker->spyPDA();
$this->faker->spyWatch();
$this->faker->spySapper();
```
These exist for all 9 classes.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Shachar MW](https://github.com/cheddZy)
- [Moonly Days](https://github.com/moonlydays)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

Test
