# identifier/identifier Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## 0.2.1 - 2025-03-09

- Include section on "Providers" which was intended to be included in 0.2.0.

## 0.2.0 - 2025-03-09

- Changed `BinaryIdentifier` and `BinaryIdentifierFactory` to `BytesIdentifier` and `BytesIdentifierFactory`, respectively.
- `Identifier` now extends `Stringable` and requires `toString()` as an alias of `__toString()`.

## 0.1.0 - 2022-11-27

- Initial publication of specification draft and interfaces.
