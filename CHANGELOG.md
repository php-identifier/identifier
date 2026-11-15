# identifier/identifier Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/) and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Changed

- The minimum supported PHP version is now 8.3.

## [0.4.1] - 2026-05-25

### Fixed

- Clarify that `numeric-string` means "integer string" for `IntegerIdentifier` and `IntegerIdentifierFactory`.

## [0.4.0] - 2025-06-13

### Changed

- `BytesIdentifierFactory::createFromBytes()` now requires a non-empty string for the `$identifier` parameter.
- `StringIdentifierFactory::createFromString()` now requires a non-empty string for the `$identifier` parameter.

## [0.3.1] - 2025-06-10

### Fixed

- `BytesIdentifier::toBytes()` is now correctly defined as returning a non-empty string.

## [0.3.0] - 2025-03-11

### Changed

- `Identifier` now extends `JsonSerializable`, and the `jsonSerialize()` method must be aliased to `__toString()`.

## [0.2.1] - 2025-03-09

### Fixed

- Include section on "Providers" which was intended to be included in 0.2.0.

## [0.2.0] - 2025-03-09

### Changed

- Changed `BinaryIdentifier` and `BinaryIdentifierFactory` to `BytesIdentifier` and `BytesIdentifierFactory`, respectively.
- `Identifier` now extends `Stringable` and requires `toString()` as an alias of `__toString()`.

## [0.1.0] - 2022-11-27

### Added

- Initial publication of specification draft and interfaces.

[unreleased]: https://github.com/php-identifier/identifier/compare/0.4.1...HEAD
[0.4.1]: https://github.com/php-identifier/identifier/compare/0.4.0...0.4.1
[0.4.0]: https://github.com/php-identifier/identifier/compare/0.3.1...0.4.0
[0.3.1]: https://github.com/php-identifier/identifier/compare/0.3.0...0.3.1
[0.3.0]: https://github.com/php-identifier/identifier/compare/0.2.1...0.3.0
[0.2.1]: https://github.com/php-identifier/identifier/compare/0.2.0...0.2.1
[0.2.0]: https://github.com/php-identifier/identifier/compare/0.1.0...0.2.0
[0.1.0]: https://github.com/php-identifier/identifier/commits/0.1.0/
