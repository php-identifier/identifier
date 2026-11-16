# identifier/identifier Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/2.0.0/) and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Added

- `Identifier::jsonSerialize()`, `Identifier::__toString()`, and the `create()` methods of `BytesIdentifierFactory`, `DateTimeIdentifierFactory`, and `IntegerIdentifierFactory` now have the `#[Override]` attribute, since they redeclare methods of their parent interfaces.
- `Identifier\Exception\NotConvertible`, which a method throws when it cannot return the identifier's value in the form it promises. `DateTimeIdentifier::getDateTime()` MUST throw it if the implementation cannot return the date-time.

### Changed

- **Breaking:** `Identifier::equals()` MUST NOT throw an exception. It returns `false` for a value the implementation cannot or chooses not to compare, and only `Identifier::compareTo()` throws `NotComparable`.
- **Breaking:** `Identifier\Exception\NotComparable` now extends `Identifier\Exception\InvalidArgument`.
- **Breaking:** `IntegerIdentifier::toInteger()` throws `NotConvertible` in place of `OutOfRange`.
- **Breaking:** `IntegerIdentifierFactory::createFromInteger()` throws `InvalidArgument` for an integer outside the range the implementation supports, in place of `OutOfRange`.
- `InvalidArgument` now applies to any method of the specification given an argument that is not a legal value, not only to factory methods. The rule does not apply to `Identifier::equals()`, which throws nothing.
- `Identifier::compareTo()` and `Identifier::equals()` have new requirements: the two MUST agree, an identifier MUST be equal to itself, and `compareTo()` MUST follow the comparison rules in the specification, so that sorting is dependable.
- The minimum supported PHP version is now 8.3.

### Removed

- **Breaking:** `Identifier\Exception\OutOfRange`. Use `InvalidArgument` for an argument that is not a legal value and `NotConvertible` for a value that cannot be returned.

### Fixed

- `IntegerIdentifier::toInteger()` and `IntegerIdentifierFactory::createFromInteger()` now use the `decimal-int-string` type in place of `numeric-string`, so static analysis accepts only decimal integer strings.

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
