## Description

Determine if a string contains another string.

This method is case-sensitive.

```php
str_contains(string $haystack, string $needle): bool
```

## Parameters

**haystack**

The string to search in

**needle**

The string to search for

## Returns

Returns true if the needle can be found in the haystack, otherwise returns false.

## Examples

**Example # 1 Example uses of str_contains()**

```php
if (str_contains('Hello great big world', 'great big')) {
    echo 'yes';
} else {
    echo 'no';
}
```

The above example will output:

```
yes
```