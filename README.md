# Laravel Support (Fork)

**Forked from Rinvex common support** helpers, contracts, and traits required by various packages. Validator functionality, and basic controller included out-of-the-box.

> **Note:** This is a maintained fork of the original Rinvex package. Original package development may have stopped.

[![Packagist](https://img.shields.io/packagist/v/somuoki/laravel-support.svg?label=Packagist&style=flat-square)](https://packagist.org/packages/somuoki/laravel-support)
[![StyleCI](https://styleci.io/repos/60968880/shield)](https://styleci.io/repos/60968880)
[![License](https://img.shields.io/packagist/l/rinvex/laravel-support.svg?label=License&style=flat-square)](https://github.com/rinvex/laravel-support/blob/develop/LICENSE)


> **Note:** this package is just a support package for other Rinvex packages, which may not be useful on it's own, but contains some complementary generic functionality and also may not respect SemVer and break backward compatibility.


## Installation

Install via `composer require somuoki/laravel-support`


## Usage

### `mimetypes()` helper

The `mimetypes` method gets valid mime types:
```php
$mimetypes = mimetypes();
```

### `timezones()` helper

The `timezones` method gets valid timezones:
```php
$timezones = timezones();
```

### unique_with Validator Rule

This feature contains a variant of the `validateUnique` rule for Laravel, that allows for validation of multi-column UNIQUE indexes.

It was forked and merged from the awesome [felixkiss/uniquewith-validator](https://github.com/felixkiss/uniquewith-validator) package, which at the time been outdated and un-maintained for a long time. Many thanks to core contributors for developing this.


## Changelog

Refer to the [Changelog](CHANGELOG.md) for a full history of the project.


## Support

This fork is maintained by Solomon Muoki. Support channels:

- [Help on Email](mailto:somuoki977@gmail.com)
- [GitHub Issues](https://github.com/somuoki/laravel-support/issues)

Original package support:
- [Rinvex Support](mailto:help@rinvex.com)


## Contributing & Protocols

Thank you for considering contributing to this project! The contribution guide can be found in [CONTRIBUTING.md](CONTRIBUTING.md).

Bug reports, feature requests, and pull requests are very welcome.

- [Versioning](CONTRIBUTING.md#versioning)
- [Pull Requests](CONTRIBUTING.md#pull-requests)
- [Coding Standards](CONTRIBUTING.md#coding-standards)
- [Feature Requests](CONTRIBUTING.md#feature-requests)
- [Git Flow](CONTRIBUTING.md#git-flow)


## Security Vulnerabilities

If you discover a security vulnerability within this project, please send an e-mail to [somuoki977@gmail.com](mailto:somuoki977@gmail.com). All security vulnerabilities will be promptly addressed.


## About the Maintainer

This package is currently maintained by Solomon Muoki as a community fork. The original Rinvex package served as the foundation for this continued development.


## License

This software is released under [The MIT License (MIT)](LICENSE).

(c) 2016-2022 Rinvex LLC, Some rights reserved.  
(c) 2023-present Solomon Muoki, Maintained fork.
