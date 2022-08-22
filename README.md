# Extensions to PHP native string

![Tests](https://github.com/kusabi/strings/workflows/quality/badge.svg)
[![codecov](https://codecov.io/gh/kusabi/strings/branch/main/graph/badge.svg)](https://codecov.io/gh/kusabi/strings)
[![Licence Badge](https://img.shields.io/github/license/kusabi/strings.svg)](https://img.shields.io/github/license/kusabi/strings.svg)
[![Release Badge](https://img.shields.io/github/release/kusabi/strings.svg)](https://img.shields.io/github/release/kusabi/strings.svg)
[![Tag Badge](https://img.shields.io/github/tag/kusabi/strings.svg)](https://img.shields.io/github/tag/kusabi/strings.svg)
[![Issues Badge](https://img.shields.io/github/issues/kusabi/strings.svg)](https://img.shields.io/github/issues/kusabi/strings.svg)
[![Code Size](https://img.shields.io/github/languages/code-size/kusabi/strings.svg?label=size)](https://img.shields.io/github/languages/code-size/kusabi/strings.svg)

<sup>A library that extends PHP's native string functionality</sup>

## Compatibility and dependencies

This library is compatible with PHP version `7.2`, `7.3`, `7.4`, `8.0` and `8.1`.

This library has no dependencies.

## Installation

Installation is simple using composer.

```bash
composer require kusabi/strings
```

Or simply add it to your `composer.json` file

```json
{
    "require": {
        "kusabi/strings": "^1.0"
    }
}
```

## Contributing

This library follows [PSR-1](https://www.php-fig.org/psr/psr-1/) & [PSR-2](https://www.php-fig.org/psr/psr-2/) standards.


#### Unit Tests

Before pushing any changes, please ensure the unit tests are all passing.

If possible, feel free to improve coverage in a separate commit.

```bash
vendor/bin/phpunit --prepend autoload.php
```

#### Code sniffer

Before pushing, please ensure you have run the code sniffer. **Only run it using the lowest support PHP version (7.2)**

```bash
vendor/bin/php-cs-fixer fix
```

#### Static Analyses

Before pushing, please ensure you have run the static analyses tool.

```bash
vendor/bin/phan
```

#### Benchmarks

Before pushing, please ensure you have checked the benchmarks and ensured that your code has not introduced any slowdowns.

Feel free to speed up existing code, in a separate commit.

Feel free to add more benchmarks for greater coverage, in a separate commit.

```bash
vendor/bin/phpbench run --report=speed
vendor/bin/phpbench run --report=speed --output=markdown
vendor/bin/phpbench run --report=speed --filter=benchNetFromTax --iterations=50 --revs=50000

vendor/bin/phpbench xdebug:profile
vendor/bin/phpbench xdebug:profile --gui
```


## Documentation

This library adds a number of array functions to extend PHP's native functionality

Below you can find links to the documentation for the new features.

| Function | Description |
| --- | ----------- |
| [str_case_camel](documentation/str_case_camel.md) | Converts a string to `camelCase` |
| [str_case_kebab](documentation/str_case_kebab.md) | Converts a string to `kebab-case` |
| [str_case_pascal](documentation/str_case_pascal.md) | Converts a string to `PascalCase` |
| [str_case_sentence](documentation/str_case_sentence.md) | Converts a string to `Sentence case` |
| [str_case_snake](documentation/str_case_snake.md) | Converts a string to `snake_case` |
| [str_case_title](documentation/str_case_title.md) | Converts a string to `Title Case` |
| [str_cipher_caesar](documentation/str_cipher_caesar.md) | Transform a string by shifting each letter up or down the alphabet |
| [str_cipher_caesar_reverse](documentation/str_cipher_caesar_reverse.md) | Reverse the effects of `str_cipher_caesar` |
| [str_cipher_mono_alphabetic](documentation/str_cipher_mono_alphabetic.md) | Transform a string by mapping each letter to another alphabet |
| [str_contains](documentation/str_contains.md) | Determine if a string contains another string |
| [str_ends_with](documentation/str_ends_with.md) | Determine if a string ends with another string |
| [str_random](documentation/str_random.md) | Creates a string of random characters |
| [str_slug](documentation/str_slug.md) | Converts a string to a slug |
| [str_starts_with](documentation/str_starts_with.md) | Determine if a string starts with another string |
