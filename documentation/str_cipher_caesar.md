## Description

Transform a string by shifting each character up or down the alphabet.

```php
str_cipher_caesar(string $string, string $shift): bool
```

## Parameters

**string**

The string to transform

**shift**

The number of spaces each letter will be moved up or down the alphabet

## Returns

Returns a new string, where each letter has been moved up or down the alphabet

## Examples

**Example # 1 Example uses of str_cipher_caesar()**

```php
echo str_cipher_caesar('Hello', 3);
```

The above example will output:

```
Khoor
```