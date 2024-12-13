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
You can also specify a class and class + slot:
```php
$this->faker->classWeapon('heavy');
$this->faker->classWeaponSlot('engineer', 'pda');
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

**NOTE:** Keep in mind spy is the only one with a Watch and Sapper slot, and Engineer and Spy are the only ones with a PDA slot!

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
