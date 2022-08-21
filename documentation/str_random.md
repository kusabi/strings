## Description

Creates a string of random characters

```php
str_random(int $length, string $alphabet): string
```

## Parameters

**length**

The length of the returned string

**length**

The characters allowed in the result

## Returns

A random string of length with characters from the alphabet.

## Examples

**Example # 1 Example uses of str_random()**

```php
echo str_random(5);
```

The above example may output:

```
uwceb
```

**Example # 2 Example uses of str_random() with a custom alphabet**

```php
echo str_random(5, 'def');
```

The above example may output:

```
ddefe
```