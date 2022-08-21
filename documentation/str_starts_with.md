## Description

Determine if a string tarts with another string

This method is case-sensitive.

```php
str_starts_with(string $haystack, string $needle): bool
```

## Parameters

**haystack**

The string to search in

**needle**

The string to search for

## Returns

Returns true if haystack starts with the needle, otherwise returns false.

## Examples

**Example # 1 Example uses of str_starts_with()**

```php
if (str_starts_with('Hello great big world', 'Hello')) {
    echo 'yes';
} else {
    echo 'no';
}
```

The above example will output:

```
yes
```