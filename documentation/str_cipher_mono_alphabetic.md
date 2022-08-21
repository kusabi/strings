## Description

Map letters from one alphabet to another

```php
str_cipher_mono_alphabetic(string $string, string $alpha, string $beta): bool
```

This function has defined some constants for common alphabets

```php
CIPHER_ALBHED='ypltavkrezgmshubxncdijfqowYPLTAVKREZGMSHUBXNCDIJFQOW';
CIPHER_ENGLISH='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
CIPHER_INVERT='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
```

## Parameters

**string**

The string to transform

**alpha**

The alphabet to map from

**beta**

The alphabet to map to

## Returns

Returns a new string, where each letter has been mapped to a new alphabet

## Examples

**Example # 1 Example uses of str_cipher_mono_alphabetic()**

```php
echo str_cipher_mono_alphabetic('abc', 'abc', 'xyz');
```

The above example will output:

```
xyz
```

**Example # 2 Using the defined constant to convert to AlBhed**

```php
echo str_cipher_mono_alphabetic('What is this?', CIPHER_ENGLISH, CIPHER_ALBHED);
```

The above example will output:

```
Fryd ec drec?
```