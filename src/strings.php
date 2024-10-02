<?php

if (!defined('CIPHER_ALBHED')) {
    define('CIPHER_ALBHED', 'ypltavkrezgmshubxncdijfqowYPLTAVKREZGMSHUBXNCDIJFQOW');
}

if (!defined('CIPHER_ENGLISH')) {
    define('CIPHER_ENGLISH', 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
}

if (!defined('CIPHER_INVERT')) {
    define('CIPHER_INVERT', 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz');
}

if (!function_exists('str_case_camel')) {
    /**
     * Convert a string to camelCase
     *
     * @param string $string
     *
     * @return string
     */
    function str_case_camel(string $string): string
    {
        return lcfirst(str_replace('_', '', ucwords(
            strtolower(
                preg_replace('/[ _-]|(?<=[^\WA-Z])(?=[A-Z])|(?<=[A-Z])(?=[A-Z][a-z])/', '_', $string)
            ),
            '_'
        )));
    }
}

if (!function_exists('str_case_kebab')) {
    /**
     * Convert a string to kebab-case
     *
     * @param string $string
     *
     * @return string
     */
    function str_case_kebab(string $string): string
    {
        return strtolower(
            preg_replace('/[ _-]|(?<=[^\WA-Z])(?=[A-Z])|(?<=[A-Z])(?=[A-Z][a-z])/', '-', $string)
        );
    }
}

if (!function_exists('str_case_pascal')) {
    /**
     * Convert a string to PascalCase
     *
     * @param string $string
     *
     * @return string
     */
    function str_case_pascal(string $string): string
    {
        return str_replace('_', '', ucwords(
            strtolower(
                preg_replace('/[ _-]|(?<=[^\WA-Z])(?=[A-Z])|(?<=[A-Z])(?=[A-Z][a-z])/', '_', $string)
            ),
            '_'
        ));
    }
}

if (!function_exists('str_case_sentence')) {
    /**
     * Convert a string to Sentence case
     *
     * @param string $string
     *
     * @return string
     */
    function str_case_sentence(string $string): string
    {
        return ucfirst(
            strtolower(
                preg_replace('/[ _-]|(?<=[^\WA-Z])(?=[A-Z])|(?<=[A-Z])(?=[A-Z][a-z])/', ' ', $string)
            )
        );
    }
}

if (!function_exists('str_case_snake')) {
    /**
     * Convert a string to snake_case
     *
     * @param string $string
     *
     * @return string
     */
    function str_case_snake(string $string): string
    {
        return strtolower(
            preg_replace('/[ _-]|(?<=[^\WA-Z])(?=[A-Z])|(?<=[A-Z])(?=[A-Z][a-z])/', '_', $string)
        );
    }
}

if (!function_exists('str_case_title')) {
    /**
     * Convert a string to Title Case
     *
     * @param string $string
     *
     * @return string
     */
    function str_case_title(string $string): string
    {
        return ucwords(
            strtolower(
                preg_replace('/[ _-]|(?<=[^\WA-Z])(?=[A-Z])|(?<=[A-Z])(?=[A-Z][a-z])/', ' ', $string)
            )
        );
    }
}

if (!function_exists('str_cipher_caesar')) {
    /**
     * Shift the characters of a string up the alphabet
     *
     * @param string $string
     * @param int $shift
     *
     * @return string
     */
    function str_cipher_caesar(string $string, int $shift): string
    {
        $result = '';
        foreach (str_split($string) as $ch) {
            $ord = ord($ch);
            if ($ord >= 65 && $ord <= 122) {
                if ($ord <= 90) {
                    $offset = 65;
                } elseif ($ord >= 97) {
                    $offset = 97;
                } else {
                    $result .= $ch;
                    continue;
                }
            } else {
                $result .= $ch;
                continue;
            }
            $shifted = ($ord - $offset + $shift) % 26;
            $result .= chr(($shifted < 0 ? 26 + $shifted : $shifted) + $offset);
        }
        return $result;
    }
}

if (!function_exists('str_cipher_caesar_reverse')) {
    /**
     * Shift the characters of a string down the alphabet
     *
     * @param string $input
     * @param int $shift
     *
     * @return string
     */
    function str_cipher_caesar_reverse(string $input, int $shift): string
    {
        return str_cipher_caesar($input, 26 - $shift);
    }
}

if (!function_exists('str_cipher_mono_alphabetic')) {
    /**
     * Substitute characters with those from another alphabet
     *
     * @param string $input
     * @param string $alpha
     * @param string $beta
     *
     * @return string
     */
    function str_cipher_mono_alphabetic(string $input, string $alpha, string $beta): string
    {
        $result = '';
        foreach (str_split($input) as $character) {
            if (($position = strpos($alpha, $character)) !== false) {
                $result .= $beta[$position];
            } else {
                $result .= $character;
            }
        }
        return $result;
    }
}

if (!function_exists('str_contains')) {
    /**
     * @param string $haystack
     * @param string $needle
     *
     * @return bool
     */
    function str_contains(string $haystack, string $needle): bool
    {
        return $needle === '' || strpos($haystack, $needle) !== false;
    }
}

if (!function_exists('str_ends_with')) {
    /**
     * @param string $haystack
     * @param string $needle
     *
     * @return bool
     */
    function str_ends_with(string $haystack, string $needle): bool
    {
        return $needle === '' || substr($haystack, -strlen($needle)) === $needle;
    }
}

if (!function_exists('str_random')) {
    /**
     * Creates a string of random characters
     *
     * @param int $size
     * @param string $alphabet
     *
     * @return string
     */
    function str_random(int $size, string $alphabet = CIPHER_ENGLISH): string
    {
        return substr(str_repeat($alphabet, ceil($size / strlen($alphabet))), -$size);
    }
}

if (!function_exists('str_slug')) {
    /**
     * Convert a string to slug
     *
     * @param string $string
     *
     * @return string
     */
    function str_slug(string $string): string
    {
        return str_case_kebab($string);
    }
}

if (!function_exists('str_starts_with')) {
    /**
     * @param string $haystack
     * @param string $needle
     *
     * @return bool
     */
    function str_starts_with(string $haystack, string $needle): bool
    {
        return $needle === '' || strpos($haystack, $needle) === 0;
    }
}
